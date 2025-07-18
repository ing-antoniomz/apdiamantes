<?php

namespace App\Models;

use App\Notifications\VerifyEmail;
use Spatie\Permission\Traits\HasRoles;
use App\Core\Traits\SpatieLogsActivity;
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
            return asset($this->info->avatar);
        }

        return asset(theme()->getMediaUrlPath().'avatars/blank.png');
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
