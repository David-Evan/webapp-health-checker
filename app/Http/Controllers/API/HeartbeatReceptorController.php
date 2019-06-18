<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\ApiController;
use App\Models\HeartbeatReceptor;
use App\Http\Requests\API\HeartbeatReceptor as HeartbeatReceptorRequest;
use App\Http\Resources\HeartbeatReceptor as HeartbeatReceptorResource;

class HeartbeatReceptorController extends ApiController
{
    /**
     * @GET : api/heartbeats-receptor/
     * Display a listing of the resource.
     */
    public function index()
    {
        return HeartbeatReceptorResource::collection(HeartbeatReceptor::all());
    }

    /**
     * @POST : api/heartbeats-receptor
     * Store a newly created resource in storage.
     *
     * @param HeartbeatReceptorRequest $request
     * @return HeartbeatReceptorResource - New stored Heartbeat Receptor
     */
    public function store(HeartbeatReceptorRequest $request)
    {
        return new HeartbeatReceptorResource(HeartbeatReceptor::create($request->all()));
    }

    /**
     * @GET : api/heartbeats-receptor/{heartbeat_receptor}
     * Display the specified resource.
     *
     * @param HeartbeatReceptor $heartbeatReceptor
     * @return HeartbeatReceptorResource - Specified Heartbeat Receptor
     */
    public function show(HeartbeatReceptor $heartbeatReceptor)
    {
        return new HeartbeatReceptorResource($heartbeatReceptor);
    }

    /**
     * @PUT : api/heartbeats-receptor/{heartbeat_receptor}
     * Update the specified resource in storage.
     *
     * @param HeartbeatReceptorRequest $request
     * @param HeartbeatReceptor $heartbeatReceptor
     * @return HeartbeatReceptorResource - Updated Heartbeat Receptor
     */
    public function update(HeartbeatReceptorRequest $request, HeartbeatReceptor $heartbeatReceptor)
    {
        $heartbeatReceptor->update($request->all());
        return new HeartbeatReceptorResource($heartbeatReceptor);
    }

    /**
     * @DELETE : api/heartbeats-receptor/{heartbeat_receptor}
     * Remove the specified resource from storage.
     *
     * @param HeartbeatReceptor $heartbeatReceptor
     * @return HeartbeatReceptorResource - Deleted Heartbeat Receptor
     *
     * @throws \Exception
     */
    public function destroy(HeartbeatReceptor $heartbeatReceptor)
    {
        $heartbeatReceptor->delete();
        return new HeartbeatReceptorResource($heartbeatReceptor);
    }

    /**
     * @POST : api/heartbeats-receptor/{heartbeat_receptor}/hit
     * Create a new Heartbeat when Receptor is "hitted".
     *
     * @param HeartbeatReceptor $heartbeatReceptor
     * @return HeartbeatReceptorResource - Heartbeat Receptor with his last heartbeats
     */
    public function hit(HeartbeatReceptor $heartbeatReceptor)
    {
        $heartbeatReceptor->heartbeats()->create();
        return new HeartbeatReceptorResource($heartbeatReceptor);
    }
}
