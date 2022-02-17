<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroySchoolLevelRequest;
use App\Http\Requests\StoreSchoolLevelRequest;
use App\Http\Requests\UpdateSchoolLevelRequest;
use App\SchoolLevel;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class SchoolLevelController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('school_level_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $schoolLevels = SchoolLevel::all();

        return view('admin.schoolLevels.index', compact('schoolLevels'));
    }

    public function create()
    {
        abort_if(Gate::denies('school_level_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.schoolLevels.create');
    }

    public function store(StoreSchoolLevelRequest $request)
    {
        $schoolLevel = SchoolLevel::create($request->all());

        return redirect()->route('admin.school-levels.index');
    }

    public function edit(SchoolLevel $schoolLevel)
    {
        abort_if(Gate::denies('school_level_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.schoolLevels.edit', compact('schoolLevel'));
    }

    public function update(UpdateSchoolLevelRequest $request, SchoolLevel $schoolLevel)
    {
        $schoolLevel->update($request->all());

        return redirect()->route('admin.school-levels.index');
    }

    public function show(SchoolLevel $schoolLevel)
    {
        abort_if(Gate::denies('school_level_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.schoolLevels.show', compact('schoolLevel'));
    }

    public function destroy(SchoolLevel $schoolLevel)
    {
        abort_if(Gate::denies('school_level_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $schoolLevel->delete();

        return back();
    }

    public function massDestroy(MassDestroySchoolLevelRequest $request)
    {
        SchoolLevel::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
