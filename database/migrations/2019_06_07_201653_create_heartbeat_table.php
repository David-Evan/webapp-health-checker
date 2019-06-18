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
            $table->engine = 'InnoDB';

            $table->uuid('id')->primary()->unique();
            $table->uuid('heartbeatReceptorId'); // Foreign key
            $table->timestamp('createdAt');

            // Foreign keys definitions
            $table->foreign('heartbeatReceptorId')->references('id')->on('heartbeat_receptor')->onDelete('cascade')->onUpdate('cascade');
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
