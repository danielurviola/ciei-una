<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tipo_proyecto>
 */
class Tipo_proyectoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tipo_proyecto'=> $this->faker->randomElement(['tesis postgrado', 'tesis pregrado', 'artículo', 'concurso'])
        ];
    }
}
