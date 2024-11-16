<?php

namespace Database\Factories;

use App\Models\Depto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Carrera>
 */
class CarreraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
        {

            static $indice=-1;



            $per = [

            ['Contador Publico'],

            ['Mecatronica'],

            ['Ing Gestion Empresarial'],

            ['Electronica'],

            ['automotriz'],

            ['Industrial'],

            ['Sistemas Computacionales'],

            ];

            $indice = ($indice + 1) % count($per);
        return [
        'idcarrera' => fake()->bothify("????####"),
        'nombrecarrera' => $per[$indice][0],
        'nombremediano' => fake()->lexify(str_repeat("?", 8)),
        'nombrecorto' => fake()->lexify(substr($per[$indice][0], 0, 4)),
        'depto_id' => Depto::factory()
        ];
    }
}
