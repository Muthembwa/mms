@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.create') }} {{ trans('cruds.school.title_singular') }}
                </div>
                <div class="panel-body">

                    <form action="{{ route("admin.schools.store") }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group {{ $errors->has('school_name') ? 'has-error' : '' }}">
                            <label for="school_name">{{ trans('cruds.school.fields.school_name') }}*</label>
                            <input type="text" id="school_name" name="school_name" class="form-control" value="{{ old('school_name', isset($school) ? $school->school_name : '0') }}" required>
                            @if($errors->has('school_name'))
                                <p class="help-block">
                                    {{ $errors->first('school_name') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.school.fields.school_name_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('sub_county') ? 'has-error' : '' }}">
                            <label for="sub_county">{{ trans('cruds.school.fields.sub_county') }}*</label>
                            <input type="text" id="sub_county" name="sub_county" class="form-control" value="{{ old('sub_county', isset($school) ? $school->sub_county : '0') }}" required>
                            @if($errors->has('sub_county'))
                                <p class="help-block">
                                    {{ $errors->first('sub_county') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.school.fields.sub_county_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('level_id') ? 'has-error' : '' }}">
                            <label for="level">{{ trans('cruds.school.fields.level') }}*</label>
                            <select name="level_id" id="level" class="form-control select2" required>
                                @foreach($levels as $id => $level)
                                    <option value="{{ $id }}" {{ (isset($school) && $school->level ? $school->level->id : old('level_id')) == $id ? 'selected' : '' }}>{{ $level }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('level_id'))
                                <p class="help-block">
                                    {{ $errors->first('level_id') }}
                                </p>
                            @endif
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