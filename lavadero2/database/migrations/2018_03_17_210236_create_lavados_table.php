<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLavadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lavados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipol_id')->unsigned();
            $table->foreign('tipol_id')->references('id')->on('tipol');
            $table->integer('tipov_id')->unsigned();
            $table->foreign('tipov_id')->references('id')->on('tipov');
            $table->string('costo');
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
        Schema::dropIfExists('lavados');
    }
}
