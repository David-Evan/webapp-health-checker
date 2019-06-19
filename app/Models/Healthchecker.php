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
    // Params - Default values
    const _WARING_AFTER = 60;

    // Table name
    public $table = 'healthchecker';

    // Fillables fields
    protected $fillable = ['name', 'checkURL', 'alertTo','warningAfter'];

    // Default values for attributes
    protected $attributes = [
        'id' => null,
        'name' => null,
        'checkURL' => null,
        'alertTo' => null,
        'lastCheck' => null,
        'warningAfter' => self::_WARING_AFTER,
        'isReported' => true,
        'isActive' => true,
    ];

    /*
    |--------------------------------------------------------------------------
    | Relationship
    |--------------------------------------------------------------------------
    */


    public function healthchecks()
    {
        return $this->hasMany('App\Models\Healthcheck', 'healthcheckerId');
    }
}
