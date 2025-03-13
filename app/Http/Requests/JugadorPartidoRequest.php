<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JugadorPartidoRequest extends FormRequest
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
            'goles' => ['nullable', 'numeric', 'max_digits:2'],
            'asistencias' => ['nullable', 'numeric', 'max_digits:2'],
            'partido_id' => ['required'],
            'jugador_id' => ['required'],
        ];
    }
}
