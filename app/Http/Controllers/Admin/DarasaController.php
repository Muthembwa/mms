<?php

namespace App\Http\Controllers\Admin;

use App\Darasa;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyDarasaRequest;
use App\Http\Requests\StoreDarasaRequest;
use App\Http\Requests\UpdateDarasaRequest;
use App\Stream;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class DarasaController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('darasa_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $darasas = Darasa::all();

        return view('admin.darasas.index', compact('darasas'));
    }

    public function create()
    {
        abort_if(Gate::denies('darasa_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $streams = Stream::all()->pluck('class_name', 'id');

        return view('admin.darasas.create', compact('streams'));
    }

    public function store(StoreDarasaRequest $request)
    {
        $darasa = Darasa::create($request->all());
        $darasa->streams()->sync($request->input('streams', []));

        return redirect()->route('admin.darasas.index');
    }

    public function edit(Darasa $darasa)
    {
        abort_if(Gate::denies('darasa_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $streams = Stream::all()->pluck('class_name', 'id');

        $darasa->load('streams', 'team');

        return view('admin.darasas.edit', compact('streams', 'darasa'));
    }

    public function update(UpdateDarasaRequest $request, Darasa $darasa)
    {
        $darasa->update($request->all());
        $darasa->streams()->sync($request->input('streams', []));

        return redirect()->route('admin.darasas.index');
    }

    public function show(Darasa $darasa)
    {
        abort_if(Gate::denies('darasa_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $darasa->load('streams', 'team');

        return view('admin.darasas.show', compact('darasa'));
    }

    public function destroy(Darasa $darasa)
    {
        abort_if(Gate::denies('darasa_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $darasa->delete();

        return back();
    }

    public function massDestroy(MassDestroyDarasaRequest $request)
    {
        Darasa::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
