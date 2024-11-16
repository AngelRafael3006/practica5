<?php

namespace Database\Factories;
use App\Models\Plaza;
use App\Models\Personal;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PersonalPlaza>
 */
class PersonalPlazaFactory extends Factory
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

        ['1'],

        ['2'],

        ['3'],

        ['4'],

        ['5'],

        ['6'],

        ['7'],

        ];

        $indice = ($indice + 1) % count($per);

        return [
            'tiponombramiento'=>$per[$indice][0],
            "plaza_id"=>Plaza::factory(),
            "personal_id"=>Personal::factory()
        ];
    }
}
