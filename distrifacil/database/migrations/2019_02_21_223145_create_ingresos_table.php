<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingreso', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->increments('idingreso');
            $table->integer('idproveedor');
            $table->string('tipo_comprobante', 20);
            $table->string('num_comprobante', 10);
            $table->dateTime('fecha_hora');
            $table->string('estado', 20);
            $table->index('idproveedor','fk_ingreso_persona_idx');
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
        Schema::drop('ingresos');

    }
}