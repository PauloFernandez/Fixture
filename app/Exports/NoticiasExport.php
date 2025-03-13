<?php

namespace App\Exports;

use App\Models\Noticia;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class NoticiasExport implements FromCollection, WithHeadings, WithMapping, ShouldAutoSize
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Noticia::select('fecha', 'titulo', 'descripcion')->get();
    }

    public function headings(): array
    {
        return [
            'fecha',
            'titulo',
            'descripcion'
        ];
    }

    public function map($noticia): array
    {
        return [
            $noticia->fecha,
            $noticia->titulo,
            $noticia->descripcion,
        ];
    }
}
