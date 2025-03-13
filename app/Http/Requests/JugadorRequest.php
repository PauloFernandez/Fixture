<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;

class JugadorRequest extends FormRequest
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
            'file_uri' => ['nullable' ,File::image()->max(10 * 1024)->dimensions(Rule::dimensions()->maxWidth(650)->maxHeight(650))],
            'nombre' => ['required', 'max:255'],
            'apellido' => ['required', 'max:255'],
            'fecha_nac' => ['required', 'date', 'before:now'],
            'direccion' => ['max:255'],
            'telefono' => ['required', 'max_digits:9', 'min_digits:8'],
            'email' => ['required', 'email:rfc,dns', Rule::unique('jugadors')->ignore($this->route('jugador'))],
            'posicion' => ['required','max:3'],
            'num_camiseta' => ['required', 'numeric', 'max_digits:3'],
            'equipo_id' => ['required'],
        ];
    }
}
