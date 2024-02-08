<?php

namespace Database\Seeders;

use App\Models\post;
use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0;$i<10;$i++){
            $faker = Faker::create();
            $usuario = new Usuario();
            $usuario->login = $faker->firstName;
            $usuario->password = $faker->word;
            $usuario->save();
        }
    }
}
