<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Edificio>
 */
class EdificioFactory extends Factory
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

        ['K'],

        ['SISTEMAS'],

        ['INSDUSTRIAL'],

        ['MECANICA'],

        ['IDIOMAS']

        ];

        $indice = ($indice + 1) % count($per);
        return [
            'nombreedificio'=>$per[$indice][0],
            'nombrecorto' => substr($per[$indice][0], 0, 5),
        ];
    }
}
