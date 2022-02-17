@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.create') }} {{ trans('cruds.darasa.title_singular') }}
                </div>
                <div class="panel-body">

                    <form action="{{ route("admin.darasas.store") }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group {{ $errors->has('class_name') ? 'has-error' : '' }}">
                            <label for="class_name">{{ trans('cruds.darasa.fields.class_name') }}*</label>
                            <input type="text" id="class_name" name="class_name" class="form-control" value="{{ old('class_name', isset($darasa) ? $darasa->class_name : '') }}" required>
                            @if($errors->has('class_name'))
                                <p class="help-block">
                                    {{ $errors->first('class_name') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.darasa.fields.class_name_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('streams') ? 'has-error' : '' }}">
                            <label for="streams">{{ trans('cruds.darasa.fields.streams') }}*
                                <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                                <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
                            <select name="streams[]" id="streams" class="form-control select2" multiple="multiple" required>
                                @foreach($streams as $id => $streams)
                                    <option value="{{ $id }}" {{ (in_array($id, old('streams', [])) || isset($darasa) && $darasa->streams->contains($id)) ? 'selected' : '' }}>{{ $streams }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('streams'))
                                <p class="help-block">
                                    {{ $errors->first('streams') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.darasa.fields.streams_helper') }}
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