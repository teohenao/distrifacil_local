
<?php

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
        Schema::create('venta', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->increments('idventa');
            $table->integer('idcliente');
            $table->string('tipo_comprobante', 20);
            $table->string('num_comprobante', 10);
            $table->dateTime('fecha_hora');
            $table->decimal('total_venta', 11, 2);
            $table->string('estado', 20);
            $table->index('idcliente','fk_venta_cliente_idx');
        
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
        Schema::drop('ventas');

    }
}
