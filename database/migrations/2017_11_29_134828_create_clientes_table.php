<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_clien');
            $table->string('rut');
            $table->string('giro');
            $table->string('region');
            $table->string('comuna');
            $table->string('ciudad');
            $table->string('direccion');
            $table->string('contacto');
            $table->string('cargo');
            $table->string('telefono');
            $table->string('correo');
            $table->date('fecha');
            $table->integer('empresas_id');
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
        Schema::dropIfExists('clientes');
    }
}
