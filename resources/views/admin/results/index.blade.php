@extends('layouts.admin')
@section('content')
<div class="content">
    @can('result_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route("admin.results.create") }}">
                    {{ trans('global.add') }} {{ trans('cruds.result.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('cruds.result.title_singular') }} {{ trans('global.list') }}
                </div>
                <div class="panel-body">

                    <table class=" table table-bordered table-striped table-hover ajaxTable datatable">
                        <thead>
                            <tr>
                                <th width="10">

                                </th>
                                <th>
                                    {{ trans('cruds.result.fields.exam') }}
                                </th>
                                <th>
                                    {{ trans('cruds.result.fields.class') }}
                                </th>
                                <th>
                                    {{ trans('cruds.result.fields.student') }}
                                </th>
                                <th>
                                    {{ trans('cruds.student.fields.first_name') }}
                                </th>
                                <th>
                                    {{ trans('cruds.result.fields.mean') }}
                                </th>
                                <th>
                                    {{ trans('cruds.result.fields.grade') }}
                                </th>
                                <th>
                                    {{ trans('cruds.result.fields.rank') }}
                                </th>
                                <th>
                                    &nbsp;
                                </th>
                            </tr>
                        </thead>
                    </table>

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
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.results.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
          return entry.id
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
@can('result_delete')
  dtButtons.push(deleteButton)
@endcan

  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('admin.results.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
      { data: 'exam.exam', name: 'exam.exam_name' },
{ data: 'darasa.class', name: 'class.class_name' },
{ data: 'student.student', name: 'student.admission_number' },
{ data: 'student.first_name', name: 'student.first_name' },
{ data: 'mean', name: 'mean' },
{ data: 'grade', name: 'grade' },
{ data: 'rank', name: 'rank' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };

  $('.datatable').DataTable(dtOverrideGlobals);

});

</script>
@endsection