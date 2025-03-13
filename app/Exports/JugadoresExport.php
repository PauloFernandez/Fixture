<?php

namespace App\Exports;

use App\Models\Jugador;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class JugadoresExport implements FromCollection, WithHeadings, WithMapping, ShouldAutoSize
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Jugador::select('file_uri', 'nombre', 'apellido', 'fecha_nac', 'direccion', 'telefono', 'email', 'posicion', 'num_camiseta', 'equipo_id')->get();
    }

    public function headings(): array
    {
        return [
            'file_uri',
            'nombre',
            'apellido',
            'fecha_nac',
            'direccion',
            'telefono',
            'email',
            'posicion',
            'num_camiseta',
            'equipo_id'
        ];
    }

    public function map($jugador): array
    {
        return [
            $jugador->file_uri,
            $jugador->nombre,
            $jugador->apellido,
            $jugador->fecha_nac,
            $jugador->direccion,
            $jugador->telefono,
            $jugador->email,
            $jugador->posicion,
            $jugador->num_camiseta,
            $jugador->equipo->nombre,
        ];
    }
}
