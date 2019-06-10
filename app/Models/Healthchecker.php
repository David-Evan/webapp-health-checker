<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Represent a Healchecker, that you can create to frequently check your
 * web app
 *
 * Class HealthcheckerListener
 * @package App\Models
 */
class Healthchecker extends Model
{
    public $table = 'healchecker';

    /*
    |--------------------------------------------------------------------------
    | Relationship
    |--------------------------------------------------------------------------
    */


    public function healthchecks()
    {
        return $this->hasMany('App\Models\Healthchecks', 'healchecker_id');
    }
}