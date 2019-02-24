
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->increments('idpersona');
            $table->string('tipo_persona', 20);
            $table->string('nombre', 100);
            $table->string('tipo_documento', 20)->default(null);
            $table->string('num_documento', 15)->default(null);
            $table->string('direccion', 70)->default(null);
            $table->string('telefono', 15)->default(null);
            $table->string('email', 50)->default(null);
        
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
        Schema::drop('personas');

    }
}
