<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nombre = $this->faker->firstName;
        $apellido_paterno = $this->faker->lastName;
        $apellido_materno = $this->faker->lastName;
        $user = strtolower(substr($nombre, 0, 1) . substr($apellido_paterno, 0, 5));
        return [
            'user'        => $user,
            'nombre'        => $nombre,
            'apellido_paterno'         => $apellido_paterno,
            'apellido_materno'         => $apellido_materno,
            'status'         => true,
            'email'             => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password'          => Hash::make('password'), // password
            'remember_token'    => Str::random(10),
        ];
    }
}
