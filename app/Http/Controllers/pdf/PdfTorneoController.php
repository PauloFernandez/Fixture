<?php

namespace App\Http\Controllers\pdf;

use App\Http\Controllers\Controller;
use App\Models\Torneo;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfTorneoController extends Controller
{
    public function infoTorneo()
    {
        $torneo = Torneo::where('publicado', 1)->first();
        $logo = '/img/logo.jpeg';
        //dd($torneo);
        /** guardamos en la variabel la ubicacion de nuestra vista */
        $pdf = Pdf::loadView('pdf.infoTorneo', compact('torneo', 'logo'));
        
        /** descargamos y le asignamos un nombre  */
        return $pdf->download('infoTorneo.pdf');
        //return $pdf->stream('infoTorneo.pdf');
    }
}
