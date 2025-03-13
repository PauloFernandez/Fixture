<?php

namespace App\Http\Controllers;

use App\Http\Requests\PartidoRequest;
use Illuminate\Http\Request;
use App\Models\Arbitro;
use App\Models\Cancha;
use App\Models\Equipo;
use App\Models\Partido;
use App\Models\Torneo;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PartidoController extends Controller
{
    public function index(): View
    {
        $partidos = Partido::with('cancha', 'arbitro', 'equipos')->paginate(10);
        return view('admin.partido.index', compact('partidos'));
    }

    public function create(): View
    {
        $torneos = Torneo::all();
        $canchas = Cancha::all();
        $arbitros = Arbitro::all();
        return view('admin.partido.create', compact('canchas', 'arbitros', 'torneos'));
    }

    public function store(PartidoRequest $request): RedirectResponse
    {
        $validated = $request->validated();  // Obtienes los datos validados

        // Ahora puedes proceder a crear el partido
        $partido = Partido::create($validated);

        $partido->equipos()->sync([$request->input('equipoL'), $request->input('equipoV')]);

        return redirect()->route('admin.partido.index')->with('success', __('view.datos_creado'));
    }

    public function edit(Partido $partido): View
    {
        $canchas = Cancha::all();
        $arbitros = Arbitro::all();
        $equipos = Equipo::all();
        $torneos = Torneo::all();
        return view('admin.partido.edit', compact('partido', 'canchas', 'arbitros', 'equipos', 'torneos'));
    }

    public function update(PartidoRequest $request, Partido $partido): RedirectResponse
    {

        $validated = $request->validated();  // Obtienes los datos validados

        // Ahora puedes proceder a crear el partido
        $partido->update($validated);

        // Sincroniza los equipos con la relación en la base de datos
        $partido->equipos()->sync([$request->input('equipoL'), $request->input('equipoV')]);

        return redirect()->route('admin.partido.index')->with('success', __('view.datos_actualizado'));
    }

    public function destroy(Partido $partido)
    {
        $partido->delete(); // con este codigo realiza la eliminacion logica de la tabla principal insertando el la columna deleted_at, pero no registra nada en la tabla intermedia.
        $partido->equipos()->detach(); //este codigo elimina los datos de la tabla pivote 
        $partido->jugadores()->detach();

        return redirect()->route('admin.partido.index')->with('danger', __('view.datos_eliminado'));
    }

    //Estado de pago al arbitro: Solo muestra si esta pendiente o no el pago, de estarlo apunta al edit del partido y actualizo el estado 
    public function ctaArbitro(): View
    {
        $partidos = Partido::with('arbitro')->paginate(10);
        return view('admin.arbitro.ctaArbitro', compact('partidos'));
    }

    public function editCtaArbitro(Partido $partido): View
    {
        return view('admin.arbitro.editCtaArbitro', compact('partido'));
    }

    public function updateCtaArbitro(Request $request, Partido $partido)
    {
        $partido->update($request->all());
        return redirect()->route('admin.arbitro.ctaArbitro')->with('success', __('view.datos_guardados'));
    }

    public function cargarEquipos(Request $request)
    {
        // Obtener el ID del equipo desde la solicitud
        $torneo = $request->input('torneo');

        // Buscar el equipo con los jugadores relacionados
        $torneo = Torneo::with('equipos')->findOrFail($torneo);

        // Verificar si el equipo tiene jugadores y devolverlos en formato JSON
        if ($torneo->equipos->isEmpty()) {
            return response()->json([]); // Si no hay jugadores, devolver un array vacío
        }

        return response()->json($torneo->equipos->map(function ($equipos) {
            return [
                'id' => $equipos->id,
                'nombre' => $equipos->nombre
            ];
        }));
    }
}
