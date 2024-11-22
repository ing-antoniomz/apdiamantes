<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserInfo;
use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {
        $nombre = $faker->firstName;
        $apellido_paterno = $faker->lastName;
        $apellido_materno = $faker->lastName;
        $user = strtolower(substr($nombre, 0, 1) . substr($apellido_paterno, 0, 5));
        $demoUser = User::create([
            'user'        => $user,
            'nombre'        => $nombre,
            'apellido_paterno'         => $apellido_paterno,
            'apellido_materno'         => $apellido_materno,
            'email'             => 'demo@demo.com',
            'password'          => Hash::make('demo'),
            'email_verified_at' => now(),
            'api_token'         => Hash::make('demo@demo'),
        ]);

        $this->addDummyInfo($faker, $demoUser);

        $nombre = $faker->firstName;
        $apellido_paterno = $faker->lastName;
        $apellido_materno = $faker->lastName;
        $user = strtolower(substr($nombre, 0, 1) . substr($apellido_paterno, 0, 5));
        $demoUser2 = User::create([
            'user'        => $user,
            'nombre'        => $nombre,
            'apellido_paterno'         => $apellido_paterno,
            'apellido_materno'         => $apellido_materno,
            'email'             => 'admin@demo.com',
            'password'          => Hash::make('demo'),
            'email_verified_at' => now(),
            'api_token'         => Hash::make('admin@demo'),
        ]);

        $this->addDummyInfo($faker, $demoUser2);

        /* User::factory(2)->create()->each(function (User $user) use ($faker) {
            $this->addDummyInfo($faker, $user);
        }); */
    }

    private function addDummyInfo(Generator $faker, User $user)
    {
        $dummyInfo = [
            'company'  => $faker->company,
            'phone'    => $faker->phoneNumber,
            'website'  => $faker->url,
            'language' => $faker->languageCode,
            'country'  => $faker->countryCode,
        ];

        $info = new UserInfo();
        foreach ($dummyInfo as $key => $value) {
            $info->$key = $value;
        }
        $info->user()->associate($user);
        $info->save();
    }
}
