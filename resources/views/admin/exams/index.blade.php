@extends('layouts.admin')
@section('content')
<div class="content">
    @can('exam_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route("admin.exams.create") }}">
                    {{ trans('global.add') }} {{ trans('cruds.exam.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('cruds.exam.title_singular') }} {{ trans('global.list') }}
                </div>
                <div class="panel-body">

                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable">
                            <thead>
                                <tr>
                                    <th width="10">

                                    </th>
                                    <th>
                                        {{ trans('cruds.exam.fields.exam_code') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.exam.fields.exam_name') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.exam.fields.classes') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.exam.fields.start_date') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.exam.fields.end_date') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($exams as $key => $exam)
                                    <tr data-entry-id="{{ $exam->id }}">
                                        <td>

                                        </td>
                                        <td>
                                            {{ $exam->exam_code ?? '' }}
                                        </td>
                                        <td>
                                            {{ $exam->exam_name ?? '' }}
                                        </td>
                                        <td>
                                            @foreach($exam->classes as $key => $item)
                                                <span class="label label-info label-many">{{ $item->class_name }}</span>
                                            @endforeach
                                        </td>
                                        <td>
                                            {{ $exam->start_date ?? '' }}
                                        </td>
                                        <td>
                                            {{ $exam->end_date ?? '' }}
                                        </td>
                                        <td>
                                            @can('exam_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('admin.exams.show', $exam->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan
                                            @can('exam_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('admin.exams.edit', $exam->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan
                                            @can('exam_delete')
                                                <form action="{{ route('admin.exams.destroy', $exam->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                                </form>
                                            @endcan
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.exams.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
@can('exam_delete')
  dtButtons.push(deleteButton)
@endcan

  $('.datatable:not(.ajaxTable)').DataTable({ buttons: dtButtons })
})

</script>
@endsection