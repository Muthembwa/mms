<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMarkRequest;
use App\Http\Requests\UpdateMarkRequest;
use App\Http\Resources\Admin\MarkResource;
use App\Mark;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MarksApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('mark_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MarkResource(Mark::with(['adm_no', 'team'])->get());
    }

    public function store(StoreMarkRequest $request)
    {
        $mark = Mark::create($request->all());
        $mark->adm_no()->sync($request->input('adm_no', []));
        $mark->team()->sync($request->input('team', []));

        return (new MarkResource($mark))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Mark $mark)
    {
        abort_if(Gate::denies('mark_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MarkResource($mark->load(['adm_no', 'team']));
    }

    public function update(UpdateMarkRequest $request, Mark $mark)
    {
        $mark->update($request->all());
        $mark->adm_no()->sync($request->input('adm_no', []));
        $mark->team()->sync($request->input('team', []));

        return (new MarkResource($mark))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Mark $mark)
    {
        abort_if(Gate::denies('mark_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $mark->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
