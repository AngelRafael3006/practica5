<?php

namespace Database\Seeders;

use App\Models\Personal;
use App\Models\PersonalPlaza;
use App\Models\Puesto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PuestoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Puesto::factory(10)
    ->has(
        Personal::factory(1)
            ->has(
                PersonalPlaza::factory(1)
            )
    )
    ->create();
    }
}
