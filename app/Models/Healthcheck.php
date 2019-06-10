<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Represent a Healcheck, that'll be generated when WHC call your
 * defenited healchecker
 *
 * Class Healthchecker
 * @package App\Models
 */
class Healthcheck extends Model
{
    public $table = 'healthcheck';

    public function healthchecker()
    {
        return $this->belongsTo('App\Models\Healthchecker');
    }
}