<?php

namespace App\Http\Controllers\Admin;

use App\Darasa;
use App\Exam;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyResultRequest;
use App\Http\Requests\StoreResultRequest;
use App\Http\Requests\UpdateResultRequest;
use App\Result;
use App\Student;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ResultsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Result::query()->select('*');
            $query->with(['exam', 'class', 'student']);
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'result_show';
                $editGate      = 'result_edit';
                $deleteGate    = 'result_delete';
                $crudRoutePart = 'results';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });
            $table->editColumn('exam.exam', function ($row) {
                return $row->exam_id ? (is_string($row->exam) ? $row->exam : $row->exam->exam_name) : '';
            });
            $table->editColumn('darasa.class', function ($row) {
                return $row->class_id ? (is_string($row->class) ? $row->class : $row->class->class_name) : '';
            });
            $table->editColumn('student.student', function ($row) {
                return $row->student_id ? (is_string($row->student) ? $row->student : $row->student->admission_number) : '';
            });
            $table->editColumn('student.first_name', function ($row) {
                return $row->student_id ? (is_string($row->student) ? $row->student : $row->student->first_name) : '';
            });
            $table->editColumn('mean', function ($row) {
                return $row->mean ? $row->mean : "";
            });
            $table->editColumn('grade', function ($row) {
                return $row->grade ? $row->grade : "";
            });
            $table->editColumn('rank', function ($row) {
                return $row->rank ? $row->rank : "";
            });
            $table->rawColumns(['actions', 'placeholder', 'exam', 'class', 'student']);

            return $table->make(true);
        }

        return view('admin.results.index');
    }

    public function create()
    {
        abort_if(Gate::denies('result_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $exams = Exam::all()->pluck('exam_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $classes = Darasa::all()->pluck('class_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $students = Student::all()->pluck('admission_number', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.results.create', compact('exams', 'classes', 'students'));
    }

    public function store(StoreResultRequest $request)
    {
        $result = Result::create($request->all());

        return redirect()->route('admin.results.index');
    }

    public function edit(Result $result)
    {
        abort_if(Gate::denies('result_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $exams = Exam::all()->pluck('exam_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $classes = Darasa::all()->pluck('class_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $students = Student::all()->pluck('admission_number', 'id')->prepend(trans('global.pleaseSelect'), '');

        $result->load('exam', 'class', 'student', 'team');

        return view('admin.results.edit', compact('exams', 'classes', 'students', 'result'));
    }

    public function update(UpdateResultRequest $request, Result $result)
    {
        $result->update($request->all());

        return redirect()->route('admin.results.index');
    }

    public function show(Result $result)
    {
        abort_if(Gate::denies('result_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $result->load('exam', 'class', 'student', 'team');

        return view('admin.results.show', compact('result'));
    }

    public function destroy(Result $result)
    {
        abort_if(Gate::denies('result_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $result->delete();

        return back();
    }

    public function massDestroy(MassDestroyResultRequest $request)
    {
        Result::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
