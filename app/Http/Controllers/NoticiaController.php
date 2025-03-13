<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoticiaRequest;
use App\Models\Noticia;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class NoticiaController extends Controller
{
    public function index(): View
    {
        $noticias = Noticia::orderByDesc('fecha')->paginate(7);
        return view('admin.noticia.index', compact('noticias'));
    }

    public function create(): View
    {
        return view('admin.noticia.create');
    }

    public function store(NoticiaRequest $request): RedirectResponse
    {
        Noticia::create($request->all());
        return redirect()->route('admin.noticia.index')->with('success', __('view.datos_creado'));
    }

    public function edit(Noticia $noticia): View
    {
        return view('admin.noticia.edit', compact('noticia'));
    }

    public function update(NoticiaRequest $request, Noticia $noticia): RedirectResponse
    {
        $noticia->update($request->all());
        return redirect()->route('admin.noticia.index')->with('success', __('view.datos_actualizado'));
    }

    public function destroy(Noticia $noticia)
    {
        $noticia->delete();
        return redirect()->route('admin.noticia.index')->with('danger', __('view.datos_eliminado'));
    }
}
