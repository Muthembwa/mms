<?php

namespace App\Http\Requests;

use App\Darasa;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateDarasaRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('darasa_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'class_name' => [
                'required',
            ],
            'streams.*'  => [
                'integer',
            ],
            'streams'    => [
                'required',
                'array',
            ],
        ];
    }
}
