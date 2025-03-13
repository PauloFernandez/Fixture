<?php

namespace App\Imports;

use App\Models\Noticia;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class NoticiaImport implements ToModel, WithHeadingRow, WithValidation
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Noticia([
            'fecha' => $row['fecha'],
            'titulo' => $row['titulo'],
            'descripcion' => $row['descripcion']
        ]);
    }

    //Reglas de validacion 
    public function rules(): array
    {
        return [
             // con el * recorrera todo el archivo excel sin importar que este dividido por los metodos WithBatchInserts, WithChunkReading
             '*.fecha' => ['required', 'date', 'before:now'],
             '*.titulo' => ['required', 'max:255'],
             '*.descripcion' => ['required'],
        ];
    }
}
