<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartidoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'fecha' => ['required', 'date','after:now'],
            'hora' => ['required'],
            'importe' => ['required', 'numeric'],
            'estado' => ['required'],
            'arbitro_id' => ['required'],
            'cancha_id' => ['required'],
            'equipoL' => ['required', 'exists:equipos,id'],
            'equipoV' => ['required', 'exists:equipos,id', 'different:equipoL'],  // Regla para validar que el visitante es diferente al local
        ];
    }

      /**
     * Get the custom messages for the validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'equipoV.different' => 'El equipo visitante no puede ser el mismo que el equipo local.',
        ];
    }
}
