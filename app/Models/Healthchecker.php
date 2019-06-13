<?php

namespace App\Models;

use App\Models\Base\UuidModel;

/**
 * Represent a Healchecker, that you can create to frequently check your
 * web app
 *
 * Class HealthcheckerListener
 * @package App\Models
 */
class Healthchecker extends UuidModel
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