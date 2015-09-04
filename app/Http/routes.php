<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Model\Rota;

Route::get('/', function () {
    return view('welcome');
});

Route::get('auth/login', ['as' => 'auth.login',function(){
    return view('controle.login.form');
}]);

Route::post('auth/login', 'Auth\AuthController@login');


Route::group(['prefix' => 'controle', 'middleware' => ['auth','permissao']], function () {



    #### COMENTAR A PARTE ABAIXO PARA RODAR O MIGRATE:REFRESH --SEED ####

    $controle_rotas = Rota::where('restrito','=',true)->get();

    if(count($controle_rotas) > 0)
        foreach($controle_rotas as $rota)
            Route::any($rota->uri, [
                'as' => $rota->as,
                'uses' => $rota->uses
            ]);

    ### FIM ###
});