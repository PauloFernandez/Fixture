<?php

namespace App\Http\Controllers;

use App\Http\Requests\CanchaRequest;
use App\Models\Cancha;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CanchaController extends Controller
{
    public function index(): View
    {
        $canchas = Cancha::all();
        return view('admin.cancha.index', compact('canchas'));
    }

    public function create(): View
    {
        return view('admin.cancha.create');
    }

    public function store(CanchaRequest $request): RedirectResponse
    {
        Cancha::create($request->all());
        return redirect()->route('admin.cancha.index')->with('success', __('view.datos_creado'));
    }

    public function edit(Cancha $cancha): View
    {
        return view('admin.cancha.edit', compact('cancha'));
    }

    public function update(CanchaRequest $request, Cancha $cancha): RedirectResponse
    {
        $cancha->update($request->all());
        return redirect()->route('admin.cancha.index')->with('success', __('view.datos_actualizado'));
    }

    public function destroy(Cancha $cancha)
    {
        $cancha->delete();
        return redirect()->route('admin.cancha.index')->with('danger', __('view.datos_eliminado'));
    }
}
