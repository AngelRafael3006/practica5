<?php

namespace Database\Factories;

use App\Models\Reticula;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Materia>
 */
class MateriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {static $indice=-1;


        $per = [


            ['Fundamentos', '1'],
            ['etica', '1'],
            ['Integral', '2'],
            ['POO', '2'],
            ['Quimica', '2'],
            ['vectorial', '3'],
            ['Desarrollo sustentable', '3'],
            ['Sistemas Operativos', '3'],
            ['Ecuaciones diferenciales', '4'],
            ['Metodos numericos', '4'],
            ['Topicos avanzados', '4'],
            ['Simulacion', '5'],
            ['Arquitectura de computadoras', '5'],
            ['Taller de bases de datos', '5'],
            ['Ingenieria de software', '6'],
            ['web', '6'],
            ['Lenguajes de interfaz', '6'],
            ['Cultura empresarial', '7'],
            ['Enrutamiento de redes', '7'],
            ['Administracion de redes', '8'],
            ['investigacion 2', '8'],
            ['programables', '8'],
            ['artificial', '9'],
            ['Apps moviles', '9'],
            ['Residencia', '9']
        ];

        $indice = ($indice + 1) % count($per);

        $reticulaISC = Reticula::where('descripcion', 'ISC')->first();
        return [
            'nombremateria' => $per[$indice][0],
            'nombremediano'=>fake()->lexify(str_repeat("?",11)),
            'nombrecorto' => fake()->lexify(str_repeat("?",4)),
            'nivel' => 'L',
            'modalidad' => 'P',
            'semestre' => $per[$indice][1],
            'reticula_id' => $reticulaISC->id
        ];
    }
}
