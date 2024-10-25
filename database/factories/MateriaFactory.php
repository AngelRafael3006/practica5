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
    {
        $titulo = substr(fake()->jobTitle(), 0, 200);
        return [
            'idmateria'=>fake()->bothify("?????#####"),
            'nombremateria'=>$titulo,
            'nivel' => 'L',
            'nombremediano'=>fake()->lexify(str_repeat("?",25)),
            'nombrecorto'=>substr($titulo,0,5),
            'modalidad' => 'P',
            "reticula_id"=>Reticula::factory()
        ];
    }
}
