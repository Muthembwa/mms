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
                        <div class="form-group {{ $errors->has('mathematics') ? 'has-error' : '' }}">
                            <label for="mathematics">{{ trans('cruds.student.fields.mathematics') }}*</label>
                            <input type="number" id="mathematics" name="mathematics" class="form-control" value="{{ old('mathematics', isset($student) ? $student->mathematics : '') }}" step="0.1" required>
                            @if($errors->has('mathematics'))
                                <p class="help-block">
                                    {{ $errors->first('mathematics') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.student.fields.mathematics_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('english') ? 'has-error' : '' }}">
                            <label for="english">{{ trans('cruds.student.fields.english') }}*</label>
                            <input type="number" id="english" name="english" class="form-control" value="{{ old('english', isset($student) ? $student->english : '') }}" step="0.01" required>
                            @if($errors->has('english'))
                                <p class="help-block">
                                    {{ $errors->first('english') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.student.fields.english_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('kiswahili') ? 'has-error' : '' }}">
                            <label for="kiswahili">{{ trans('cruds.student.fields.kiswahili') }}*</label>
                            <input type="number" id="kiswahili" name="kiswahili" class="form-control" value="{{ old('kiswahili', isset($student) ? $student->kiswahili : '') }}" step="0.01" required>
                            @if($errors->has('kiswahili'))
                                <p class="help-block">
                                    {{ $errors->first('kiswahili') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.student.fields.kiswahili_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('chemestry') ? 'has-error' : '' }}">
                            <label for="chemestry">{{ trans('cruds.student.fields.chemestry') }}</label>
                            <input type="number" id="chemestry" name="chemestry" class="form-control" value="{{ old('chemestry', isset($student) ? $student->chemestry : '') }}" step="0.01">
                            @if($errors->has('chemestry'))
                                <p class="help-block">
                                    {{ $errors->first('chemestry') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.student.fields.chemestry_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('biology') ? 'has-error' : '' }}">
                            <label for="biology">{{ trans('cruds.student.fields.biology') }}</label>
                            <input type="number" id="biology" name="biology" class="form-control" value="{{ old('biology', isset($student) ? $student->biology : '') }}" step="0.01">
                            @if($errors->has('biology'))
                                <p class="help-block">
                                    {{ $errors->first('biology') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.student.fields.biology_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('physics') ? 'has-error' : '' }}">
                            <label for="physics">{{ trans('cruds.student.fields.physics') }}</label>
                            <input type="number" id="physics" name="physics" class="form-control" value="{{ old('physics', isset($student) ? $student->physics : '') }}" step="0.01">
                            @if($errors->has('physics'))
                                <p class="help-block">
                                    {{ $errors->first('physics') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.student.fields.physics_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('history_and_government') ? 'has-error' : '' }}">
                            <label for="history_and_government">{{ trans('cruds.student.fields.history_and_government') }}</label>
                            <input type="number" id="history_and_government" name="history_and_government" class="form-control" value="{{ old('history_and_government', isset($student) ? $student->history_and_government : '') }}" step="0.01">
                            @if($errors->has('history_and_government'))
                                <p class="help-block">
                                    {{ $errors->first('history_and_government') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.student.fields.history_and_government_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('geography') ? 'has-error' : '' }}">
                            <label for="geography">{{ trans('cruds.student.fields.geography') }}</label>
                            <input type="number" id="geography" name="geography" class="form-control" value="{{ old('geography', isset($student) ? $student->geography : '') }}" step="0.01">
                            @if($errors->has('geography'))
                                <p class="help-block">
                                    {{ $errors->first('geography') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.student.fields.geography_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('religious_education') ? 'has-error' : '' }}">
                            <label for="religious_education">{{ trans('cruds.student.fields.religious_education') }}</label>
                            <input type="number" id="religious_education" name="religious_education" class="form-control" value="{{ old('religious_education', isset($student) ? $student->religious_education : '') }}" step="0.01">
                            @if($errors->has('religious_education'))
                                <p class="help-block">
                                    {{ $errors->first('religious_education') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.student.fields.religious_education_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('agriculture') ? 'has-error' : '' }}">
                            <label for="agriculture">{{ trans('cruds.student.fields.agriculture') }}</label>
                            <input type="number" id="agriculture" name="agriculture" class="form-control" value="{{ old('agriculture', isset($student) ? $student->agriculture : '') }}" step="0.01">
                            @if($errors->has('agriculture'))
                                <p class="help-block">
                                    {{ $errors->first('agriculture') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.student.fields.agriculture_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('business_studies') ? 'has-error' : '' }}">
                            <label for="business_studies">{{ trans('cruds.student.fields.business_studies') }}</label>
                            <input type="number" id="business_studies" name="business_studies" class="form-control" value="{{ old('business_studies', isset($student) ? $student->business_studies : '') }}" step="0.01">
                            @if($errors->has('business_studies'))
                                <p class="help-block">
                                    {{ $errors->first('business_studies') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.student.fields.business_studies_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('computer_science') ? 'has-error' : '' }}">
                            <label for="computer_science">{{ trans('cruds.student.fields.computer_science') }}</label>
                            <input type="number" id="computer_science" name="computer_science" class="form-control" value="{{ old('computer_science', isset($student) ? $student->computer_science : '') }}" step="0.01">
                            @if($errors->has('computer_science'))
                                <p class="help-block">
                                    {{ $errors->first('computer_science') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.student.fields.computer_science_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('art_and_design') ? 'has-error' : '' }}">
                            <label for="art_and_design">{{ trans('cruds.student.fields.art_and_design') }}</label>
                            <input type="number" id="art_and_design" name="art_and_design" class="form-control" value="{{ old('art_and_design', isset($student) ? $student->art_and_design : '') }}" step="0.01">
                            @if($errors->has('art_and_design'))
                                <p class="help-block">
                                    {{ $errors->first('art_and_design') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.student.fields.art_and_design_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('home_science') ? 'has-error' : '' }}">
                            <label for="home_science">{{ trans('cruds.student.fields.home_science') }}</label>
                            <input type="number" id="home_science" name="home_science" class="form-control" value="{{ old('home_science', isset($student) ? $student->home_science : '') }}" step="0.01">
                            @if($errors->has('home_science'))
                                <p class="help-block">
                                    {{ $errors->first('home_science') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.student.fields.home_science_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('aviation') ? 'has-error' : '' }}">
                            <label for="aviation">{{ trans('cruds.student.fields.aviation') }}</label>
                            <input type="number" id="aviation" name="aviation" class="form-control" value="{{ old('aviation', isset($student) ? $student->aviation : '') }}" step="0.01">
                            @if($errors->has('aviation'))
                                <p class="help-block">
                                    {{ $errors->first('aviation') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.student.fields.aviation_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('french') ? 'has-error' : '' }}">
                            <label for="french">{{ trans('cruds.student.fields.french') }}</label>
                            <input type="number" id="french" name="french" class="form-control" value="{{ old('french', isset($student) ? $student->french : '') }}" step="0.01">
                            @if($errors->has('french'))
                                <p class="help-block">
                                    {{ $errors->first('french') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.student.fields.french_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('german') ? 'has-error' : '' }}">
                            <label for="german">{{ trans('cruds.student.fields.german') }}</label>
                            <input type="number" id="german" name="german" class="form-control" value="{{ old('german', isset($student) ? $student->german : '') }}" step="0.01">
                            @if($errors->has('german'))
                                <p class="help-block">
                                    {{ $errors->first('german') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.student.fields.german_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('arabic') ? 'has-error' : '' }}">
                            <label for="arabic">{{ trans('cruds.student.fields.arabic') }}</label>
                            <input type="number" id="arabic" name="arabic" class="form-control" value="{{ old('arabic', isset($student) ? $student->arabic : '') }}" step="0.01">
                            @if($errors->has('arabic'))
                                <p class="help-block">
                                    {{ $errors->first('arabic') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.student.fields.arabic_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('music') ? 'has-error' : '' }}">
                            <label for="music">{{ trans('cruds.student.fields.music') }}</label>
                            <input type="number" id="music" name="music" class="form-control" value="{{ old('music', isset($student) ? $student->music : '') }}" step="0.01">
                            @if($errors->has('music'))
                                <p class="help-block">
                                    {{ $errors->first('music') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.student.fields.music_helper') }}
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