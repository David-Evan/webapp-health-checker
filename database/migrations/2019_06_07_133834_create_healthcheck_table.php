<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHealthcheckTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('healthcheck', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->uuid('id')->primary()->unique();
            $table->smallInteger('HTTPCode')->unsigned();
            $table->uuid('healthcheckerId');//Foreign key
            $table->timestamp('createdAt');

            // Foreign keys definitions
            $table->foreign('healthcheckerId')->references('id')->on('healthchecker')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('healthcheck');
    }
}
