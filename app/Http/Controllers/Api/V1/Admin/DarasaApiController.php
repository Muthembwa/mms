<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Darasa;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDarasaRequest;
use App\Http\Requests\UpdateDarasaRequest;
use App\Http\Resources\Admin\DarasaResource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DarasaApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('darasa_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new DarasaResource(Darasa::with(['streams', 'team'])->get());
    }

    public function store(StoreDarasaRequest $request)
    {
        $darasa = Darasa::create($request->all());
        $darasa->streams()->sync($request->input('streams', []));
        $darasa->team()->sync($request->input('team', []));

        return (new DarasaResource($darasa))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Darasa $darasa)
    {
        abort_if(Gate::denies('darasa_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new DarasaResource($darasa->load(['streams', 'team']));
    }

    public function update(UpdateDarasaRequest $request, Darasa $darasa)
    {
        $darasa->update($request->all());
        $darasa->streams()->sync($request->input('streams', []));
        $darasa->team()->sync($request->input('team', []));

        return (new DarasaResource($darasa))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Darasa $darasa)
    {
        abort_if(Gate::denies('darasa_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $darasa->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
