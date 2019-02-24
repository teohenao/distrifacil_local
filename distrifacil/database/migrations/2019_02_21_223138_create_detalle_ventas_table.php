
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_venta', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->increments('iddetalle_venta');
            $table->integer('idventa');
            $table->integer('idarticulo');
            $table->integer('cantidad');
            $table->decimal('precio_venta', 11, 2);
            $table->decimal('descuento', 11, 2);
            $table->index('idarticulo','fk_detalle_venta_articulo_idx');
            $table->index('idventa','fk_detalle_venta_idx');
        
            $table->timestamps();
        
        });

        DB::unprepared('
        CREATE TRIGGER `tr_updStockVenta` AFTER INSERT ON `detalle_venta` FOR EACH ROW BEGIN
    UPDATE articulo SET stock = stock - NEW.cantidad 
    WHERE articulo.idarticulo = NEW.idarticulo;
END
        ');



    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('detalle_ventas');
        DB::unprepared('DROP TRIGGER `tr_updStockVenta`');

    }
}