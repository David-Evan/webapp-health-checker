<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\ApiController;
use App\Models\Healthchecker;
use App\Http\Requests\API\Healthchecker as HealthcheckerRequest;
use App\Http\Resources\Healthchecker as HealthcheckerResource;

class HealthcheckerController extends ApiController
{
    /**
     * @GET : api/healthcheckers/
     * Display a listing of the resource.
     */
    public function index()
    {
        return HealthcheckerResource::collection(Healthchecker::all());
    }

    /**
     * @POST : api/healthcheckers
     * Store a newly created resource in storage.
     *
     * @param HealthcheckerRequest $request
     * @return HealthcheckerResource - New stored Healthchecker
     */
    public function store(HealthcheckerRequest $request)
    {
        return new HealthcheckerResource(Healthchecker::create($request->all()));
    }

    /**
     * @GET : api/healthcheckers/{heartbeat_receptor}
     * Display the specified resource.
     *
     * @param Healthchecker $healthchecker
     * @return HealthcheckerResource - Specified Healthchecker
     */
    public function show(Healthchecker $healthchecker)
    {
        return new HealthcheckerResource($healthchecker);
    }

    /**
     * @PUT : api/healthcheckers/{heartbeat_receptor}
     * Update the specified resource in storage.
     *
     * @param HealthcheckerRequest $request
     * @param Healthchecker $healthchecker
     * @return HealthcheckerResource - Updated Healthchecker
     */
    public function update(HealthcheckerRequest $request, Healthchecker $healthchecker)
    {
        $healthchecker->update($request->all());
        return new HealthcheckerResource($healthchecker);
    }

    /**
     * @DELETE : api/healthcheckers/{heartbeat_receptor}
     * Remove the specified resource from storage.
     *
     * @param Healthchecker $healthchecker
     * @return HealthcheckerResource - Deleted Healthchecker
     *
     * @throws \Exception
     */
    public function destroy(Healthchecker $healthchecker)
    {
        $healthchecker->delete();
        return new HealthcheckerResource($healthchecker);
    }

}
