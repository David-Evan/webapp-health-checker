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
            $table->uuid('id')->unique(); // Your UUID key to identify your heartbeat receptor
            $table->string('name', 64);
            $table->string('alert_to', 512)->nullable();
            $table->dateTime('last_checkin')->nullable();
            $table->integer('warning_after')->default(60);
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
