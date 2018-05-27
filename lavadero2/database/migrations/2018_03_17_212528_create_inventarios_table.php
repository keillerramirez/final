<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->string('precio_compra');
            $table->string('precio_venta');
            $table->string('stock');
            $table->string('stock_min');
            $table->string('stock_max');
            $table->integer('tipop_id')->unsigned();
            $table->foreign('tipop_id')->references('id')->on('tipop');
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
        Schema::dropIfExists('inventarios');
    }
}
