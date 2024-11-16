<?php

namespace Database\Factories;
use App\Models\Depto;
use App\Models\Puesto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Personal>
 */
class PersonalFactory extends Factory
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

        ['Antonio ','Chavez','soto'],

        ['Lourdes ','Arlin', 'Medrano'],

        ['Emilio ','Velazquez','Rojo'],

        ['Guadalupe','Najera','Lozano'],

        ['Arturo ','Velez','Riojas'],

        ['Wilber','Garcia','Villareal'],

        ['Rogelio ','Rodriguez','Cervantes'],

        ['Claudia ','Lozano','Longoria'],

        ['Rogelio ','Rodriguez','Cervantes'],

        ['Aquiles ','Gonzalez','Ramos'],

        ];

        $indice = ($indice + 1) % count($per);
        return [
            'RFC' => fake()->regexify('[A-Z]{4}[0-9]{6}[A-Z0-9]{3}'),
            'nombres'=>$per[$indice][0],
            'apellidop'=>$per[$indice][2],
            'apellidom'=>$per[$indice][1],
            'licenciatura' => fake()->randomElement(['si','no']),
            'lictit'=> fake()->randomElement(['1','2']),
            'especializacion' => fake()->randomElement(['si','no']),
            'esptit'=> fake()->randomElement(['1','2']),
            'maestria' => fake()->randomElement(['si','no']),
            'maetit'=> fake()->randomElement(['1','2']),
            'doctorado' => fake()->randomElement(['si','no']),
            'doctit'=> fake()->randomElement(['1','2']),
            'fechaingsep' => fake()->date('Y-m-d', 'now'),
            'fechaingins' => fake()->date('Y-m-d', 'now'),
            "depto_id"=>Depto::factory(),
            "puesto_id"=>Puesto::factory()
        ];
    }
}
