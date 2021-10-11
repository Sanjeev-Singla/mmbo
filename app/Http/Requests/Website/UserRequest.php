<?php

namespace App\Http\Requests\Website;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
    public static function register()
    {
        return [
            'name'=>  'required|max:255|min:3',
            'email'     =>  'required|email|unique:users,email|max:255',
            'password'  =>  'required|min:6|max:255',
            'confirm_password'=> 'required|same:password|min:6|max:255',
        ];
    }

    public static function signin()
    {
        return [
            'email' =>  'required',
            'password' =>  'required',
        ];
    }

}
