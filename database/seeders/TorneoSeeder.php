<?php

namespace Database\Seeders;

use App\Models\Torneo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TorneoSeeder extends Seeder
{
    public function run(): void
    {
        Torneo::create([
            'nombre' => 'La Liga',
            'inscripcion' => '2000.00',
            'valor_cancha' => '800.00',
        ]);

        Torneo::create([
            'nombre' => 'Premier League',
            'inscripcion' => '2500.00',
            'valor_cancha' => '1000.00',
            'fecha' => fake()->date($format = 'Y-m-d', $max = 'now'),
            'ubicacion' => 'Estadio Municipal, Ciudad Deportiva',
            'cant_equipos' => 16,
            'premios' => 'Trofeos y medallas para los ganadores',
            'reglas_gral' => 'Los partidos tendrán una duración de 90 minutos, divididos en dos tiempos de 45 minutos cada uno.
                            Cada equipo puede realizar hasta 5 sustituciones por partido.
                            Se aplicará la regla del fuera de juego según las normas de la FIFA.
                            El uso de espinilleras es obligatorio para todos los jugadores.',
            'sis_competicion' => 'El torneo se dividirá en fase de grupos y fase eliminatoria.
                            Los dos mejores equipos de cada grupo avanzarán a la fase eliminatoria.
                            En caso de empate en la fase eliminatoria, se procederá a la tanda de penaltis.
                            Se otorgarán 3 puntos por victoria, 1 por empate y 0 por derrota en la fase de grupos.',
            'elegibilidad' => 'Los jugadores deben tener entre 18 y 35 años para la categoría adulta.
                            Para la categoría juvenil, los jugadores deben tener entre 15 y 17 años.
                            Todos los jugadores deben presentar un certificado médico de aptitud física.
                            Se permite un máximo de 2 jugadores profesionales por equipo en la categoría adulta.',
            'disciplina' => 'Se aplicará un sistema de tarjetas amarillas y rojas según las reglas de la FIFA.
                            La acumulación de 3 tarjetas amarillas resultará en 1 partido de suspensión.
                            Una tarjeta roja directa conllevará como mínimo 1 partido de suspensión.
                            Se espera un comportamiento deportivo de todos los participantes, dentro y fuera del campo.',
            'publicado' => 1
        ]);

        Torneo::create([
            'nombre' => 'Serie A',
            'inscripcion' => '1500.00',
            'valor_cancha' => '600.00',
            'fecha' => fake()->date($format = 'Y-m-d', $max = 'now'),
            'ubicacion' => 'Estadio Municipal, Ciudad Deportiva',
            'cant_equipos' => 25,
            'premios' => 'Trofeos y $ 15000.00',
            'reglas_gral' => fake()->paragraph(3),
            'sis_competicion' => fake()->paragraph(3),
            'elegibilidad' => fake()->paragraph(3),
            'disciplina' => fake()->paragraph(3),
            'publicado' => 0
        ]);

        Torneo::create([
            'nombre' => 'Campeonato Uruguayo',
            'inscripcion' => '500.00',
            'valor_cancha' => '100.00',
        ]);
    }
}
