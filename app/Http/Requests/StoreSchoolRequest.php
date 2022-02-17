<?php

namespace App\Http\Requests;

use App\School;
use Illuminate\Foundation\Http\FormRequest;

class StoreSchoolRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('school_create');
    }

    public function rules()
    {
        return [
            'school_name' => [
                'required',
            ],
            'sub_county'  => [
                'required',
            ],
            'level_id'    => [
                'required',
                'integer',
            ],
        ];
    }
}
