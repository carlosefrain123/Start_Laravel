<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'make' => $this->faker->name(),
            'model' => $this->faker->name(),
            'year' => $this->faker->year(),
            'color' => $this->faker->hexColor(), // Cambiado de 'safeColor' a 'hexColor'
        ];
    }
}
