<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest as BaseFormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class FormRequest extends BaseFormRequest
{
    // public function failedValidation($validator)
    // {

    //     $error= $validator->errors()->all();
    //    // $error = $validator;

    //     throw  new HttpResponseException(response()->json(['code'=>400,'message'=>$error[0]]));

    // }
    
    public function authorize()
    {
        return true;
    }
}