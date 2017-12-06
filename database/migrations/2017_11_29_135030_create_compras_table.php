<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('producto');
            $table->integer('proveedores_id');
            $table->integer('n_documento');
            $table->integer('precio_unit');
            $table->integer('unidades');
            $table->integer('neto');
            $table->integer('iva');
            $table->integer('bruto_total');
            $table->date('fecha');
            $table->integer('formapagos_id');
            $table->integer('tipodoc_id');
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
        Schema::dropIfExists('compras');
    }
}
