<?php

namespace Database\Factories;

use App\Models\Torneo;
use App\Models\Equipo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Equipo>
 */
class EquipoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fullPath = public_path('storage/images/'); // Directorio donde se guardarán las imágenes
        
        $torneos = Torneo::all(); // Obtenemos todos los torneos disponibles

        $torneo = $torneos->random(); // Seleccionamos un torneo aleatorio

        return [
            'file_uri' => fake()->image($fullPath, 200, 150, null, null),
            'nombre' => fake()->name(),
            'estado' => 'Pendiente',
            'torneo_id' => $torneo->id, // Asignamos un torneo aleatorio
        ];
    }
}
