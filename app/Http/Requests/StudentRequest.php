<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StudentRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
           
          //  'email' => 'unique:students,email,'. $this->id , 
            'name_en'        => 'required|string',
            'name_ar'        => 'required|string',
            'email'        => 'required|string',
            'phone'        => 'required|string',
            'student_id'        => 'required|string',
            'password'        => 'required|string',
            'gpa'        => 'required|string',
            'units'        => 'required|string',
            'address'        => 'required|string',
            'image'        => 'required|string',
            'birthdate'        => 'required|string',
            'status'        => 'required|string',
            'department_id'        => 'required|string',


           

        ];
    }
}
