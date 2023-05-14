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
        Schema::create('huespeds', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 60);
            $table->unsignedBigInteger('tipodocumento_id');
            $table->integer('n_documento');
            $table->date('fecha_nacimiento');
            $table->string('direccion', 60)->nullable();
            $table->string('correo', 60)->nullable();
            $table->string('telefono', 45)->nullable();
            $table->enum('estado', ['Activo', 'Inactivo'])->default('Activo');
            $table->foreign('tipodocumento_id')->references('id')->on('tipodocumentos')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('huespeds');
    }
};
