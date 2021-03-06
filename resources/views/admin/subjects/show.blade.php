@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.subject.title') }}
                </div>
                <div class="panel-body">

                    <div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.subject.fields.subject_name') }}
                                    </th>
                                    <td>
                                        {{ $subject->subject_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Subject Teachers
                                    </th>
                                    <td>
                                        @foreach($subject->subject_teachers as $id => $subject_teachers)
                                            <span class="label label-info label-many">{{ $subject_teachers->surname }}</span>
                                        @endforeach
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