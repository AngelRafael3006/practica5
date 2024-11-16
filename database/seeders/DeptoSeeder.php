<?php

namespace Database\Seeders;

use App\Models\Depto;
use App\Models\Carrera;
use App\Models\Alumno;
use App\Models\Reticula;
use App\Models\Materia;
use App\Models\Personal;
use App\Models\PersonalPlaza;
use Illuminate\Database\Seeder;

class DeptoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Depto::factory(7)
    ->has(Carrera::factory(1)
        ->has(Alumno::factory(1))
        ->has(Reticula::factory(1)
            ->has(Materia::factory(2))
        )
    )
    ->has(Personal::factory(2)
        ->has(PersonalPlaza::factory(3)) 
    )
    ->create();
    }



}

