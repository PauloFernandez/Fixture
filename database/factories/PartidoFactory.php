<?php

namespace Database\Factories;

use App\Models\Arbitro;
use App\Models\Cancha;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PartidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fecha' => fake()->date($format = 'Y-m-d', $min = 'now'),
            'hora' => fake()->time($format = 'H:i:s', $min = 'now'),
            'importe' => '450',
            'estado' => 'Pendiente',
            'arbitro_id' => Arbitro::inRandomOrder()->first()->id,
            'cancha_id' => Cancha::inRandomOrder()->first()->id,
        ];
    }
}
