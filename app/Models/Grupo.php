<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Grupo extends Model
{
    protected $table = 'grupos';

    protected $fillable = [
        'name',
        'descripcion',
        'creador_id',
        'status'
    ];

    // Relación con el creador del grupo (usuario)
    public function creador(): BelongsTo
    {
        return $this->belongsTo(User::class, 'creador_id');
    }

    // Relación muchos a muchos con usuarios
    public function usuarios(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'grupo_usuario')
            ->withPivot('rol', 'fecha_ingreso');
    }
}
