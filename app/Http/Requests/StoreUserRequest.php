<?php

namespace App\Http\Requests;

use App\User;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('user_create');
    }

    public function rules()
    {
        return [
            'school_name_id' => [
                'required',
                'integer',
            ],
            'surname'        => [
                'required',
            ],
            'name'           => [
                'min:6',
                'max:10',
                'required',
            ],
            'roles.*'        => [
                'integer',
            ],
            'roles'          => [
                'required',
                'array',
            ],
            'email'          => [
                'required',
            ],
            'password'       => [
                'required',
            ],
        ];
    }
}
