<?php

namespace Database\Factories;

use App\Models\Carrera;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reticula>
 */
class ReticulaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idreticula'=>fake()->bothify("????????#######"),
            'descripcion'=>fake()->text($maxNbChars = 200),
            'fechaenvigor'=>fake()->date($format = 'Y-m-d', $max = 'now'),
            "carrera_id"=>Carrera::factory()
        ];
    }
}
