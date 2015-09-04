<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissaoRotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissao_rota', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('grupo_id')->unsigned();
            $table->integer('rota_id')->unsigned();
            $table->timestamps();

            $table->foreign('grupo_id')->references('id')->on('grupo_usuarios');
            $table->foreign('rota_id')->references('id')->on('rotas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('permissao_rota', function(Blueprint $table){
            $table->dropForeign('grupo_id');
            $table->dropForeign('rota_id');
        });
    }
}
