<?php

namespace App\Http\Requests;

use App\Models\Curso;
use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;//comprobar si usuario tienen permisos por ejemplo, true -false
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $cursoId = $this->route('curso') ? $this->route('curso')->id : null;
        return [
            'nombre'=> 'required',
            'slug'=> 'required|unique:cursos,slug,'.$cursoId,
            'descripcion' => 'required',
            'categoria' => 'required'
        ];//validacion
    }
    public function messages(): array
    {
        return[
            'nombre.required'=>' El nombre es necesario',
            'descripcion.required'=>'La descripcion es necesaria',
            'categoria.required'=>'Escoja un tipo de categoria'
        

        ];
    }
}
