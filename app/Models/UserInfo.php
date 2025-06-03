<?php

namespace App\Models;

use App\Core\Traits\SpatieLogsActivity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\Activitylog\Models\Activity;

class UserInfo extends Model
{
    use SpatieLogsActivity;

    protected static $logName = 'usuarios_info'; // log_name en la tabla de logs

    public function tapActivity(Activity $activity, string $eventName)
    {
        $activity->log_name = 'usuarios_info';

        switch ($eventName) {
            case 'created':
                $activity->description = "Nueva información: {$this->user->user}";
                break;
            case 'updated':
                $activity->description = "Se actualizó información: {$this->user->user}";
                break;
            case 'deleted':
                $activity->description = "Se eliminó información: {$this->user->user}";
                break;
        }
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'phone',
        'rfc',
        'company',
        'persona_autorizada',
        'beneficiario1',
        'beneficiario2',
        'beneficiario1_parentesco',
        'beneficiario2_parentesco',
        'tipo_persona',
        'cosolicitante',
        'cosolicitante_rfc',
        'banco',
        'cuenta',
        'sucursal',
        'titular_cuenta',
        'calle_fiscal',
        'numero_fiscal',
        'colonia_fiscal',
        'ciudad_fiscal',
        'estado_fiscal',
        'cp_fiscal',
        'telefono_fiscal',
        'calle_envios',
        'numero_envios',
        'colonia_envios',
        'ciudad_envios',
        'estado_envios',
        'cp_envios',
        'telefono_envios',
        'avatar',
        'inscripcion',
        'credencial_elector',
        'comprobante_domicilio',
    ];

    /**
     * Prepare proper error handling for url attribute
     *
     * @return string
     */
    public function getAvatarUrlAttribute()
    {
        // if file avatar exist in storage folder
        $avatar = public_path(Storage::url($this->avatar));
        if (is_file($avatar) && file_exists($avatar)) {
            // get avatar url from storage
            return Storage::url($this->avatar);
        }

        // check if the avatar is an external url, eg. image from google
        if (filter_var($this->avatar, FILTER_VALIDATE_URL)) {
            return $this->avatar;
        }

        // no avatar, return blank avatar
        return asset(theme()->getMediaUrlPath().'avatars/blank.png');
    }

    /**
     * User info relation to user model
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Unserialize values by default
     *
     * @param $value
     *
     * @return mixed|null
     */
    public function getCommunicationAttribute($value)
    {
        // test to un-serialize value and return as array
        $data = @unserialize($value);
        if ($data !== false) {
            return $data;
        } else {
            return null;
        }
    }
}
