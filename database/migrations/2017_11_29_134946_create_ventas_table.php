<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('producto');
            $table->integer('clientes_id');
            $table->integer('n_documento');
            $table->integer('tipodoc_id');
            $table->date('fecha');
            $table->integer('precio_unit');
            $table->integer('unidades');
            $table->integer('neto_total');
            $table->integer('iva');
            $table->integer('bruto');
            $table->integer('formapagos_id');
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
        Schema::dropIfExists('ventas');
    }
}
