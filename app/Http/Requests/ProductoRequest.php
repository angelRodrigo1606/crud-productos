<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre'      => ['required', 'string', 'min:3', 'max:255', 'regex:/^[\pL\s]+$/u'],
            'cantidad'    => ['required', 'integer', 'min:0', 'max:100000'],
            'precio'      => ['required', 'numeric', 'min:0', 'max:999999.99'],
            'calidad'     => ['required', 'string', 'in:Baja,Media,Alta,Premium'],
            'descripcion' => ['required', 'string', 'min:10', 'max:1000'],
        ];
    }

    public function messages(): array
    {
        return [
            'nombre.required'      => 'El nombre es obligatorio.',
            'nombre.min'           => 'El nombre debe tener al menos 3 caracteres.',
            'nombre.max'           => 'El nombre no puede superar los 255 caracteres.',
            'nombre.regex'         => 'El nombre solo puede contener letras y espacios.',

            'cantidad.required'    => 'La cantidad es obligatoria.',
            'cantidad.integer'     => 'La cantidad debe ser un número entero.',
            'cantidad.min'         => 'La cantidad no puede ser negativa.',
            'cantidad.max'         => 'La cantidad no puede superar 100,000.',

            'precio.required'      => 'El precio es obligatorio.',
            'precio.numeric'       => 'El precio debe ser un número válido.',
            'precio.min'           => 'El precio no puede ser negativo.',
            'precio.max'           => 'El precio no puede superar 999,999.99.',

            'calidad.required'     => 'La calidad es obligatoria.',
            'calidad.in'           => 'La calidad debe ser: Baja, Media, Alta o Premium.',

            'descripcion.required' => 'La descripción es obligatoria.',
            'descripcion.min'      => 'La descripción debe tener al menos 10 caracteres.',
            'descripcion.max'      => 'La descripción no puede superar los 1,000 caracteres.',
        ];
    }
}
