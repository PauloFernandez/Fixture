<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use App\Models\Equipo;
use App\Models\Noticia;
use App\Models\Partido;
use App\Models\Torneo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class GuestController extends Controller
{
    public function clasificaciones(): View
    {
        $torneos = Torneo::all();

        // Obtener los datos necesarios, agregando el cálculo de saldo de goles y puntos.
        $datos = Equipo::with(['partidos'])
            ->select('equipos.*')
            ->join('torneos', 'equipos.torneo_id', '=', 'torneos.id') //hacemos un join entre torneo y equipo
            ->leftJoin('equipo_partido', 'equipos.id', '=', 'equipo_partido.equipo_id')
            ->selectRaw('
                COUNT(DISTINCT equipo_partido.partido_id) as pj,
                SUM(CASE WHEN equipo_partido.resultado = "G" THEN 1 ELSE 0 END) as pg,
                SUM(CASE WHEN equipo_partido.resultado = "E" THEN 1 ELSE 0 END) as pe,
                SUM(CASE WHEN equipo_partido.resultado = "P" THEN 1 ELSE 0 END) as pp,
                SUM(equipo_partido.golesF) as gf,
                SUM(equipo_partido.golesE) as ge,
                (SUM(equipo_partido.golesF) - SUM(equipo_partido.golesE)) as sg,
                (SUM(CASE WHEN equipo_partido.resultado = "G" THEN 3 ELSE 0 END) + 
                 SUM(CASE WHEN equipo_partido.resultado = "E" THEN 1 ELSE 0 END)) as pto
            ')
            ->groupBy('equipos.id')
            ->orderBy('pto', 'desc')
            // Filtrar equipos por torneo
            ->when(request('search'), function ($query) {
                return $query->where('torneos.id', request('search')); // Filtramos por el id del torneo
            })
            ->get();

        return view('guests.clasificaciones', compact('datos', 'torneos'));
    }

    public function partidos(): View
    {
        $torneos = Torneo::all();

        $partidos = Partido::with(['equipos', 'cancha', 'arbitro'])                     // Cargar relaciones
            ->join('equipo_partido', 'equipo_partido.partido_id', '=', 'partidos.id')   // Relación entre partidos y equipos
            ->join('equipos', 'equipos.id', '=', 'equipo_partido.equipo_id')            // Relación entre equipos y partido_equipo  
            ->join('torneos', 'equipos.torneo_id', '=', 'torneos.id')                   // Relación entre equipos y torneos 
            ->orderBy('partidos.fecha', 'desc')                                         // Ordenar por fecha descendente
            ->when(request('search'), function ($query) {                               // Filtrar equipos por torneo
                return $query->where('torneos.id', request('search'));                  // Filtrar por el id del torneo seleccionado
            })
            ->get();

        return view('guests.partidos', compact('partidos', 'torneos'));

    }

    public function equipos(): View
    {
        $torneos = Torneo::all(); // Traemos todos los torneos para mostrarlos en el menú
        $equipos = collect(); // Inicializamos la colección vacía de equipos

        // Si hay un torneo seleccionado, filtramos los equipos por ese torneo
        if (request('search')) {
            $equipos = Equipo::where('torneo_id', request('search'))->get(); // Filtramos los equipos por el torneo seleccionado
        }

        $datos = Equipo::select(
            'jugadors.nombre as nombre',
            'jugadors.apellido as apellido',
            'jugadors.posicion as posicion',
            DB::raw('COUNT(DISTINCT jugador_partido.partido_id) as partidos_count'),
            DB::raw('SUM(jugador_partido.goles) as goles'),
            DB::raw('SUM(jugador_partido.asistencias) as asistencias'),
            DB::raw('SUM(CASE WHEN jugador_partido.tarjeta_id = 1 THEN 1 ELSE 0 END) as amarillas'),
            DB::raw('SUM(CASE WHEN jugador_partido.tarjeta_id = 2 THEN 1 ELSE 0 END) as rojas')
        )
            ->join('torneos', 'equipos.torneo_id', '=', 'torneos.id') //hacemos un join entre torneo y equipo 
            ->join('jugadors', 'jugadors.equipo_id', '=', 'equipos.id')
            ->join('jugador_partido', 'jugador_partido.jugador_id', '=', 'jugadors.id')
            ->groupBy('jugadors.nombre', 'jugadors.apellido', 'jugadors.posicion', 'jugadors.id')
            ->havingRaw('COUNT(DISTINCT jugador_partido.partido_id) >= 1') // Filtramos jugadores con partidos jugados >= 1
            ->orderByDesc('partidos_count') // Ordenar por partidos jugados (de mayor a menor)
            ->when(request('search'), function ($query) {
                return $query->where('torneos.id', request('search')); // Filtramos por el id del torneo
            })
            ->when(request('filtro'), function ($query) {
                return $query->where('equipos.id', request('filtro')); // Filtramos por el id del equipo
            })
            ->get();

        return view('guests.equipos', compact('datos', 'equipos', 'torneos'));
    }

    public function asistencias(): View
    {
        $torneos = Torneo::all();

        $asistencias = Equipo::select('equipos.nombre as equipo_nombre', 'jugadors.nombre as jugador_nombre', 'jugadors.apellido as jugador_apellido', DB::raw('SUM(jugador_partido.asistencias) as asistencias_sum'))
            ->join('torneos', 'equipos.torneo_id', '=', 'torneos.id') //hacemos un join entre torneo y equipo    
            ->join('jugadors', 'jugadors.equipo_id', '=', 'equipos.id')
            ->join('jugador_partido', 'jugador_partido.jugador_id', '=', 'jugadors.id')
            ->groupBy('jugadors.nombre', 'jugadors.apellido', 'equipos.nombre')
            ->havingRaw('SUM(jugador_partido.asistencias) >= 1') // Filtramos jugadores con asistencias >= 1
            ->orderByDesc('asistencias_sum') // Ordenar por asistencias (de mayor a menor)
            // Filtrar equipos por torneo
            ->when(request('search'), function ($query) {
                return $query->where('torneos.id', request('search')); // Filtramos por el id del torneo
            })
            ->get();

        //dd($torneos);
        return view('guests.asistencias', compact('asistencias', 'torneos'));
    }

    public function goleadores(): View
    {
        $torneos = Torneo::all();

        $goleadores = Equipo::select('equipos.nombre as equipo_nombre', 'jugadors.nombre as jugador_nombre', 'jugadors.apellido as jugador_apellido', DB::raw('SUM(jugador_partido.goles) as goles_sum'))
            ->join('torneos', 'equipos.torneo_id', '=', 'torneos.id') //hacemos un join entre torneo y equipo  
            ->join('jugadors', 'jugadors.equipo_id', '=', 'equipos.id')
            ->join('jugador_partido', 'jugador_partido.jugador_id', '=', 'jugadors.id')
            ->groupBy('jugadors.nombre', 'jugadors.apellido', 'equipos.nombre')
            ->havingRaw('SUM(jugador_partido.goles) >= 1') // Filtramos jugadores con goles >= 1
            ->orderByDesc('goles_sum') // Ordenar por goles (de mayor a menor)
            // Filtrar equipos por torneo
            ->when(request('search'), function ($query) {
                return $query->where('torneos.id', request('search')); // Filtramos por el id del torneo
            })
            ->get();

        //dd($goleadores);
        return view('guests.goleadores', compact('goleadores', 'torneos'));
    }

    public function noticias(): View
    {
        $torneos = Torneo::all();
        $noticias = Noticia::orderByDesc('fecha')->get();
        return view('guests.noticias', compact('noticias', 'torneos'));
    }
}
