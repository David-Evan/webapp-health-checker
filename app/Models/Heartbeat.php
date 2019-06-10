<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Represent a Heartbeat that'll generated when your webapp hit his listener
 *
 * Class Heartbeat
 * @package App\Models
 */
class Heartbeat extends Model
{
    public $table = 'heartbeat';
}