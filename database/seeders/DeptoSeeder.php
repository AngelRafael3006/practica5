<?php

namespace Database\Seeders;

use App\Models\Depto;
use App\Models\Carrera;
use App\Models\Alumno;
use App\Models\Reticula;
use App\Models\Materia;
use App\Models\Personal;
use App\Models\personalPlaza;
use Illuminate\Database\Seeder;

class DeptoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Depto::factory(7) // Crea 7 departamentos
    ->has(Carrera::factory(1)
        ->has(Alumno::factory(1)) // Crea 1 alumno por cada carrera
        ->has(Reticula::factory(1)
            ->has(Materia::factory(2)) // Crea 2 materias por cada retícula
        )
    )
    ->has(Personal::factory(2) // Crea 2 personas por cada departamento
        ->has(PersonalPlaza::factory(3)) // Crea 3 plazas para cada personal
    )
    ->create();
    }



}

