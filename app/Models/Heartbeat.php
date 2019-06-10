<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Represent a Heartbeat that'll generated when your webapp hit his receptor
 *
 * Class Heartbeat
 * @package App\Models
 */
class Heartbeat extends Model
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