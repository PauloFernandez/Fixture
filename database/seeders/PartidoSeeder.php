<?php

namespace Database\Seeders;

use App\Models\Equipo;
use App\Models\Jugador;
use App\Models\Partido;
use App\Models\Torneo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Partido::factory()->count(18)->create()->each(function ($partido) {
            // Obtener un torneo aleatorio
            $torneo = Torneo::inRandomOrder()->first();

            // Obtener dos equipos aleatorios del mismo torneo asegurándose de que haya al menos 2 equipos distintos
            $equipos = $torneo->equipos()->inRandomOrder()
                                         ->limit(2)
                                         ->distinct()
                                         ->get();

            if ($equipos->count() >= 2) {
                // Crear el partido y asignar los equipos al partido
                foreach ($equipos as $equipo) {
                    DB::table('equipo_partido')->insert([
                        'resultado' => fake()->randomElement(['P', 'G', 'E']),
                        'golesF' => fake()->numberBetween(0, 5),
                        'golesE' => fake()->numberBetween(0, 5),
                        'partido_id' => $partido->id,
                        'equipo_id' => $equipo->id,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
                }
            }
        });
    }
}
