<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Permission;
use Symfony\Component\HttpKernel\Exception\HttpException;

class NivelServices
{
    /**
     * Actualiza un nivel (rol) y su información asociada en el sistema.
     *
     * @param int $id ID del nivel (rol) a actualizar.
     * @param array $data Datos del nivel y sus archivos relacionados.
     * @return Role Rol actualizado.
     *
     * @throws HttpException Si ocurre un error durante la actualización.
     */
    public static function updateNivel(int $id, array $data): Role
    {
        try {
            DB::beginTransaction();

            $nivel = Role::findOrFail($id);

            // Manejo de imagen usando handleFileUpdate
            $imagenPath = self::storeFile($data['imagen'] ?? null, 'niveles');

            $nivel->fill([
                'name' => $data['name'] ?? $nivel->name,
                'descripcion' => $data['descripcion'] ?? $nivel->descripcion,
                'volumen' => $data['volumen'] ?? $nivel->volumen,
                'status' => isset($data['status']) ? (bool)$data['status'] : $nivel->status,
                'imagen' => $imagenPath,
            ]);
            $nivel->save();

            // Asignar permisos
            if (!empty($data['permisos']) && is_array($data['permisos'])) {
                $permisosNombres = Permission::whereIn('id', $data['permisos'])->pluck('name')->toArray();
                $nivel->syncPermissions($permisosNombres);
            }

            DB::commit();
            return $nivel;
        } catch (\Throwable $e) {
            DB::rollBack();
            \Log::error('NS-002 - Actualizar nivel | ' . __METHOD__ . " Archivo: " . $e->getFile() . ' Línea: ' . $e->getLine() . PHP_EOL . '-------> ' . $e->getMessage() . PHP_EOL . $e->getTraceAsString());
            throw new HttpException(500, 'NS-002 - Error al actualizar el nivel');
        }
    }
    /**
     * Registra un nuevo nivel (rol) y su información asociada en el sistema.
     *
     * @param array $data Datos del nivel y sus archivos relacionados.
     * @return Role Rol creado.
     *
     * @throws HttpException Si ocurre un error durante el registro.
     */
    public static function storeNivel(array $data): Role
    {
        try {
            DB::beginTransaction();

            // Manejo de imagen si se proporciona
            $imagenPath = self::handleFileUpdate(null, $data['imagen'] ?? null, 'niveles');

            // Crear el rol (nivel)
            $nivel = Role::create([
                'name' => $data['name'],
                'guard_name' => 'web',
                'descripcion' => $data['descripcion'] ?? null,
                'volumen' => $data['volumen'] ?? null,
                'status' => !empty($data['status']),
                'imagen' => $imagenPath,
            ]);

            // Asignar permisos
            if (!empty($data['permisos']) && is_array($data['permisos'])) {
                $permisosNombres = Permission::whereIn('id', $data['permisos'])->pluck('name')->toArray();
                $nivel->syncPermissions($permisosNombres);
            }

            DB::commit();
            return $nivel;
        } catch (\Throwable $e) {
            DB::rollBack();
            \Log::error('NS-001 - Registrar nivel | ' . __METHOD__ . " Archivo: " . $e->getFile() . ' Línea: ' . $e->getLine() . PHP_EOL . '-------> ' . $e->getMessage() . PHP_EOL . $e->getTraceAsString());
            throw new HttpException(500, 'NS-001 - Error al registrar el nivel');
        }
    }
    /**
     * Maneja la actualización de un archivo: elimina el anterior y guarda el nuevo.
     *
     * @param string|null       $oldPath   Ruta del archivo anterior en el disco (puede ser null si no existe).
     * @param UploadedFile|null $newFile   Nuevo archivo recibido en la solicitud (puede ser null si no se actualiza).
     * @param string            $folder    Carpeta donde se guardará el archivo.
     * @return string|null      Ruta del nuevo archivo o la ruta anterior si no se actualiza.
     */
    private static function handleFileUpdate(?string $oldPath, $newFile, string $folder): ?string
    {
        // Si se recibe un nuevo archivo
        if ($newFile instanceof UploadedFile) {
            // Si existe un archivo previo, eliminarlo del disco
            if ($oldPath && Storage::disk('public')->exists($oldPath)) {
                Storage::disk('public')->delete($oldPath);
            }
            // Guardar nuevo archivo y devolver su ruta
            return $newFile->store($folder, 'public');
        }
        // Si no hay nuevo archivo, conservar la ruta anterior
        return $oldPath;
    }

    /**
     * Almacena un archivo en la carpeta especificada si es válido.
     *
     * @param UploadedFile|null $file   Archivo a almacenar.
     * @param string            $folder Carpeta de destino.
     * @return string|null Ruta del archivo almacenado o null si no se guardó.
     */
    private static function storeFile($file, string $folder): ?string
    {
        return ($file instanceof UploadedFile) ? $file->store($folder, 'public') : null;
    }
}
