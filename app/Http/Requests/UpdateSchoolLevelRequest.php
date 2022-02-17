<?php

namespace App\Http\Requests;

use App\SchoolLevel;
use Illuminate\Foundation\Http\FormRequest;

class UpdateSchoolLevelRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('school_level_edit');
    }

    public function rules()
    {
        return [
            'stage_name' => [
                'required',
            ],
        ];
    }
}
