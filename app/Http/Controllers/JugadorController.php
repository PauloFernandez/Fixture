<?php

namespace App\Http\Controllers;

use App\Http\Requests\JugadorRequest;
use App\Models\Equipo;
use App\Models\Jugador;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class JugadorController extends Controller
{
    public function index(): View
    {
        $jugadores = Jugador::with('equipo')->paginate(10);
        return view('admin.jugador.index', compact('jugadores'));
    }

    public function create(): View
    {
        $equipos = Equipo::all();
        return view('admin.jugador.create', compact('equipos'));
    }

    public function store(JugadorRequest $request): RedirectResponse
    {
        $jugador = Jugador::create($request->all());

        if($request->hasFile('file_uri')){
            $fileName = $jugador->id . "-" . time() . "." . $request->file('file_uri')->extension();
            $request->file('file_uri')->storeAs('public/images', $fileName);
            $jugador->file_uri = $fileName;
            $jugador->save();
        }
        return redirect()->route('admin.jugador.index')->with('success', __('view.datos_creado'));
    }

    public function show(Jugador $jugador): View
    {
        return view('admin.jugador.show', compact('jugador'));
    }

    public function edit(Jugador $jugador): View
    {
        $equipos = Equipo::all();
        return view('admin.jugador.edit', compact('jugador', 'equipos'));
    }

    public function update(JugadorRequest $request, Jugador $jugador): RedirectResponse
    {
        if ($request->hasFile('file_uri')) {
            $uri = 'public/images' . $jugador->file_uri;
            Storage::delete($uri);
            $fileName = $jugador->id . "-" . time() . "." . $request->file('file_uri')->extension();
            $request->file('file_uri')->storeAs('public/images', $fileName);
            $jugador->file_uri = $fileName;
            $jugador->save();
        }

        $jugador->update($request->input());
        return redirect()->route('admin.jugador.index')->with('success', __('view.datos_actualizado'));
    }

    public function destroy(Jugador $jugador)
    {
        $uri = 'public/images' . $jugador->file_uri;
        Storage::delete($uri);
        $jugador->delete();
        $jugador->partidos()->detach();
        return redirect()->route('admin.jugador.index')->with('danger', __('view.datos_eliminado'));
    }
}
