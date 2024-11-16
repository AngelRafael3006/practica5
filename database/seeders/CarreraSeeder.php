<?php

namespace Database\Seeders;

use App\Models\Carrera;
use App\Models\Reticula;
use App\Models\Materia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Carrera::factory(7)

            ->create();
    }
}
