<?php

namespace App\Http\Controllers\csv;

use App\Exports\EquiposExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class CsvEquipoController extends Controller
{
    public function export()
    {
        return Excel::download(new EquiposExport, 'equipo.csv');
    }
}
