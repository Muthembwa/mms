@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.exam.title_singular') }}
                </div>
                <div class="panel-body">

                    <form action="{{ route("admin.exams.update", [$exam->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group {{ $errors->has('exam_code') ? 'has-error' : '' }}">
                            <label for="exam_code">{{ trans('cruds.exam.fields.exam_code') }}*</label>
                            <input type="text" id="exam_code" name="exam_code" class="form-control" value="{{ old('exam_code', isset($exam) ? $exam->exam_code : '') }}" required>
                            @if($errors->has('exam_code'))
                                <p class="help-block">
                                    {{ $errors->first('exam_code') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.exam.fields.exam_code_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('exam_name') ? 'has-error' : '' }}">
                            <label for="exam_name">{{ trans('cruds.exam.fields.exam_name') }}*</label>
                            <input type="text" id="exam_name" name="exam_name" class="form-control" value="{{ old('exam_name', isset($exam) ? $exam->exam_name : '') }}" required>
                            @if($errors->has('exam_name'))
                                <p class="help-block">
                                    {{ $errors->first('exam_name') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.exam.fields.exam_name_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('classes') ? 'has-error' : '' }}">
                            <label for="classes">{{ trans('cruds.exam.fields.classes') }}*
                                <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                                <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
                            <select name="classes[]" id="classes" class="form-control select2" multiple="multiple" required>
                                @foreach($classes as $id => $classes)
                                    <option value="{{ $id }}" {{ (in_array($id, old('classes', [])) || isset($exam) && $exam->classes->contains($id)) ? 'selected' : '' }}>{{ $classes }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('classes'))
                                <p class="help-block">
                                    {{ $errors->first('classes') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.exam.fields.classes_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('start_date') ? 'has-error' : '' }}">
                            <label for="start_date">{{ trans('cruds.exam.fields.start_date') }}*</label>
                            <input type="text" id="start_date" name="start_date" class="form-control date" value="{{ old('start_date', isset($exam) ? $exam->start_date : '') }}" required>
                            @if($errors->has('start_date'))
                                <p class="help-block">
                                    {{ $errors->first('start_date') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.exam.fields.start_date_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('end_date') ? 'has-error' : '' }}">
                            <label for="end_date">{{ trans('cruds.exam.fields.end_date') }}</label>
                            <input type="text" id="end_date" name="end_date" class="form-control date" value="{{ old('end_date', isset($exam) ? $exam->end_date : '') }}">
                            @if($errors->has('end_date'))
                                <p class="help-block">
                                    {{ $errors->first('end_date') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.exam.fields.end_date_helper') }}
                            </p>
                        </div>
                        <div>
                            <input class="btn btn-success" type="submit" value="{{ trans('global.save') }}">
                            <a style="margin-left:20px;" class="btn btn-danger" href="{{ url()->previous() }}">
                            {{ trans('global.cancel') }}
                        </a>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection