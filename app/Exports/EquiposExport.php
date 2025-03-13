<?php

namespace App\Exports;

use App\Models\Equipo;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class EquiposExport implements FromCollection, WithHeadings, WithMapping, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Equipo::select('file_uri', 'nombre', 'estado', 'torneo_id')->get();
    }

    public function headings(): array
    {
        return [
            'Foto',
            'Nombre',
            'Estado',
            'Torneo'
        ];
    }

    public function map($equipo): array
    {
        return [
            $equipo->file_uri,
            $equipo->nombre,
            $equipo->estado,
            $equipo->torneo->nombre,
        ];
    }
}
