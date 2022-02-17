@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.create') }} {{ trans('cruds.subject.title_singular') }}
                </div>
                <div class="panel-body">

                    <form action="{{ route("admin.subjects.store") }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group {{ $errors->has('subject_name') ? 'has-error' : '' }}">
                            <label for="subject_name">{{ trans('cruds.subject.fields.subject_name') }}*</label>
                            <input type="text" id="subject_name" name="subject_name" class="form-control" value="{{ old('subject_name', isset($subject) ? $subject->subject_name : '') }}" required>
                            @if($errors->has('subject_name'))
                                <p class="help-block">
                                    {{ $errors->first('subject_name') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.subject.fields.subject_name_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('subject_teachers') ? 'has-error' : '' }}">
                            <label for="subject_teachers">{{ trans('cruds.subject.fields.subject_teachers') }}*
                                <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                                <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
                            <select name="subject_teachers[]" id="subject_teachers" class="form-control select2" multiple="multiple" required>
                                @foreach($subject_teachers as $id => $subject_teachers)
                                    <option value="{{ $id }}" {{ (in_array($id, old('subject_teachers', [])) || isset($subject) && $subject->subject_teachers->contains($id)) ? 'selected' : '' }}>{{ $subject_teachers }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('subject_teachers'))
                                <p class="help-block">
                                    {{ $errors->first('subject_teachers') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.subject.fields.subject_teachers_helper') }}
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