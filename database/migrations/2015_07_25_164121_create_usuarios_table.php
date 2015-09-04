<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('grupo_id')->unsigned();
            $table->string('nome',100);
            $table->string('celular',20);
            $table->string('email')->unique();
            $table->string('username',32)->unique();
            $table->string('password',60);
            $table->string('remember_token',60);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('grupo_id')->references('id')->on('grupo_usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users', function(Blueprint $table){
            $table->dropForeign('grupo_id');
        });
    }
}
