<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Puesto>
 */
class PuestoFactory extends Factory
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
            ['Docentes', 'Antonio Soto'],
            ['Direccion', 'Gustavo Emilio Rojo Velasquez'],
            ['Direccion', 'Dennise Arisbeth'],
            ['Direccion', 'Maria del Carmen'],
            ['Auxiliar', 'Olague'],
            ['Auxiliar', 'Pepe Perez'],
            ['Auxiliar', 'Paco Antonio'],
            ['Administrativo', 'Lupita Najera'],
            ['Administrativo', 'Rafael Ortiz'],
            ['Administrativo', 'Lourdes Arlin'],
        ];


         $indice = ($indice + 1) % count($per);

        return [
            'idpuesto'=>fake()->bothify("???####"),
            'nombre'=>$per[$indice][1],
            'tipo'=>$per[$indice][0],
        ];
    }
}
