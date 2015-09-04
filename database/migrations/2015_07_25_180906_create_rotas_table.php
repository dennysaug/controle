<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rotas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('transacaos_id')->unsigned()->nullable();
            $table->string('permissao',50);
            $table->string('uri',50);
            $table->string('as',50);
            $table->string('uses',50);
            $table->tinyInteger('restrito')->default(0);
            $table->timestamps();

            $table->foreign('transacaos_id')->references('id')->on('transacaos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rotas', function(Blueprint $table){
            $table->dropForeign('transacaos_id');
        });
    }
}
