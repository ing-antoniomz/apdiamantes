<?php

namespace App\Exports;

use Maatwebsite\Excel\Excel;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeExport;
use Maatwebsite\Excel\Files\TemporaryFile;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Files\LocalTemporaryFile;

/**
 * Clase para exportar datos de usuarios invitados a una plantilla de Excel.
 *
 * Esta clase utiliza una plantilla predefinida para rellenar los datos de un usuario invitado
 * y generar un archivo Excel con la información proporcionada.
 */
class InviteUsersExport implements WithEvents
{
    use Exportable;

    /**
     * @var array $datos Los datos del usuario invitado.
     */
    protected $datos;

    /**
     * @var array $mapa Mapeo de los campos de datos a las celdas de la plantilla de Excel.
     */
    protected $mapa;

    /**
     * Constructor de la clase.
     *
     * Este constructor inicializa los datos del usuario invitado y define el mapeo de los campos
     * a las celdas correspondientes en la plantilla de Excel.
     *
     * @param array $datos Los datos del usuario invitado.
     */
    public function __construct(array $datos)
    {
        $this->datos = $datos;

        // Construcción de campos adicionales
        $this->datos['nombre_completo'] = $datos['nombre'] . ' ' . $datos['apellido_paterno'] . ' ' . $datos['apellido_materno'] ?? null;
        $this->datos['calle_completa_fiscal'] = $datos['direccion_fiscal_calle'] . ' ' . $datos['direccion_fiscal_numero'] ?? null;
        $this->datos['calle_completa_envio'] = $datos['direccion_envio_calle'] . ' ' . $datos['direccion_envio_numero'] ?? null;

        // Determinación condicional del RFC según el tipo de persona
        $rfcCelda = $this->datos['radioPersona'] === 'FISICA' ? 'F14' : 'F22';

        // Definición del mapeo de campos a celdas
        $this->mapa = [
            'nombre_completo' => 'B14',
            'rfc' => $rfcCelda,
            'cosolicitante' => 'B17',
            'cosolicitante_rfc' => 'F17',
            'company' => 'B22',
            'persona_autorizada' => 'B25',
            'beneficiario1' => 'C45',
            'beneficiario2' => 'C46', // Opcional
            'correo' => 'B37',
            'banco' => 'B42',
            'cuenta' => 'D42',
            'sucursal' => 'F42', // Opcional
            'titular_cuenta' => 'G42',
            // Dirección fiscal
            'calle_completa_fiscal' => 'B30',
            'direccion_fiscal_colonia' => 'F30',
            'direccion_fiscal_ciudad' => 'B33',
            'direccion_fiscal_estado' => 'D33',
            'direccion_fiscal_codigo_postal' => 'F33',
            'direccion_fiscal_telefono_fiscal' => 'G33', // Opcional
            // Dirección de envío
            'calle_completa_envio' => 'B50',
            'direccion_envio_colonia' => 'F50',
            'direccion_envio_ciudad' => 'B53',
            'direccion_envio_estado' => 'D53',
            'direccion_envio_codigo_postal' => 'F53',
            'direccion_envio_telefono_fiscal' => 'G53', // Opcional
        ];
    }

    /**
     * Registra los eventos necesarios para la exportación.
     *
     * Este método define los eventos que se ejecutarán antes y después de la exportación,
     * como la apertura de la plantilla y el llenado de los datos en las celdas correspondientes.
     *
     * @return array<string, callable> Un arreglo de eventos y sus manejadores.
     */
    public function registerEvents(): array
    {
        return [
            // Evento que se ejecuta antes de la exportación
            BeforeExport::class => function (BeforeExport $event) {
                $templatePath = public_path('apdiamantes/media/apdiamantes_inscripcion.xlsx');

                // Crear un archivo temporal a partir de la plantilla existente
                $tempFile = new LocalTemporaryFile($templatePath);

                // Reabrir el archivo como plantilla
                $event->writer->reopen($tempFile, Excel::XLSX);
            },

            // Evento que se ejecuta después de la exportación
            AfterSheet::class => function (AfterSheet $event) {
                // Acceder al Spreadsheet y luego a la hoja "Distribucion"
                $spreadsheet = $event->sheet->getDelegate()->getParent();
                $sheet = $spreadsheet->getSheetByName('Distribucion');

                // Establecer la fecha actual en la celda G7
                $sheet->setCellValue('G7', now()->format('d/m/Y'));

                // Rellenar las celdas con los datos mapeados
                foreach ($this->mapa as $campo => $celda) {
                    $valor = (string) ($this->datos[$campo] ?? '');

                    // Verificar si la celda requiere formato de texto
                    if ($celda === 'D42') {
                        $sheet->getStyle($celda)
                            ->getNumberFormat()
                            ->setFormatCode(\PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_TEXT);
                    }

                    // Establecer el valor en la celda correspondiente
                    $sheet->setCellValueExplicit($celda, $valor, \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING);
                }
            },
        ];
    }
}
