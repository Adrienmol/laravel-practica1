<?php

namespace Database\Seeders;

use App\Models\Corto;
use App\Models\Director;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CortoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {       
        // Instanciar direcotores y usuarios
        $directores = Director::get();
        $usuarios = User::get();

        // Generar por directores
        $directores->each(
            function ($director) use ($usuarios) {
                Corto::factory()->count(2)->create(
                    [
                        'user_id'=> $usuarios->random()->id,
                        'director_id' => $director->id
                    ]

                );
            }
        );
    }
}
