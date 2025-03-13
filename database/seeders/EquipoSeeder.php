<?php

namespace Database\Seeders;

use App\Models\Equipo;
use Illuminate\Database\Seeder;

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//Equipos de "La Liga"
        Equipo::create([
            'file_uri' => 'Barcelona.png',
            'nombre' => 'FC Barcelona',
            'estado' => 'Pendiente',
            'torneo_id' => 1
        ]);

        Equipo::create([
            'file_uri' => 'Real_Madrid.png',
            'nombre' => 'Real Madrid CF',
            'estado' => 'Pendiente',
            'torneo_id' => 1
        ]);

        Equipo::create([
            'file_uri' => 'Atletico_de_Madrid.png',
            'nombre' => 'Atlético de Madrid',
            'estado' => 'Pendiente',
            'torneo_id' => 1
        ]);

        Equipo::create([
            'file_uri' => 'Sevilla.png',
            'nombre' => 'Sevilla FC',
            'estado' => 'Pendiente',
            'torneo_id' => 1
        ]);

        Equipo::create([
            'file_uri' => 'Real_Sociedad.png',
            'nombre' => 'Real Sociedad',
            'estado' => 'Pendiente',
            'torneo_id' => 1
        ]);

        Equipo::create([
            'file_uri' => 'Betis.png',
            'nombre' => 'Real Betis Balompié',
            'estado' => 'Pendiente',
            'torneo_id' => 1
        ]);

        Equipo::create([
            'file_uri' => 'Valencia.png',
            'nombre' => 'Valencia CF',
            'estado' => 'Pendiente',
            'torneo_id' => 1
        ]);

        Equipo::create([
            'file_uri' => 'Athletic_Bilbao.png',
            'nombre' => 'Athletic Club de Bilbao',
            'estado' => 'Pendiente',
            'torneo_id' => 1
        ]);


        Equipo::create([
            'file_uri' => 'Villarreal.png',
            'nombre' => 'Villarreal CF',
            'estado' => 'Pendiente',
            'torneo_id' => 1
        ]);

        Equipo::create([
            'file_uri' => 'Celta.png',
            'nombre' => 'RC Celta de Vigo',
            'estado' => 'Pendiente',
            'torneo_id' => 1
        ]);

//Equipos de "Premier League"
        Equipo::create([
            'file_uri' => 'Arsenal.png',
            'nombre' => 'Arsenal',
            'estado' => 'Pendiente',
            'torneo_id' => 2
        ]);

        Equipo::create([
            'file_uri' => 'Liverpool.png',
            'nombre' => 'Liverpool',
            'estado' => 'Pendiente',
            'torneo_id' => 2
        ]);

        Equipo::create([
            'file_uri' => 'Manchester_city.png',
            'nombre' => 'Manchester City',
            'estado' => 'Pendiente',
            'torneo_id' => 2
        ]);

        Equipo::create([
            'file_uri' => 'Manchester_united.png',
            'nombre' => 'Manchester United',
            'estado' => 'Pendiente',
            'torneo_id' => 2
        ]);

        Equipo::create([
            'file_uri' => 'Aston_villa.png',
            'nombre' => 'Aston Villa',
            'estado' => 'Pendiente',
            'torneo_id' => 2
        ]);

        Equipo::create([
            'file_uri' => 'Tottenham.png',
            'nombre' => 'Tottenham Hotspur',
            'estado' => 'Pendiente',
            'torneo_id' => 2
        ]);

        Equipo::create([
            'file_uri' => 'Newcastle.png',
            'nombre' => 'Newcastle United',
            'estado' => 'Pendiente',
            'torneo_id' => 2
        ]);

        Equipo::create([
            'file_uri' => 'Chelsea.png',
            'nombre' => 'Chelsea',
            'estado' => 'Pendiente',
            'torneo_id' => 2
        ]);

        Equipo::create([
            'file_uri' => 'Crystal_palace.png',
            'nombre' => 'Crystal Palace',
            'estado' => 'Pendiente',
            'torneo_id' => 2
        ]);

        Equipo::create([
            'file_uri' => 'Brentford.png',
            'nombre' => 'Brentford',
            'estado' => 'Pendiente',
            'torneo_id' => 2
        ]);

//Equipos de "Serie A"
        Equipo::create([
            'file_uri' => 'Juventus.png',
            'nombre' => 'Juventus',
            'estado' => 'Pendiente',
            'torneo_id' => 3
        ]);

        Equipo::create([
            'file_uri' => 'Inter_milan.png',
            'nombre' => 'Inter de Milan',
            'estado' => 'Pendiente',
            'torneo_id' => 3
        ]);

        Equipo::create([
            'file_uri' => 'AC_milan.png',
            'nombre' => 'AC Milan',
            'estado' => 'Pendiente',
            'torneo_id' => 3
        ]);

        Equipo::create([
            'file_uri' => 'Napoli.png',
            'nombre' => 'Napoli',
            'estado' => 'Pendiente',
            'torneo_id' => 3
        ]);

        Equipo::create([
            'file_uri' => 'AS_Roma.png',
            'nombre' => 'AS Roma',
            'estado' => 'Pendiente',
            'torneo_id' => 3
        ]);

        Equipo::create([
            'file_uri' => 'Lazio.png',
            'nombre' => 'Lazio',
            'estado' => 'Pendiente',
            'torneo_id' => 3
        ]);

        Equipo::create([
            'file_uri' => 'Atalanta.png',
            'nombre' => 'Atalanta',
            'estado' => 'Pendiente',
            'torneo_id' => 3
        ]);

        Equipo::create([
            'file_uri' => 'Fiorentina.png',
            'nombre' => 'Fiorentina',
            'estado' => 'Pendiente',
            'torneo_id' => 3
        ]);

        Equipo::create([
            'file_uri' => 'Udinese.png',
            'nombre' => 'Udinese',
            'estado' => 'Pendiente',
            'torneo_id' => 3
        ]);

        Equipo::create([
            'file_uri' => 'Torino.png',
            'nombre' => 'Torino',
            'estado' => 'Pendiente',
            'torneo_id' => 3
        ]);

//Equipos de "Campeonato Uruguayo"
        Equipo::create([
            'file_uri' => 'Penarol.png',
            'nombre' => 'Peñarol',
            'estado' => 'Pendiente',
            'torneo_id' => 4
        ]);

      Equipo::create([
            'file_uri' => 'Nacional.png',
            'nombre' => 'Nacional',
            'estado' => 'Pendiente',
            'torneo_id' => 4
      ]);
      
      
      Equipo::create([
        'file_uri' => 'Cerro.png',
        'nombre' => 'Cerro',
        'estado' => 'Pendiente',
        'torneo_id' => 4
      ]);

      Equipo::create([
            'file_uri' => 'Boston_river.png',
            'nombre' => 'Boston River',
            'estado' => 'Pendiente',
            'torneo_id' => 4
      ]);
      
      Equipo::create([
            'file_uri' => 'Progreso.png',
            'nombre' => 'Progreso',
            'estado' => 'Pendiente',
            'torneo_id' => 4
      ]);
      
      Equipo::create([
            'file_uri' => 'Danubio.png',
            'nombre' => 'Danubio',
            'estado' => 'Pendiente',
            'torneo_id' => 4
      ]);
      
      Equipo::create([
            'file_uri' => 'Defensor.png',
            'nombre' => 'Defensor Sporting',
            'estado' => 'Pendiente',
            'torneo_id' => 4
      ]);
      
      Equipo::create([
            'file_uri' => 'River_plate.png',
            'nombre' => 'River Plate',
            'estado' => 'Pendiente',
            'torneo_id' => 4
      ]);
      
      Equipo::create([
            'file_uri' => 'Montevideo_Torque.png',
            'nombre' => 'Montevideo City Torque',
            'estado' => 'Pendiente',
            'torneo_id' => 4
      ]);
      
      Equipo::create([
            'file_uri' => 'Wanderers.png',
            'nombre' => 'Wanderers',
            'estado' => 'Pendiente',
            'torneo_id' => 4
      ]);
      
    }
}
