<?php

namespace Database\Seeders;

use App\Models\post;
use App\Models\Usuario;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = Usuario::get();
        foreach ($users as $user){
            for ($i=0;$i<3;$i++){
                $faker = Faker::create();
                $post = new post();
                $post->titulo = $faker->text;
                $post->contenido = $faker->text;
                $post->usuario_id = $user->id;
                $post->save();
            }
        }
    }
}
