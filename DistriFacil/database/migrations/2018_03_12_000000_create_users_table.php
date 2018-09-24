<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
      	$table->increments('id');
            $table->enum('tipod', ['documento', 'NIT']);
            $table->string('identificacion', 100);
            $table->string('nombre', 100);
            $table->string('telefonor', 100);
            $table->string('direccionr', 100);
            $table->string('nombre_negocio', 100);
            $table->string('email')->unique();
            $table->string('user', 50)->unique();
            $table->string('password', 60);
            $table->enum('tipo', ['cliente', 'administrador']);
            $table->boolean('active');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
