<?php

namespace Database\Seeders;

use App\Models\Depto;
use App\Models\Carrera;
use App\Models\Alumno;
use App\Models\Reticula;
use App\Models\Materia; // Asegúrate de importar el modelo Materia
use Illuminate\Database\Seeder;

class DeptoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Depto::factory(70)
            ->has(Carrera::factory(1)
                ->has(Reticula::factory(1)
                    ->has(Materia::factory(1))
                )
                ->has(Alumno::factory(1))
            )
            ->create();
    }
}
