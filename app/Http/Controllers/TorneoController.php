<?php

namespace App\Http\Controllers;

use App\Http\Requests\TorneoRequest;
use App\Models\Torneo;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TorneoController extends Controller
{
    public function index(): View
    {
        $torneos = Torneo::all();
        return view('admin.torneo.index', compact('torneos'));
    }

    public function create(): View
    {
        return view('admin.torneo.create');
    }

    public function store(TorneoRequest $request): RedirectResponse
    {
        Torneo::create($request->all());
        return redirect()->route('admin.torneo.index')->with('success', __('view.datos_creado'));
    }

    public function edit(Torneo $torneo): View
    {
        return view('admin.torneo.edit', compact('torneo'));
    }

    public function update(TorneoRequest $request, Torneo $torneo): RedirectResponse
    {
        $torneo->update($request->all());
        return redirect()->route('admin.torneo.index')->with('success', __('view.datos_actualizado'));
    }

    public function destroy(Torneo $torneo)
    {
        $torneo->delete();
        return redirect()->route('admin.torneo.index')->with('danger', __('view.datos_eliminado'));
    }

    public function show(Torneo $torneo): View
    {
        return view('admin.torneo.show', compact('torneo'));
    }

    public function inf_torneo()
    {
        $torneo = Torneo::where('publicado', 1)->first();
        return view('/home', compact('torneo'));
    }
}
