<?php

namespace App\Http\Requests;

use App\Result;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreResultRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('result_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'exam_id'    => [
                'required',
                'integer',
            ],
            'student_id' => [
                'required',
                'integer',
            ],
            'mean'       => [
                'required',
                'digits_between:0,10',
            ],
            'grade'      => [
                'min:1',
                'max:1',
            ],
            'rank'       => [
                'digits_between:0,10',
            ],
        ];
    }
}
