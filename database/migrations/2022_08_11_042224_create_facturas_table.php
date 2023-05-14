<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->integer('numero');
            $table->double('efectivo', 8, 2);
            $table->double('tarjeta', 8, 2);
            $table->double('transferencia', 8, 2);
            $table->double('otros', 8, 2);
            $table->double('descuento', 8, 2);
            $table->double('total', 8, 2);
            $table->double('impuesto', 8, 2);
            $table->unsignedBigInteger('reserva_id');
            $table->enum('estado', ['Activo', 'Inactivo'])->default('Activo');
            $table->foreign('reserva_id')->references('id')->on('reservas')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('facturas');
    }
};
