@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.schoolLevel.title_singular') }}
                </div>
                <div class="panel-body">

                    <form action="{{ route("admin.school-levels.update", [$schoolLevel->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group {{ $errors->has('stage_name') ? 'has-error' : '' }}">
                            <label for="stage_name">{{ trans('cruds.schoolLevel.fields.stage_name') }}*</label>
                            <input type="text" id="stage_name" name="stage_name" class="form-control" value="{{ old('stage_name', isset($schoolLevel) ? $schoolLevel->stage_name : '') }}" required>
                            @if($errors->has('stage_name'))
                                <p class="help-block">
                                    {{ $errors->first('stage_name') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.schoolLevel.fields.stage_name_helper') }}
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