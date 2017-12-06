<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_emp');
            $table->string('rut');
            $table->string('giro');
            $table->string('region');
            $table->string('comuma');
            $table->string('ciudad');
            $table->string('direccion');
            $table->string('contacto');
            $table->string('correo');
            $table->string('representante');
            $table->string('rut_rep');
            $table->integer('users_id');
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
        Schema::dropIfExists('empresas');
    }
}
