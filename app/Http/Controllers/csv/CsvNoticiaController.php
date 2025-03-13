<?php

namespace App\Http\Controllers\csv;

use App\Exports\NoticiasExport;
use App\Http\Controllers\Controller;
use App\Imports\NoticiaImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CsvNoticiaController extends Controller
{
    public function import(Request $request)
    {
        $file = $request->file('document_csv');
        if ($file != "") {
            Excel::import(new NoticiaImport, $file);
            return redirect()->route('admin.noticia.index')->with('success', __('view.datos_creado'));
        } else {
            return redirect()->route('admin.noticia.index')->with('danger', 'Seleccione un Archivo');
        }
    }

    public function export()
    {
        return Excel::download(new NoticiasExport, 'noticias.csv');
    }
}
