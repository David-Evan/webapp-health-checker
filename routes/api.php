<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// BE CARREFUL : All controller of this files are placed into :  Controller/API
// namespace. It's possible to update this value by update RouteServiceProvider

/**
 * Heartbeat Receptor
 */
//  - Prefix 'api' - for all routes names to avoid conflict with frontend routes
Route::apiResource( 'heartbeat-receptors', 'HeartbeatReceptorController',
    [
        'as' => 'api',
    ]);

// Heartbeat Receptor listener
Route::get('heartbeat-receptors/{heartbeat_receptor}/hit', 'HeartbeatReceptorController@hit')->name('api.heartbeat-receptors.hit');



/**
 * Heartbeat
 */
Route::apiResource( 'heartbeats', 'HeartbeatController',
    [
        'as' => 'api',
        'only' => ['index', 'show']
    ]);

/**
 * Healthchecker
 */

Route::apiResource( 'healthcheckers', 'HealthcheckerController',
    [
        'as' => 'api',
    ]);