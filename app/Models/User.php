<?php

namespace App\Models;

use App\Notifications\VerifyEmail;
use Spatie\Permission\Traits\HasRoles;
use App\Core\Traits\SpatieLogsActivity;
use Illuminate\Support\Facades\Storage;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Notifications\Notifiable;
use App\Notifications\CustomResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;
    use SpatieLogsActivity;
    use HasRoles;

    protected static $logName = 'usuarios'; // log_name en la tabla de logs

    public function tapActivity(Activity $activity, string $eventName)
    {
        $activity->log_name = 'usuarios';

        switch ($eventName) {
            case 'created':
                $activity->description = "Se creó el usuario: {$this->user}";
                break;
            case 'updated':
                $activity->description = "Se actualizó el usuario: {$this->user}";
                break;
            case 'deleted':
                $activity->description = "Se eliminó el usuario: {$this->user}";
                break;
        }
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user',
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'status',
        'cuenta_ap',
        'email',
        'api_token',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    /**
     * Get a fullname combination of nombre and apellido_paterno and apellido_materno
     *
     * @return string
     */
    public function getNameAttribute()
    {
        return "{$this->nombre} {$this->apellido_paterno} {$this->apellido_materno}";
    }

    /**
     * Prepare proper error handling for url attribute
     *
     * @return string
     */
    public function getAvatarUrlAttribute()
    {

        if ($this->info) {
            return  asset(Storage::url($this->info->avatar));
        }

        return null;
    }
    /**
     * Prepare proper error handling for role url attribute
     *
     * @return string
     */
    public function getRolUrlAttribute()
    {

         $role = $this->roles()->first(); // Trae el primer rol del usuario

        if ($role && $role->imagen) {
            return asset(Storage::url($role->imagen));
        }

        return null;
    }

    /**
     * Prepare proper error handling for role url attribute
     *
     * @return string
     */
    public function getGrupoUrlAttribute()
    {

         $grupo = $this->grupos()->first(); // Trae el primer rol del usuario

        if ($grupo && $grupo->imagen) {
            return asset(Storage::url($grupo->imagen));
        }

        return null;
    }

    public function getFullUserInfo()
    {
        $info = $this->info;

        $grupoNombre = '';
        $rolNombre = '';

        if ($this->grupos && $this->grupos->isNotEmpty()) {
            // Tomar el primer grupo (puedes adaptar si necesitas múltiples)
            $grupo = $this->grupos->first();
            $grupoNombre = $grupo->name ?? '';
            $rolNombre = $grupo->pivot->rol ?? '';
        }
         // Rol de Spatie (solo el primero)
        $rolSpatie = $this->getRoleNames()->first() ?? '';

        return [
                'nombre' => $this->nombre ?? '',
                'apellido_paterno' => $this->apellido_paterno ?? '',
                'apellido_materno' => $this->apellido_materno ?? '',
                'radioPersona' => $info->tipo_persona ?? '',
                'estatus' => $this->status ?? '',
                'rfc' => $info->rfc ?? '',
                'avatar' => url($this->getAvatarUrlAttribute()) ?? '',
                'company' => $info->company ?? '',
                'persona_autorizada' => $info->persona_autorizada ?? '',
                'cuenta_apdiamantes' => $this->cuenta_ap ?? '',
                'user' => $this->user ?? '',
                'correo' => $this->email ?? '',
                'telefono' => $info->phone ?? '',
                'beneficiario1' => $info->beneficiario1 ?? '',
                'beneficiario2' => $info->beneficiario2 ?? '',
                'cosolicitante' => $info->cosolicitante ?? '',
                'cosolicitante_rfc' => $info->cosolicitante_rfc ?? '',
                'banco' => $info->banco ?? '',
                'cuenta' => $info->cuenta ?? '',
                'sucursal' => $info->sucursal ?? '',
                'titular_cuenta' => $info->titular_cuenta ?? '',
                'direccion_fiscal_calle' => $info->calle_fiscal ?? '',
                'direccion_fiscal_numero' => $info->numero_fiscal ?? '',
                'direccion_fiscal_colonia' => $info->colonia_fiscal ?? '',
                'direccion_fiscal_ciudad' => $info->ciudad_fiscal ?? '',
                'direccion_fiscal_estado' => $info->estado_fiscal ?? '',
                'direccion_fiscal_codigo_postal' => $info->cp_fiscal ?? '',
                'direccion_fiscal_telefono_fiscal' => $info->telefono_fiscal ?? '',
                'direccion_envio_calle' => $info->calle_envios ?? '',
                'direccion_envio_numero' => $info->numero_envios ?? '',
                'direccion_envio_colonia' => $info->colonia_envios ?? '',
                'direccion_envio_ciudad' => $info->ciudad_envios ?? '',
                'direccion_envio_estado' => $info->estado_envios ?? '',
                'direccion_envio_codigo_postal' => $info->cp_envios ?? '',
                'direccion_envio_telefono_fiscal' => $info->telefono_envios ?? '',
                'nivel' => $rolSpatie, // Completar si tienes esta relación o lógica
                'parentescoBeneficiario1' => $info->beneficiario1_parentesco ?? '',
                'parentescoBeneficiario2' => $info->beneficiario2_parentesco ?? '',
                'posicion' => $rolNombre, // rol desde tabla pivote
                'grupo' => $grupoNombre,  // nombre del grupo
                'inscripcion' => $info->inscripcion ?? '',
                'ine' => $info->credencial_elector ?? '',
                'comprobante_domicilio' => $info->comprobante_domicilio ?? '',
        ];
    }
    /**
     * Send a password reset notification to the user.
     *
     * @param  string  $token
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CustomResetPassword($token));
    }

    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmail);
    }

    /**
     * Determine if the user has verified their email address.
     *
     * @return bool
     */
    public function hasVerifiedEmail()
    {
        return !is_null($this->email_verified_at) && $this->status === true;
    }

    /**
     * Mark the given user's email as verified.
     *
     * @return bool
     */
    public function markEmailAsVerified()
    {
        return $this->forceFill([
            'email_verified_at' => $this->freshTimestamp(),
            'status'=> true
        ])->save();
    }

    /**
     * User relation to info model
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function info()
    {
        return $this->hasOne(UserInfo::class);
    }

    /**
     * Grupo del usuario
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function grupos()
    {
        return $this->belongsToMany(Grupo::class, 'grupo_usuario', 'user_id', 'grupo_id')
            ->withPivot('rol', 'fecha_ingreso');
    }

    /**
     * Grupos creados por el usuario
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function gruposCreados()
    {
        return $this->hasMany(Grupo::class, 'creador_id');
    }
}
