<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\ApiController;
use App\Models\Heartbeat;
use App\Http\Resources\Heartbeat as HeartbeatResource;

class HeartbeatController extends ApiController
{
    /**
     * @GET : api/heartbeats/
     * Display a listing of the resource.
     */
    public function index()
    {
        return HeartbeatResource::collection(Heartbeat::all());
    }

    /**
     * @GET : api/heartbeats/{heartbeat}
     * Display the specified resource.
     *
     * @param Heartbeat $heartbeat
     * @return HeartbeatResource - Specified Heartbeat
     */
    public function show(Heartbeat $heartbeat)
    {
        return new HeartbeatResource($heartbeat);
    }
}
