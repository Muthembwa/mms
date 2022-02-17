@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.stream.title_singular') }}
                </div>
                <div class="panel-body">

                    <form action="{{ route("admin.streams.update", [$stream->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group {{ $errors->has('class_name') ? 'has-error' : '' }}">
                            <label for="class_name">{{ trans('cruds.stream.fields.class_name') }}*</label>
                            <input type="text" id="class_name" name="class_name" class="form-control" value="{{ old('class_name', isset($stream) ? $stream->class_name : '') }}" required>
                            @if($errors->has('class_name'))
                                <p class="help-block">
                                    {{ $errors->first('class_name') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.stream.fields.class_name_helper') }}
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