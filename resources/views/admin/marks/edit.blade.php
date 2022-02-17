@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.mark.title_singular') }}
                </div>
                <div class="panel-body">

                    <form action="{{ route("admin.marks.update", [$mark->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group {{ $errors->has('adm_no_id') ? 'has-error' : '' }}">
                            <label for="adm_no">{{ trans('cruds.mark.fields.adm_no') }}</label>
                            <select name="adm_no_id" id="adm_no" class="form-control select2">
                                @foreach($adm_nos as $id => $adm_no)
                                    <option value="{{ $id }}" {{ (isset($mark) && $mark->adm_no ? $mark->adm_no->id : old('adm_no_id')) == $id ? 'selected' : '' }}>{{ $adm_no }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('adm_no_id'))
                                <p class="help-block">
                                    {{ $errors->first('adm_no_id') }}
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