<?php

namespace App\Models;

use App\Models\Base\UuidModel;

/**
 * Represent a Heartbeat that'll generated when your webapp hit his receptor
 *
 * Class Heartbeat
 * @package App\Models
 */
class Heartbeat extends UuidModel
{
    public $table = 'heartbeat';

    /*
    |--------------------------------------------------------------------------
    | Relationship
    |--------------------------------------------------------------------------
    */

    public function receptor()
    {
        return $this->belongsTo('App\Models\HeartbeatReceptor');
    }
}