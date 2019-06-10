<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Represent a Heartbeat Listener, what you can create to listen specific key
 * for your crontask
 *
 * Class HeartbeatListener
 * @package App\Models
 */
class HeartbeatReceptor extends Model
{
    public $table = 'heartbeat_receptor';


    /*
    |--------------------------------------------------------------------------
    | Relationship
    |--------------------------------------------------------------------------
    */

    public function heartbeats()
    {
        return $this->hasMany('App\Models\Heartbeat', 'heartbeat_receptor_id');
    }
}