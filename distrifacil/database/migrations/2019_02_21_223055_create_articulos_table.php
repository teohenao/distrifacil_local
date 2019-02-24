
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulo', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->increments('idarticulo');
            $table->integer('idcategoria');
            $table->string('nombre', 100);
            $table->integer('stock');
            $table->string('descripcion', 512)->default(null);
            $table->string('imagen', 50)->default(null);
            $table->string('estado', 20);
            $table->index('idcategoria','fk_articulo_categoria_idx');
        
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
        Schema::drop('articulos');

    }
}
