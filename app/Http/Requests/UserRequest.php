<?php

namespace App\Http\Requests;

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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'doc_num'=> 'required|string|max:255',
            'name'=> 'required|string|max:255',
            'last_name'=> 'required|string|max:255',
            'phone'=> 'required|string|max:50|min:10',
            'user_name'=> 'required|string|max:50',
            'email'=> 'required|string|max:255',
            'password'=> 'required|string|max:30|min:10',
        ];
    }
}
