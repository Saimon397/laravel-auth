<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:projects|max:150|min:3',
            'description' => 'nullable',
            'dev_lang' => 'required',
            'framework' => 'nullable',
            'difficulty' => 'nullable',
            'team' => 'nullable',
            'git_link' => 'nullable',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Il titolo del progetto è obbligatorio',
            'name.max' => 'Il titolo del progetto non può superare i :max caratteri',
            'name.min' => 'Il titolo del progetto non può essere inferiore a :min caratteri',
            'name.unique:projects' => 'Questo titolo é già esistente',
            'dev_lang.required' => 'Immetti almeno un linguaggio'
        ];
    }
}
