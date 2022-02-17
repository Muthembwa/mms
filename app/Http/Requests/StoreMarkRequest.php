<?php

namespace App\Http\Requests;

use App\Mark;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreMarkRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('mark_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
        ];
    }
}
