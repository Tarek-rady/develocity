<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
         if($this->method() == 'POST'){
            return [
                'name' => 'required' ,
                'img' => 'required' ,
                'email' => 'required|email|exists:users,email' ,
                'password' => 'required' ,
            ];
         }else{
            return [
                'name' => 'required' ,
                'img' => 'required' ,
                'email' => 'required|email' ,
                'password' => 'nullable' ,
            ];
         }
    }
}
