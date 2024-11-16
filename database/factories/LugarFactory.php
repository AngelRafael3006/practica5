<?php

namespace Database\Factories;

use App\Models\Edificio;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lugar>
 */
class LugarFactory extends Factory
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

        ['Valerdi'],

        ['D'],

        ['E'],

        ['MECANICA'],

        ['IDIOMAS']

        ];

        $indice = ($indice + 1) % count($per);
        return [
            'nombrelugar'=>$per[$indice][0],
            'nombrecorto' => substr($per[$indice][0], 0, 5),
            "edificio_id"=>Edificio::factory()
        ];
    }
}
