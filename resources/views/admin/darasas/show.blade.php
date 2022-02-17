@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.darasa.title') }}
                </div>
                <div class="panel-body">

                    <div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.darasa.fields.class_name') }}
                                    </th>
                                    <td>
                                        {{ $darasa->class_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Streams
                                    </th>
                                    <td>
                                        @foreach($darasa->streams as $id => $streams)
                                            <span class="label label-info label-many">{{ $streams->class_name }}</span>
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