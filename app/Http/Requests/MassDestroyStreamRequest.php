<?php

namespace App\Http\Requests;

use App\Stream;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyStreamRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('stream_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:streams,id',
        ];
    }
}
