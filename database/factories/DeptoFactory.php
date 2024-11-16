<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Validation\Rules\Unique;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Depto>
 */
class DeptoFactory extends Factory
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

        ['Subdireccion'],

        ['ISC'],

        ['IE'],

        ['IM'],

        ['IME'],

        ['CP'],

        ['IGE'],

        ['II'],

        ['Ciencias Basicas']

        ];

        $indice = ($indice + 1) % count($per);

    return [
        'iddepto' => fake()->bothify("?#"),
        'nombredepto' => $per[$indice][0],
        'nombremediano' => fake()->lexify(str_repeat("?", 15)),
        'nombrecorto' => fake()->unique()->text(5),
    ];
}

}
