<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\ApiController;
use App\Http\Resources\Healthcheck as HealthcheckResource;
use App\Models\Healthcheck;


class HealthcheckController extends ApiController
{
    /**
     * @GET : api/healthchecks/
     * Display a listing of the resource.
     */
    public function index()
    {
        return HealthcheckResource::collection(Healthcheck::all());
    }

    /**
     * @GET : api/healthchecks/{healthcheck}
     * Display the specified resource.
     *
     * @param Healthcheck $healthcheck
     * @return HealthcheckResource - Specified Healthcheck
     */
    public function show(Healthcheck $healthcheck)
    {
        return new HealthcheckResource($healthcheck);
    }
}
