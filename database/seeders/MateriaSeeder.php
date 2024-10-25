<?php

namespace Database\Seeders;

use App\Models\Carrera;
use App\Models\Materia;
use App\Models\Reticula;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
        public function run(): void
    {
        Materia::factory(3)
                ->has(Reticula::factory(2)
                    ->has(Carrera::factory(2))
        )->create();
    }
    }
