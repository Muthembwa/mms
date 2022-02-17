<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyStreamRequest;
use App\Http\Requests\StoreStreamRequest;
use App\Http\Requests\UpdateStreamRequest;
use App\Stream;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class StreamController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('stream_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $streams = Stream::all();

        return view('admin.streams.index', compact('streams'));
    }

    public function create()
    {
        abort_if(Gate::denies('stream_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.streams.create');
    }

    public function store(StoreStreamRequest $request)
    {
        $stream = Stream::create($request->all());

        return redirect()->route('admin.streams.index');
    }

    public function edit(Stream $stream)
    {
        abort_if(Gate::denies('stream_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $stream->load('team');

        return view('admin.streams.edit', compact('stream'));
    }

    public function update(UpdateStreamRequest $request, Stream $stream)
    {
        $stream->update($request->all());

        return redirect()->route('admin.streams.index');
    }

    public function show(Stream $stream)
    {
        abort_if(Gate::denies('stream_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $stream->load('team');

        return view('admin.streams.show', compact('stream'));
    }

    public function destroy(Stream $stream)
    {
        abort_if(Gate::denies('stream_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $stream->delete();

        return back();
    }

    public function massDestroy(MassDestroyStreamRequest $request)
    {
        Stream::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
