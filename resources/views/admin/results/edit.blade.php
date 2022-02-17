@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.result.title_singular') }}
                </div>
                <div class="panel-body">

                    <form action="{{ route("admin.results.update", [$result->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group {{ $errors->has('exam_id') ? 'has-error' : '' }}">
                            <label for="exam">{{ trans('cruds.result.fields.exam') }}*</label>
                            <select name="exam_id" id="exam" class="form-control select2" required>
                                @foreach($exams as $id => $exam)
                                    <option value="{{ $id }}" {{ (isset($result) && $result->exam ? $result->exam->id : old('exam_id')) == $id ? 'selected' : '' }}>{{ $exam }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('exam_id'))
                                <p class="help-block">
                                    {{ $errors->first('exam_id') }}
                                </p>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('class_id') ? 'has-error' : '' }}">
                            <label for="class">{{ trans('cruds.result.fields.class') }}</label>
                            <select name="class_id" id="class" class="form-control select2">
                                @foreach($classes as $id => $class)
                                    <option value="{{ $id }}" {{ (isset($result) && $result->class ? $result->class->id : old('class_id')) == $id ? 'selected' : '' }}>{{ $class }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('class_id'))
                                <p class="help-block">
                                    {{ $errors->first('class_id') }}
                                </p>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('student_id') ? 'has-error' : '' }}">
                            <label for="student">{{ trans('cruds.result.fields.student') }}*</label>
                            <select name="student_id" id="student" class="form-control select2" required>
                                @foreach($students as $id => $student)
                                    <option value="{{ $id }}" {{ (isset($result) && $result->student ? $result->student->id : old('student_id')) == $id ? 'selected' : '' }}>{{ $student }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('student_id'))
                                <p class="help-block">
                                    {{ $errors->first('student_id') }}
                                </p>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('mean') ? 'has-error' : '' }}">
                            <label for="mean">{{ trans('cruds.result.fields.mean') }}*</label>
                            <input type="number" id="mean" name="mean" class="form-control" value="{{ old('mean', isset($result) ? $result->mean : '') }}" step="1" required>
                            @if($errors->has('mean'))
                                <p class="help-block">
                                    {{ $errors->first('mean') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.result.fields.mean_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('grade') ? 'has-error' : '' }}">
                            <label for="grade">{{ trans('cruds.result.fields.grade') }}</label>
                            <input type="text" id="grade" name="grade" class="form-control" value="{{ old('grade', isset($result) ? $result->grade : '') }}">
                            @if($errors->has('grade'))
                                <p class="help-block">
                                    {{ $errors->first('grade') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.result.fields.grade_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('rank') ? 'has-error' : '' }}">
                            <label for="rank">{{ trans('cruds.result.fields.rank') }}</label>
                            <input type="number" id="rank" name="rank" class="form-control" value="{{ old('rank', isset($result) ? $result->rank : '') }}" step="1">
                            @if($errors->has('rank'))
                                <p class="help-block">
                                    {{ $errors->first('rank') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.result.fields.rank_helper') }}
                            </p>
                        </div>
                        <div>
                            <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection