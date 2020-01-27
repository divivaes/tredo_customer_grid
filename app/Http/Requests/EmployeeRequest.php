<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'firstname' => 'string|required|max:100',
            'lastname' => 'string|required|max:100',
            'middlename' => 'string|nullable|max:100',
            'gender' => 'string|nullable|max:10',
            'salary' => 'string|nullable'
        ];
    }
}
