<?php

namespace App\Http\Resources;

use App\Http\Resources\Heartbeat as HeartbeatResource;
use Illuminate\Http\Resources\Json\JsonResource;

class HeartbeatReceptor extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return array_merge(
            parent::toArray($request),
            [
                'heartbeats' => HeartbeatResource::collection($this->heartbeats),
            ]);
    }
}
