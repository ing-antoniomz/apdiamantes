<?php

namespace Database\Factories;

use App\Models\Grupo;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class GrupoFactory extends Factory
{
    protected $model = Grupo::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word(),
            'descripcion' => $this->faker->sentence(),
            'creador_id' => User::factory(), // Relación con usuario creador
            'status' => true, // o false si quieres variedad
        ];
    }
}
