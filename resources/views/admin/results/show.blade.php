@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.result.title') }}
                </div>
                <div class="panel-body">

                    <div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.result.fields.exam') }}
                                    </th>
                                    <td>
                                        {{ $result->exam->exam_name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.result.fields.class') }}
                                    </th>
                                    <td>
                                        {{ $result->class->class_name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.result.fields.student') }}
                                    </th>
                                    <td>
                                        {{ $result->student->admission_number ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.result.fields.mean') }}
                                    </th>
                                    <td>
                                        {{ $result->mean }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.result.fields.grade') }}
                                    </th>
                                    <td>
                                        {{ $result->grade }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.result.fields.rank') }}
                                    </th>
                                    <td>
                                        {{ $result->rank }}
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