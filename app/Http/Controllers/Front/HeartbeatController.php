<?php

namespace App\Http\Controllers\Front;

use App\Models\Heartbeat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HeartbeatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Heartbeat  $heartbeat
     * @return \Illuminate\Http\Response
     */
    public function show(Heartbeat $heartbeat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Heartbeat  $heartbeat
     * @return \Illuminate\Http\Response
     */
    public function edit(Heartbeat $heartbeat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Heartbeat  $heartbeat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Heartbeat $heartbeat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Heartbeat  $heartbeat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Heartbeat $heartbeat)
    {
        //
    }
}
