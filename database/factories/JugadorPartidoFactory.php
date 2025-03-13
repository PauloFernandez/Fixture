<?php

namespace Database\Factories;

use App\Models\Jugador;
use App\Models\Partido;
use App\Models\Tarjeta;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JugadorPartido>
 */
class JugadorPartidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'goles' => fake()->numberBetween(0, 5),
            'asistencias' => fake()->numberBetween(0, 5),
            'estado' => fake()->randomElement(['Pendiente', 'Pagado']),
            'partido_id' => Partido::inRandomOrder()->first()->id,
            'jugador_id' => Jugador::inRandomOrder()->first()->id,
            'tarjeta_id' => Tarjeta::inRandomOrder()->first()->id,
        ];
    }
}
