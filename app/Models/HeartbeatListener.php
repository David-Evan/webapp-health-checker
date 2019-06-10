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
class HeartbeatListener extends Model
{
    public $table = 'heartbeat_listener';
}