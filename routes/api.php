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

Route::apiResources([
        'heartbeat-receptors' => 'HeartbeatReceptorController'
    ]);
