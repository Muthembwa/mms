<?php

namespace App\Http\Requests;

use App\Stream;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateStreamRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('stream_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'class_name' => [
                'required',
            ],
        ];
    }
}
