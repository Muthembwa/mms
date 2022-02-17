<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreResultRequest;
use App\Http\Requests\UpdateResultRequest;
use App\Http\Resources\Admin\ResultResource;
use App\Result;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ResultsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('result_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ResultResource(Result::with(['exam', 'class', 'student', 'team'])->get());
    }

    public function store(StoreResultRequest $request)
    {
        $result = Result::create($request->all());
        $result->exam()->sync($request->input('exam', []));
        $result->class()->sync($request->input('class', []));
        $result->student()->sync($request->input('student', []));
        $result->team()->sync($request->input('team', []));

        return (new ResultResource($result))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Result $result)
    {
        abort_if(Gate::denies('result_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ResultResource($result->load(['exam', 'class', 'student', 'team']));
    }

    public function update(UpdateResultRequest $request, Result $result)
    {
        $result->update($request->all());
        $result->exam()->sync($request->input('exam', []));
        $result->class()->sync($request->input('class', []));
        $result->student()->sync($request->input('student', []));
        $result->team()->sync($request->input('team', []));

        return (new ResultResource($result))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Result $result)
    {
        abort_if(Gate::denies('result_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $result->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
