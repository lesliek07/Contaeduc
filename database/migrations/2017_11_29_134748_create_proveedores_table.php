<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_emp');
            $table->string('rut');
            $table->string('giro');
            $table->string('region');
            $table->string('comuna');
            $table->string('ciudad');
            $table->string('direccion');
            $table->string('nom_contacto');
            $table->string('telefono');
            $table->string('correo');
            $table->string('cargo');
            $table->dateTime('fecha');
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
        Schema::dropIfExists('proveedores');
    }
}
