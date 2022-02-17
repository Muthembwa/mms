<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubjectRequest;
use App\Http\Requests\UpdateSubjectRequest;
use App\Http\Resources\Admin\SubjectResource;
use App\Subject;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SubjectsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('subject_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SubjectResource(Subject::with(['subject_teachers', 'team'])->get());
    }

    public function store(StoreSubjectRequest $request)
    {
        $subject = Subject::create($request->all());
        $subject->subject_teachers()->sync($request->input('subject_teachers', []));
        $subject->team()->sync($request->input('team', []));

        return (new SubjectResource($subject))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Subject $subject)
    {
        abort_if(Gate::denies('subject_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SubjectResource($subject->load(['subject_teachers', 'team']));
    }

    public function update(UpdateSubjectRequest $request, Subject $subject)
    {
        $subject->update($request->all());
        $subject->subject_teachers()->sync($request->input('subject_teachers', []));
        $subject->team()->sync($request->input('team', []));

        return (new SubjectResource($subject))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Subject $subject)
    {
        abort_if(Gate::denies('subject_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $subject->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
