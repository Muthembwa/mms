<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStreamRequest;
use App\Http\Requests\UpdateStreamRequest;
use App\Http\Resources\Admin\StreamResource;
use App\Stream;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StreamApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('stream_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new StreamResource(Stream::with(['team'])->get());
    }

    public function store(StoreStreamRequest $request)
    {
        $stream = Stream::create($request->all());
        $stream->team()->sync($request->input('team', []));

        return (new StreamResource($stream))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Stream $stream)
    {
        abort_if(Gate::denies('stream_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new StreamResource($stream->load(['team']));
    }

    public function update(UpdateStreamRequest $request, Stream $stream)
    {
        $stream->update($request->all());
        $stream->team()->sync($request->input('team', []));

        return (new StreamResource($stream))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Stream $stream)
    {
        abort_if(Gate::denies('stream_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $stream->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
