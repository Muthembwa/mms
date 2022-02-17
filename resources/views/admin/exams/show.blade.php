@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.exam.title') }}
                </div>
                <div class="panel-body">

                    <div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.exam.fields.exam_code') }}
                                    </th>
                                    <td>
                                        {{ $exam->exam_code }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.exam.fields.exam_name') }}
                                    </th>
                                    <td>
                                        {{ $exam->exam_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Classes
                                    </th>
                                    <td>
                                        @foreach($exam->classes as $id => $classes)
                                            <span class="label label-info label-many">{{ $classes->class_name }}</span>
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.exam.fields.start_date') }}
                                    </th>
                                    <td>
                                        {{ $exam->start_date }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.exam.fields.end_date') }}
                                    </th>
                                    <td>
                                        {{ $exam->end_date }}
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