<?php

namespace App\Models;

use App\Models\Base\UuidModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Represent a Heartbeat Listener, what you can create to listen specific key
 * for your crontask
 *
 * Class HeartbeatReceptor
 * @package App\Models
 */
class HeartbeatReceptor extends UuidModel
{
    // Params - Default values
    const _WARING_AFTER = 60;

    // Table name
    public $table = 'heartbeat_receptor';

    // Fillables fields
    protected $fillable = ['name', 'alertTo','warningAfter'];

    // Default values for attributes
    protected $attributes = [
        'id' => null,
        'name' => null,
        'alertTo' => null,
        'lastHitting' => null,
        'warningAfter' => self::_WARING_AFTER,
        'isActive' => true,
    ];





    /*
    |--------------------------------------------------------------------------
    | Relationship
    |--------------------------------------------------------------------------
    */

    public function heartbeats() : HasMany
    {
        return $this->hasMany('App\Models\Heartbeat', 'heartbeat_receptor_id');
    }


    /*
    |--------------------------------------------------------------------------
    | ACCESSOR / MUTATOR
    |--------------------------------------------------------------------------
    */

    // Set default value for "warningAfter" if it's null
    public function setWarningAfterAttribute($value) : void
    {
        if ($value === null)
            $this->attributes['warningAfter']= self::_WARING_AFTER;
        else
            $this->attributes['warningAfter']= $value;
    }
}