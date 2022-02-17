<?php

namespace App\Http\Requests;

use App\School;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroySchoolRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('school_delete'), 403, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:schools,id',
        ];
    }
}
