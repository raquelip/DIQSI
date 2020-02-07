<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('Cantidad');
            $table->date('Fecha');
            $table->string('Comprobante');
            $table->unsignedBigInteger('estadopedido_id');
            $table->unsignedBigInteger('persona_id');
            $table->foreign('estadopedido_id')->references('id')->on('estado_pedidos');
            $table->foreign('persona_id')->references('id')->on('personas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
}
