<?php

namespace App\Http\Requests;

use App\SchoolLevel;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroySchoolLevelRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('school_level_delete'), 403, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:school_levels,id',
        ];
    }
}
