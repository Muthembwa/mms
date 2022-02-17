@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.student.title') }}
                </div>
                <div class="panel-body">

                    <div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.student.fields.class') }}
                                    </th>
                                    <td>
                                        {{ $student->class->class_name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.student.fields.stream') }}
                                    </th>
                                    <td>
                                        {{ $student->stream->class_name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.student.fields.admission_number') }}
                                    </th>
                                    <td>
                                        {{ $student->admission_number }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.student.fields.first_name') }}
                                    </th>
                                    <td>
                                        {{ $student->first_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.student.fields.last_name') }}
                                    </th>
                                    <td>
                                        {{ $student->last_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.student.fields.guardians_name') }}
                                    </th>
                                    <td>
                                        {{ $student->guardians_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.student.fields.guardians_phone_no') }}
                                    </th>
                                    <td>
                                        {{ $student->guardians_phone_no }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.student.fields.guardians_email') }}
                                    </th>
                                    <td>
                                        {{ $student->guardians_email }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.student.fields.mathematics') }}
                                    </th>
                                    <td>
                                        {{ $student->mathematics }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.student.fields.english') }}
                                    </th>
                                    <td>
                                        {{ $student->english }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.student.fields.kiswahili') }}
                                    </th>
                                    <td>
                                        {{ $student->kiswahili }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.student.fields.chemestry') }}
                                    </th>
                                    <td>
                                        {{ $student->chemestry }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.student.fields.biology') }}
                                    </th>
                                    <td>
                                        {{ $student->biology }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.student.fields.physics') }}
                                    </th>
                                    <td>
                                        {{ $student->physics }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.student.fields.history_and_government') }}
                                    </th>
                                    <td>
                                        {{ $student->history_and_government }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.student.fields.geography') }}
                                    </th>
                                    <td>
                                        {{ $student->geography }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.student.fields.religious_education') }}
                                    </th>
                                    <td>
                                        {{ $student->religious_education }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.student.fields.agriculture') }}
                                    </th>
                                    <td>
                                        {{ $student->agriculture }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.student.fields.business_studies') }}
                                    </th>
                                    <td>
                                        {{ $student->business_studies }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.student.fields.computer_science') }}
                                    </th>
                                    <td>
                                        {{ $student->computer_science }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.student.fields.art_and_design') }}
                                    </th>
                                    <td>
                                        {{ $student->art_and_design }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.student.fields.home_science') }}
                                    </th>
                                    <td>
                                        {{ $student->home_science }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.student.fields.aviation') }}
                                    </th>
                                    <td>
                                        {{ $student->aviation }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.student.fields.french') }}
                                    </th>
                                    <td>
                                        {{ $student->french }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.student.fields.german') }}
                                    </th>
                                    <td>
                                        {{ $student->german }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.student.fields.arabic') }}
                                    </th>
                                    <td>
                                        {{ $student->arabic }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.student.fields.music') }}
                                    </th>
                                    <td>
                                        {{ $student->music }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                            {{ trans('global.back_to_list') }}
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection