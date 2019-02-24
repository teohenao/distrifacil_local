
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleIngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_ingreso', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->increments('iddetalle_ingreso');
            $table->integer('idingreso');
            $table->integer('idarticulo');
            $table->integer('cantidad');
            $table->decimal('precio_compra', 11, 2);
            $table->decimal('precio_venta', 11, 2);
            $table->index('idingreso','fk_detalle_ingreso_idx');
            $table->index('idarticulo','fk_detalle_ingreso_articulo_idx');
        
            $table->timestamps();
        
        });
        DB::unprepared('
        CREATE TRIGGER `tr_updStockIngreso` AFTER INSERT ON `detalle_ingreso` FOR EACH ROW BEGIN
    UPDATE articulo SET stock = stock + NEW.cantidad 
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
        Schema::drop('detalle_ingresos');
        DB::unprepared('DROP TRIGGER `tr_updStockIngreso`');

    }
}