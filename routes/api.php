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

// ALL APIResources
Route::apiResources([
        'heartbeat-receptors' => 'HeartbeatReceptorController'
    ],
    // Prefix for all routes to avoid conflict with frontend routes
    [
        'as' => 'api'
    ]);

// Heartbeat Receptor listener
Route::post('heartbeat-receptor/{heartbeat_receptor}/hit', 'HeartbeatReceptorController@hit')->name('api.heartbeat-receptors.hit');
