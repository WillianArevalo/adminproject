<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            "name" => "required|string",
            "database" => "required|string",
            "path" => "required|string",
            "directory" => "required|string",
            "url_localhost" => "required|string",
            "repository" => "required|string",
            "status" => "required|string",
            "start_date" => "required|date",
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "El campo del nombre es requerido",
            "database.required" => "El campo de la base de datos es requerido",
            "path.required" => "El campo de la ruta es requerido",
            "directory.required" => "El campo del directorio es requerido",
            "url_localhost.required" => "El campo de la URL local es requerido",
            "repository.required" => "El campo del repositorio es requerido",
            "status.required" => "El campo del estado es requerido",
            "start_date.required" => "El campo de la fecha de inicio es requerido",
        ];
    }
}