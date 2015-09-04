<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transacaos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categoria_transacaos_id')->unsigned();
            $table->string('nome',50)->nullable();
            $table->string('classe',50)->nullable();
            $table->string('rota',50)->nullable();
            $table->tinyInteger('exibir')->default('1');
            $table->tinyInteger('ordem')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('categoria_transacaos_id')->references('id')->on('categoria_transacaos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('transacaos', function(Blueprint $table){
            $table->dropForeign('categoria_transacaos_id');
        });
    }
}
