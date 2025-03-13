<?php

namespace App\Http\Controllers;

use App\Http\Requests\EquipoRequest;
use Illuminate\Http\Request;
use App\Models\Equipo;
use App\Models\Torneo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class EquipoController extends Controller
{
    public function index(): View
    {
        $equipos = Equipo::with('torneo')->paginate(10);
        return view('admin.equipo.index', compact('equipos'));
    }

    public function create(): View
    {
        $torneos = Torneo::orderBy('nombre')->get();
        return view('admin.equipo.create', compact('torneos'));
    }

    public function store(EquipoRequest $request): RedirectResponse
    {
        $equipo = Equipo::create($request->all());

        if ($request->hasFile('file_uri')) {
            $fileName = $equipo->id . "-" . time() . "." . $request->file('file_uri')->extension();
            $request->file('file_uri')->storeAs('public/images', $fileName);
            $equipo->file_uri = $fileName;
            $equipo->save();
        }

        return redirect()->route('admin.equipo.index')->with('success', __('view.datos_creado'));
    }

    public function edit(Equipo $equipo): View
    {
        $torneos = Torneo::orderBy('nombre')->get();
        return view('admin.equipo.edit', compact('equipo', 'torneos'));
    }

    public function update(EquipoRequest $request, Equipo $equipo): RedirectResponse
    {
        if ($request->hasFile('file_uri')) {
            $uri = 'public/images' . $equipo->file_uri;
            Storage::delete($uri);
            $fileName = $equipo->id . "-" . time() . "." . $request->file('file_uri')->extension();
            $request->file('file_uri')->storeAs('public/images', $fileName);
            $equipo->file_uri = $fileName;
            $equipo->save();
        }

        $equipo->update($request->input());
        return redirect()->route('admin.equipo.index')->with('success', __('view.datos_actualizado'));
    }

    public function destroy(Equipo $equipo)
    {
        $uri = 'public/images' . $equipo->file_uri;
        Storage::delete($uri);
        $equipo->delete();
        return redirect()->route('admin.equipo.index')->with('danger', __('view.datos_eliminado'));
    }

    public function ctaEquipo(): View
    {
        $equipos = Equipo::with('partidos', 'torneo')->paginate(10);
        return view('admin.equipo.ctaEquipo', compact('equipos'));
    }

    public function editCtaEquipo(Request $request, Equipo $equipo): View
    {
        $partidoId = $request->query('partido_id'); // Recuperar el ID del partido desde la consulta

        return view('admin.equipo.editCtaEquipo', compact('equipo', 'partidoId'));
    }

    public function updateCtaEquipo(Request $request, Equipo $equipo)
    {
        // Obtener el ID del partido de la solicitud
        $partidoId = $request->input('partido_id');

        // Actualizar solo el estado en la tabla pivote
        $equipo->partidos()->updateExistingPivot($partidoId, [
            'estado' => $request->estado,
        ]);

        return redirect()->route('admin.equipo.ctaEquipo')->with('success', __('view.datos_guardados'));
    }
}
