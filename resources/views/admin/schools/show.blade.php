@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.school.title') }}
                </div>
                <div class="panel-body">

                    <div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.school.fields.school_name') }}
                                    </th>
                                    <td>
                                        {{ $school->school_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.school.fields.sub_county') }}
                                    </th>
                                    <td>
                                        {{ $school->sub_county }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.school.fields.level') }}
                                    </th>
                                    <td>
                                        {{ $school->level->stage_name ?? '' }}
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