@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.user.title_singular') }}
                </div>
                <div class="panel-body">

                    <form action="{{ route("admin.users.update", [$user->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group {{ $errors->has('school_name_id') ? 'has-error' : '' }}">
                            <label for="school_name">{{ trans('cruds.user.fields.school_name') }}*</label>
                            <select name="school_name_id" id="school_name" class="form-control select2" required>
                                @foreach($school_names as $id => $school_name)
                                    <option value="{{ $id }}" {{ (isset($user) && $user->school_name ? $user->school_name->id : old('school_name_id')) == $id ? 'selected' : '' }}>{{ $school_name }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('school_name_id'))
                                <p class="help-block">
                                    {{ $errors->first('school_name_id') }}
                                </p>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('surname') ? 'has-error' : '' }}">
                            <label for="surname">{{ trans('cruds.user.fields.surname') }}*</label>
                            <input type="text" id="surname" name="surname" class="form-control" value="{{ old('surname', isset($user) ? $user->surname : '') }}" required>
                            @if($errors->has('surname'))
                                <p class="help-block">
                                    {{ $errors->first('surname') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.user.fields.surname_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label for="name">{{ trans('cruds.user.fields.name') }}*</label>
                            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($user) ? $user->name : '') }}" required>
                            @if($errors->has('name'))
                                <p class="help-block">
                                    {{ $errors->first('name') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.user.fields.name_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('roles') ? 'has-error' : '' }}">
                            <label for="roles">{{ trans('cruds.user.fields.roles') }}*
                                <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                                <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
                            <select name="roles[]" id="roles" class="form-control select2" multiple="multiple" required>
                                @foreach($roles as $id => $roles)
                                    <option value="{{ $id }}" {{ (in_array($id, old('roles', [])) || isset($user) && $user->roles->contains($id)) ? 'selected' : '' }}>{{ $roles }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('roles'))
                                <p class="help-block">
                                    {{ $errors->first('roles') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.user.fields.roles_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label for="email">{{ trans('cruds.user.fields.email') }}*</label>
                            <input type="email" id="email" name="email" class="form-control" value="{{ old('email', isset($user) ? $user->email : '') }}" required>
                            @if($errors->has('email'))
                                <p class="help-block">
                                    {{ $errors->first('email') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.user.fields.email_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('approved') ? 'has-error' : '' }}">
                            <label for="approved">{{ trans('cruds.user.fields.approved') }}</label>
                            <input name="approved" type="hidden" value="0">
                            <input value="1" type="checkbox" id="approved" name="approved" {{ (isset($user) && $user->approved) || old('approved', 0) === 1 ? 'checked' : '' }}>
                            @if($errors->has('approved'))
                                <p class="help-block">
                                    {{ $errors->first('approved') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.user.fields.approved_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                            <label for="password">{{ trans('cruds.user.fields.password') }}</label>
                            <input type="password" id="password" name="password" class="form-control" required>
                            @if($errors->has('password'))
                                <p class="help-block">
                                    {{ $errors->first('password') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.user.fields.password_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('team_id') ? 'has-error' : '' }}">
                            <label for="team">{{ trans('cruds.user.fields.team') }}</label>
                            <select name="team_id" id="team" class="form-control select2">
                                @foreach($teams as $id => $team)
                                    <option value="{{ $id }}" {{ (isset($user) && $user->team ? $user->team->id : old('team_id')) == $id ? 'selected' : '' }}>{{ $team }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('team_id'))
                                <p class="help-block">
                                    {{ $errors->first('team_id') }}
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