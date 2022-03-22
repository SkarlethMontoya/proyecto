<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Docente>
 */
class DocenteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->Name,
            'apellido' => $this->faker->Name,
            'direccion' => $this->faker->Name,
            'telefono' => $this->faker->numerify('########'),
            'materia' => $this->faker->Name,
        ];
    }
}
