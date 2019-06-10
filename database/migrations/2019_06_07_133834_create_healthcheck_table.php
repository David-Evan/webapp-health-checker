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
            $table->bigIncrements('id');
            $table->smallInteger('http_code')->unsigned();
            $table->integer('healthchecker_id')->unsigned();
            $table->timestamps();

            // Foreign keys
            $table->foreign('healthchecker_id')->references('id')->on('healthchecker')->onDelete('cascade')->onUpdate('cascade');
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
