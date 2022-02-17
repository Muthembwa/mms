<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSchoolLevelRequest;
use App\Http\Requests\UpdateSchoolLevelRequest;
use App\Http\Resources\Admin\SchoolLevelResource;
use App\SchoolLevel;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SchoolLevelApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('school_level_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SchoolLevelResource(SchoolLevel::all());
    }

    public function store(StoreSchoolLevelRequest $request)
    {
        $schoolLevel = SchoolLevel::create($request->all());

        return (new SchoolLevelResource($schoolLevel))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(SchoolLevel $schoolLevel)
    {
        abort_if(Gate::denies('school_level_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SchoolLevelResource($schoolLevel);
    }

    public function update(UpdateSchoolLevelRequest $request, SchoolLevel $schoolLevel)
    {
        $schoolLevel->update($request->all());

        return (new SchoolLevelResource($schoolLevel))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(SchoolLevel $schoolLevel)
    {
        abort_if(Gate::denies('school_level_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $schoolLevel->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
