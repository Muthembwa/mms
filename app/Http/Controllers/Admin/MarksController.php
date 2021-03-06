<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyMarkRequest;
use App\Http\Requests\StoreMarkRequest;
use App\Http\Requests\UpdateMarkRequest;
use App\Mark;
use App\Student;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class MarksController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('mark_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $marks = Mark::all();

        return view('admin.marks.index', compact('marks'));
    }

    public function create()
    {
        abort_if(Gate::denies('mark_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $adm_nos = Student::all()->pluck('admission_number', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.marks.create', compact('adm_nos'));
    }

    public function store(StoreMarkRequest $request)
    {
        $mark = Mark::create($request->all());

        return redirect()->route('admin.marks.index');
    }

    public function edit(Mark $mark)
    {
        abort_if(Gate::denies('mark_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $adm_nos = Student::all()->pluck('admission_number', 'id')->prepend(trans('global.pleaseSelect'), '');

        $mark->load('adm_no', 'team');

        return view('admin.marks.edit', compact('adm_nos', 'mark'));
    }

    public function update(UpdateMarkRequest $request, Mark $mark)
    {
        $mark->update($request->all());

        return redirect()->route('admin.marks.index');
    }

    public function show(Mark $mark)
    {
        abort_if(Gate::denies('mark_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $mark->load('adm_no', 'team');

        return view('admin.marks.show', compact('mark'));
    }

    public function destroy(Mark $mark)
    {
        abort_if(Gate::denies('mark_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $mark->delete();

        return back();
    }

    public function massDestroy(MassDestroyMarkRequest $request)
    {
        Mark::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
