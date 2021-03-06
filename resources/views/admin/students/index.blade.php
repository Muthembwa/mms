@extends('layouts.admin')
@section('content')
<div class="content">
    @can('student_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route("admin.students.create") }}">
                    {{ trans('global.add') }} {{ trans('cruds.student.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('cruds.student.title_singular') }} {{ trans('global.list') }}
                </div>
                <div class="panel-body">

                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable">
                            <thead>
                                <tr>
                                    <th width="10">

                                    </th>
                                    <th>
                                        {{ trans('cruds.student.fields.class') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.student.fields.stream') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.student.fields.admission_number') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.student.fields.first_name') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.student.fields.last_name') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.student.fields.guardians_name') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.student.fields.guardians_phone_no') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.student.fields.guardians_email') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.student.fields.mathematics') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.student.fields.english') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.student.fields.kiswahili') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.student.fields.chemestry') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.student.fields.biology') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.student.fields.physics') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.student.fields.history_and_government') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.student.fields.geography') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.student.fields.religious_education') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.student.fields.agriculture') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.student.fields.business_studies') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.student.fields.computer_science') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.student.fields.art_and_design') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.student.fields.home_science') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.student.fields.aviation') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.student.fields.french') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.student.fields.german') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.student.fields.arabic') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.student.fields.music') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $key => $student)
                                    <tr data-entry-id="{{ $student->id }}">
                                        <td>

                                        </td>
                                        <td>
                                            {{ $student->class->class_name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $student->stream->class_name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $student->admission_number ?? '' }}
                                        </td>
                                        <td>
                                            {{ $student->first_name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $student->last_name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $student->guardians_name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $student->guardians_phone_no ?? '' }}
                                        </td>
                                        <td>
                                            {{ $student->guardians_email ?? '' }}
                                        </td>
                                        <td>
                                            {{ $student->mathematics ?? '' }}
                                        </td>
                                        <td>
                                            {{ $student->english ?? '' }}
                                        </td>
                                        <td>
                                            {{ $student->kiswahili ?? '' }}
                                        </td>
                                        <td>
                                            {{ $student->chemestry ?? '' }}
                                        </td>
                                        <td>
                                            {{ $student->biology ?? '' }}
                                        </td>
                                        <td>
                                            {{ $student->physics ?? '' }}
                                        </td>
                                        <td>
                                            {{ $student->history_and_government ?? '' }}
                                        </td>
                                        <td>
                                            {{ $student->geography ?? '' }}
                                        </td>
                                        <td>
                                            {{ $student->religious_education ?? '' }}
                                        </td>
                                        <td>
                                            {{ $student->agriculture ?? '' }}
                                        </td>
                                        <td>
                                            {{ $student->business_studies ?? '' }}
                                        </td>
                                        <td>
                                            {{ $student->computer_science ?? '' }}
                                        </td>
                                        <td>
                                            {{ $student->art_and_design ?? '' }}
                                        </td>
                                        <td>
                                            {{ $student->home_science ?? '' }}
                                        </td>
                                        <td>
                                            {{ $student->aviation ?? '' }}
                                        </td>
                                        <td>
                                            {{ $student->french ?? '' }}
                                        </td>
                                        <td>
                                            {{ $student->german ?? '' }}
                                        </td>
                                        <td>
                                            {{ $student->arabic ?? '' }}
                                        </td>
                                        <td>
                                            {{ $student->music ?? '' }}
                                        </td>
                                        <td>
                                            @can('student_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('admin.students.show', $student->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('student_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('admin.students.edit', $student->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('student_delete')
                                                <form action="{{ route('admin.students.destroy', $student->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('student_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.students.massDestroy') }}",
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
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 3, 'desc' ]],
    pageLength: 50,
  });
  $('.datatable:not(.ajaxTable)').DataTable({ buttons: dtButtons })
})

</script>
@endsection