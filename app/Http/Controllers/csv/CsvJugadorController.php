<?php

namespace App\Http\Controllers\csv;

use App\Exports\JugadoresExport;
use App\Http\Controllers\Controller;
use App\Imports\JugadorImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CsvJugadorController extends Controller
{
    public function import(Request $request)
    {
        $file = $request->file('document_csv');
        if ($file != "") {
            Excel::import(new JugadorImport, $file);
            return redirect()->route('admin.jugador.index')->with('success', __('view.datos_guardados'));
        } else {
            return redirect()->route('admin.jugador.index')->with('danger', 'Seleccione un Archivo');
        }
    }

    public function export()
    {
        return Excel::download(new JugadoresExport, 'jugadores.csv');
    }
}
