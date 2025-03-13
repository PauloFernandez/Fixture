<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArbitroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->firstName(),
            'apellido' => fake()->lastName(),
            'fecha_nac' => fake()->dateTimeInInterval('-40 years', '+20 years'),
            'direccion' => fake()->address(),
            'telefono' => fake()->numberBetween(11111111, 999999999),
            'email' => fake()->unique()->safeEmail(),
        ];
    }
}
