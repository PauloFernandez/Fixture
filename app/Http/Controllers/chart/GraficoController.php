<?php

namespace App\Http\Controllers\chart;

use App\Http\Controllers\Controller;
use App\Models\JugadorPartido;
use App\Models\Partido;
use App\Models\Torneo;
use Illuminate\Support\Facades\DB;

class GraficoController extends Controller
{
    public function cards()
    {
        //Datos para las tarjetas
        $detallePartidos = (object)[
            'asistencia' => JugadorPartido::where('asistencias', '>', 0)->sum('asistencias'),
            'goles'      => JugadorPartido::where('goles', '>', 0)->sum('goles'),
            'amarillas'  => JugadorPartido::where('tarjeta_id', '1')->count(),
            'rojas'      => JugadorPartido::where('tarjeta_id', '2')->count(),
        ];

        // Obtener la cantidad de partidos por mes
        $partidosPorMes = Partido::selectRaw('YEAR(fecha) as year, MONTH(fecha) as month, COUNT(*) as cantidad')
            ->groupBy('year', 'month')
            ->orderBy('year', 'asc')
            ->orderBy('month', 'asc')
            ->get();

        // Obtener partidos por torneo utilizando join
        $torneos = Torneo::select('torneos.id', 'torneos.nombre', DB::raw('COUNT(DISTINCT partidos.id) as partidos_count'))
            ->join('equipos', 'equipos.torneo_id', '=', 'torneos.id')
            ->join('equipo_partido', 'equipo_partido.equipo_id', '=', 'equipos.id')
            ->join('partidos', 'partidos.id', '=', 'equipo_partido.partido_id')
            ->groupBy('torneos.id', 'torneos.nombre')
            ->get();

        // Preparar los datos para los gráficos
        $labels = $torneos->pluck('nombre'); // Nombres de los torneos
        $data = $torneos->pluck('partidos_count'); // Cantidad de partidos

        return view('admin.dashboard', compact('detallePartidos', 'partidosPorMes', 'labels', 'data'));
    }
}
