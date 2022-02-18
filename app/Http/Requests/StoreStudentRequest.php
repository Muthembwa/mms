<?php

namespace App\Http\Requests;

use App\Student;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreStudentRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('student_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'class_id'           => [
                'required',
                'integer',
            ],
            'stream_id'          => [
                'required',
                'integer',
            ],
            'admission_number'   => [
                'required',
                'digits_between:0,10',
            ],
            'first_name'         => [
                'required',
            ],
            'last_name'          => [
                'required',
            ],
            'guardians_name'     => [
                'required',
            ],
            'guardians_phone_no' => [
                'min:10',
                'max:10',
            ],
            'guardians_email'    => [
                'required',
            ],
            
        ];
    }
}
