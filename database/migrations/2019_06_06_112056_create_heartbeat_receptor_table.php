<?php

use App\Models\HeartbeatReceptor;
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
            $table->uuid('id')->primary()->unique(); // Your UUID key to identify your heartbeat receptor
            $table->string('name', 128);
            $table->string('alertTo', 256)->nullable();
            $table->dateTime('lastHitting')->nullable();
            $table->integer('warningAfter')->default(HeartbeatReceptor::_WARING_AFTER);
            $table->boolean('isActive')->default(true);
            $table->timestamp('createdAt');
            $table->timestamp('updatedAt')->nullable();
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
