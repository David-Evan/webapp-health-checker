<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeartbeatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heartbeat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('heartbeat_receptor_id')->unsigned();
            $table->timestamps();

            // Foreign keys
            $table->foreign('heartbeat_receptor_id')->references('id')->on('heartbeat_receptor')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('heartbeat');
    }
}
