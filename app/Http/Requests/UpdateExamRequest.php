<?php

namespace App\Http\Requests;

use App\Exam;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateExamRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('exam_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'exam_code'  => [
                'min:5',
                'max:5',
                'required',
                'unique:exams,exam_code,' . request()->route('exam')->id,
            ],
            'exam_name'  => [
                'required',
                'unique:exams,exam_name,' . request()->route('exam')->id,
            ],
            'start_date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'end_date'   => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'classes.*'  => [
                'integer',
            ],
            'classes'    => [
                'required',
                'array',
            ],
        ];
    }
}
