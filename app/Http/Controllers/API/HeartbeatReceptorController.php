<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\ApiController;
use App\Models\HeartbeatReceptor;
use App\Http\Requests\HeartbeatReceptor as HeartbeatReceptorRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HeartbeatReceptorController extends ApiController
{
    /**
     * @GET : api/heartbeats/
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index() : jsonResponse
    {
        return response()->json(HeartbeatReceptor::get(), 200);
    }

    /**
     * @POST : api/heartbeats
     * Store a newly created resource in storage.
     *
     * @param  HeartbeatReceptorRequest $request
     * @return JsonResponse - new created Heartbeat Receptor
     */
    public function store(HeartbeatReceptorRequest $request) : JsonResponse
    {
        return response()->json(HeartbeatReceptor::create($request->all()), 200);
    }

    /**
     * @GET : api/heartbeats/{heartbeat}
     * Display the specified resource.
     *
     * @param HeartbeatReceptor  $heartbeatReceptor
     * @return JsonResponse
     */
    public function show(HeartbeatReceptor $heartbeatReceptor) : JsonResponse
    {
        //
    }

    /**
     * @PUT : api/heartbeats/{heartbeat}
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param HeartbeatReceptor  $heartbeatReceptor
     * @return JsonResponse
     */
    public function update(Request $request, HeartbeatReceptor $heartbeatReceptor) : JsonResponse
    {
        //
    }

    /**
     * @DELETE : api/heartbeats/{heartbeat}
     * Remove the specified resource from storage.
     *
     * @param HeartbeatReceptor  $heartbeatReceptor
     * @return JsonResponse
     */
    public function destroy(HeartbeatReceptor $heartbeatReceptor) : JsonResponse
    {
        //
    }
}
