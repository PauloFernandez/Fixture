<?php

namespace App\Http\Controllers;

use App\Http\Requests\TarjetaRequest;
use App\Models\Tarjeta;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TarjetaController extends Controller
{
    public function index(): View
    {
        $tarjetas = Tarjeta::all();
        return view('admin.tarjeta.index', compact('tarjetas'));
    }

    public function create(): View
    {
        return view('admin.tarjeta.create');
    }

    public function store(TarjetaRequest $request): RedirectResponse
    {
        Tarjeta::create($request->all());
        return redirect()->route('admin.tarjeta.index')->with('success', __('view.datos_creado'));
    }

    public function edit(Tarjeta $tarjeta): View
    {
        return view('admin.tarjeta.edit', compact('tarjeta'));
    }

    public function update(TarjetaRequest $request, Tarjeta $tarjeta): RedirectResponse
    {
        $tarjeta->update($request->all());
        return redirect()->route('admin.tarjeta.index')->with('success', __('view.datos_actualizado'));
    }

    public function destroy(Tarjeta $tarjeta)
    {
        $tarjeta->delete();
        $tarjeta->jugadorpartidos()->delete();
        return redirect()->route('admin.tarjeta.index')->with('danger', __('view.datos_eliminado'));
    }
}
