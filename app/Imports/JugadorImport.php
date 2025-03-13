<?php

namespace App\Imports;

use App\Models\Equipo;
use App\Models\Jugador;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class JugadorImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading, WithValidation
{
    private $equipos;

    public function __construct()
    {
        //pluck va a comparar el nombre con el id y verifica que este correcto
        $this->equipos = Equipo::pluck('id', 'nombre');
    }
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    public function model(array $row)
    {
        return new Jugador([
            'file_uri' => $row['file_uri'],
            'nombre' => $row['nombre'],
            'apellido' => $row['apellido'],
            'fecha_nac' => $row['fecha_nac'],
            'direccion' => $row['direccion'],
            'telefono' => $row['telefono'],
            'email' => $row['email'],
            'posicion' => $row['posicion'],
            'num_camiseta' => $row['num_camiseta'],
            'equipo_id' => $this->equipos[$row['equipo_id']] //Se indica esta codificacion
        ]);
    }

    public function batchSize(): int
    {
        return 1000;
    }

    public function chunkSize(): int
    {
        return 1000;
    }

    //Reglas de validacion 
    public function rules(): array
    {
        return [
            'file_uri' => ['nullable'],
            'nombre' => ['required', 'max:255'],
            'apellido' => ['required', 'max:255'],
            'fecha_nac' => ['required', 'date', 'before:now'],
            'direccion' => ['max:255'],
            'telefono' => ['required', 'max_digits:9', 'min_digits:8'],
            'email' => ['required', 'email:rfc,dns', 'unique:jugadors'],
            'posicion' => ['required','max:3'],
            'num_camiseta' => ['required', 'numeric', 'max_digits:3'],
            'equipo_id' => ['required', 'exists:equipos,id'],
        ];
    }
}
