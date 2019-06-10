<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeartbeatReceptorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heartbeat_receptor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid', 16)->unique(); // Your UUID key to identify your heartbeat receptor
            $table->string('name', 64);
            $table->string('alert_to', 512);
            $table->dateTime('last_checkin');
            $table->integer('warning_after');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('heartbeat_receptor');
    }
}
