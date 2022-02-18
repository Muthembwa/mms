@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.student.title_singular') }}
                </div>
                <div class="panel-body">

                    <form action="{{ route("admin.students.update", [$student->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group {{ $errors->has('class_id') ? 'has-error' : '' }}">
                            <label for="class">{{ trans('cruds.student.fields.class') }}*</label>
                            <select name="class_id" id="class" class="form-control select2" required>
                                @foreach($classes as $id => $class)
                                    <option value="{{ $id }}" {{ (isset($student) && $student->class ? $student->class->id : old('class_id')) == $id ? 'selected' : '' }}>{{ $class }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('class_id'))
                                <p class="help-block">
                                    {{ $errors->first('class_id') }}
                                </p>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('stream_id') ? 'has-error' : '' }}">
                            <label for="stream">{{ trans('cruds.student.fields.stream') }}*</label>
                            <select name="stream_id" id="stream" class="form-control select2" required>
                                @foreach($streams as $id => $stream)
                                    <option value="{{ $id }}" {{ (isset($student) && $student->stream ? $student->stream->id : old('stream_id')) == $id ? 'selected' : '' }}>{{ $stream }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('stream_id'))
                                <p class="help-block">
                                    {{ $errors->first('stream_id') }}
                                </p>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('admission_number') ? 'has-error' : '' }}">
                            <label for="admission_number">{{ trans('cruds.student.fields.admission_number') }}*</label>
                            <input type="number" id="admission_number" name="admission_number" class="form-control" value="{{ old('admission_number', isset($student) ? $student->admission_number : '') }}" step="1" required>
                            @if($errors->has('admission_number'))
                                <p class="help-block">
                                    {{ $errors->first('admission_number') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.student.fields.admission_number_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
                            <label for="first_name">{{ trans('cruds.student.fields.first_name') }}*</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" value="{{ old('first_name', isset($student) ? $student->first_name : '') }}" required>
                            @if($errors->has('first_name'))
                                <p class="help-block">
                                    {{ $errors->first('first_name') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.student.fields.first_name_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                            <label for="last_name">{{ trans('cruds.student.fields.last_name') }}*</label>
                            <input type="text" id="last_name" name="last_name" class="form-control" value="{{ old('last_name', isset($student) ? $student->last_name : '') }}" required>
                            @if($errors->has('last_name'))
                                <p class="help-block">
                                    {{ $errors->first('last_name') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.student.fields.last_name_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('guardians_name') ? 'has-error' : '' }}">
                            <label for="guardians_name">{{ trans('cruds.student.fields.guardians_name') }}*</label>
                            <input type="text" id="guardians_name" name="guardians_name" class="form-control" value="{{ old('guardians_name', isset($student) ? $student->guardians_name : '') }}" required>
                            @if($errors->has('guardians_name'))
                                <p class="help-block">
                                    {{ $errors->first('guardians_name') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.student.fields.guardians_name_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('guardians_phone_no') ? 'has-error' : '' }}">
                            <label for="guardians_phone_no">{{ trans('cruds.student.fields.guardians_phone_no') }}</label>
                            <input type="text" id="guardians_phone_no" name="guardians_phone_no" class="form-control" value="{{ old('guardians_phone_no', isset($student) ? $student->guardians_phone_no : '') }}">
                            @if($errors->has('guardians_phone_no'))
                                <p class="help-block">
                                    {{ $errors->first('guardians_phone_no') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.student.fields.guardians_phone_no_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('guardians_email') ? 'has-error' : '' }}">
                            <label for="guardians_email">{{ trans('cruds.student.fields.guardians_email') }}*</label>
                            <input type="email" id="guardians_email" name="guardians_email" class="form-control" value="{{ old('guardians_email', isset($student) ? $student->guardians_email : '') }}" required>
                            @if($errors->has('guardians_email'))
                                <p class="help-block">
                                    {{ $errors->first('guardians_email') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.student.fields.guardians_email_helper') }}
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