<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClassroomRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'List_Classes.*.Name'=>'required|unique:classrooms,name_class',
            'List_Classes.*.Grade_id'=>'required',
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'Name.required' => 'validation.required',
    //         'Name.unique' => 'validation.unique',
    //     ];
    // }
}
