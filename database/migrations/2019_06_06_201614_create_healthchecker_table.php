<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHealthcheckerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('healthchecker', function (Blueprint $table) {
            $table->uuid('id')->unique();
            $table->string('name', 64);
            $table->string('checkURL',256);
            $table->string('alertTo', 512)->nullable();
            $table->dateTime('lastCheck');
            $table->integer('warningAfter')->default(60);
            $table->boolean('isReported')->default(false);
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
        Schema::dropIfExists('healthchecker');
    }
}
