

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->increments('idcategoria');
            $table->string('nombre', 50);
            $table->string('descripcion', 256)->default(null);
            $table->boolean('condicion');
        
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
        Schema::drop('categorias');

    }
}
