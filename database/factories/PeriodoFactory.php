<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Periodo>
 */
class PeriodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idperiodo'=>fake()->bothify("??###"),
            'periodo'=>fake()->randomElement(['Agosto-Diciembre','Enero-junio']),
            'desccorta'=>fake()->text($maxNbChars = 10),
            'fechaini'=>fake()->date(),
            'fechafin'=>fake()->date(),
        ];
    }
}
