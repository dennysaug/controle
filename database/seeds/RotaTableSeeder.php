<?php
/**
 * Created by PhpStorm.
 * User: dennys
 * Date: 25/07/15
 * Time: 14:13
 */
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use App\Model\Rota;

class RotaTableSeeder extends Seeder {

    public function run()
    {
        DB::table('rotas')->delete();
        //Controle Home
        Rota::create(
            [
                'transacaos_id' => 1,
                'permissao' => 'Controle Home',
                'uri' => '/',
                'as' => 'controle.home',
                'uses' => 'Controle\HomeController@index',
                'restrito' => 1
            ]
        );

        //Logoff
        Rota::create(
            [
                'transacaos_id' => 1,
                'permissao' => 'Logoff',
                'uri' => 'logoff',
                'as' => 'controle.auth.logoff',
                'uses' => 'Auth\AuthController@getLogout',
                'restrito' => 1
            ]
        );

        //Grupo Usuario
        Rota::create(
            [
                'transacaos_id' => 2,
                'permissao' => 'Visualizar',
                'uri' => 'grupousuario',
                'as' => 'controle.grupousuario',
                'uses' => 'Controle\GrupoUsuarioController@index',
                'restrito' => 1
            ]
        );
        Rota::create(
            [
                'transacaos_id' => 2,
                'permissao' => 'Cadastrar',
                'uri' => 'grupousuario/salvar',
                'as' => 'controle.grupousuario.salvar',
                'uses' => 'Controle\GrupoUsuarioController@create',
                'restrito' => 1
            ]
        );
        Rota::create(
            [
                'transacaos_id' => 2,
                'permissao' => 'Alterar',
                'uri' => 'grupousuario/alterar/{id?}',
                'as' => 'controle.grupousuario.alterar',
                'uses' => 'Controle\GrupoUsuarioController@edit',
                'restrito' => 1
            ]
        );
        Rota::create(
            [
                'transacaos_id' => 2,
                'permissao' => 'Excluir',
                'uri' => 'grupousuario/excluir/{id?}',
                'as' => 'controle.grupousuario.excluir',
                'uses' => 'Controle\GrupoUsuarioController@destroy',
                'restrito' => 1
            ]
        );
        //Usuario
        Rota::create(
            [
                'transacaos_id' => 3,
                'permissao' => 'Visualizar',
                'uri' => 'usuario',
                'as' => 'controle.usuario',
                'uses' => 'Controle\UsuarioController@index',
                'restrito' => 1
            ]
        );
        Rota::create(
            [
                'transacaos_id' => 3,
                'permissao' => 'Cadastrar',
                'uri' => 'usuario/salvar',
                'as' => 'controle.usuario.salvar',
                'uses' => 'Controle\UsuarioController@create',
                'restrito' => 1
            ]
        );
        Rota::create(
            [
                'transacaos_id' => 3,
                'permissao' => 'Alterar',
                'uri' => 'usuario/alterar/{id?}',
                'as' => 'controle.usuario.alterar',
                'uses' => 'Controle\UsuarioController@edit',
                'restrito' => 1
            ]
        );
        Rota::create(
            [
                'transacaos_id' => 3,
                'permissao' => 'Excluir',
                'uri' => 'usuario/excluir/{id?}',
                'as' => 'controle.usuario.excluir',
                'uses' => 'Controle\UsuarioController@destroy',
                'restrito' => 1
            ]
        );
        //Categoria Transacao
        Rota::create(
            [
                'transacaos_id' => 4,
                'permissao' => 'Visualizar',
                'uri' => 'categoriatransacao',
                'as' => 'controle.categoriatransacao',
                'uses' => 'Controle\CategoriaTransacaoController@index',
                'restrito' => 1
            ]
        );
        Rota::create(
            [
                'transacaos_id' => 4,
                'permissao' => 'Cadastrar',
                'uri' => 'categoriatransacao/salvar',
                'as' => 'controle.categoriatransacao.salvar',
                'uses' => 'Controle\CategoriaTransacaoController@create',
                'restrito' => 1
            ]
        );
        Rota::create(
            [
                'transacaos_id' => 4,
                'permissao' => 'Alterar',
                'uri' => 'categoriatransacao/alterar/{id?}',
                'as' => 'controle.categoriatransacao.alterar',
                'uses' => 'Controle\CategoriaTransacaoController@edit',
                'restrito' => 1
            ]
        );
        Rota::create(
            [
                'transacaos_id' => 4,
                'permissao' => 'Excluir',
                'uri' => 'categoriatransacao/excluir/{id?}',
                'as' => 'controle.categoriatransacao.excluir',
                'uses' => 'Controle\CategoriaTransacaoController@destroy',
                'restrito' => 1
            ]
        );
        //Transacao
        Rota::create(
            [
                'transacaos_id' => 5,
                'permissao' => 'Visualizar',
                'uri' => 'transacao',
                'as' => 'controle.transacao',
                'uses' => 'Controle\TransacaoController@index',
                'restrito' => 1
            ]
        );
        Rota::create(
            [
                'transacaos_id' => 5,
                'permissao' => 'Cadastrar',
                'uri' => 'transacao/salvar',
                'as' => 'controle.transacao.salvar',
                'uses' => 'Controle\TransacaoController@create',
                'restrito' => 1
            ]
        );
        Rota::create(
            [
                'transacaos_id' => 5,
                'permissao' => 'Alterar',
                'uri' => 'transacao/alterar/{id?}',
                'as' => 'controle.transacao.alterar',
                'uses' => 'Controle\TransacaoController@edit',
                'restrito' => 1
            ]
        );
        Rota::create(
            [
                'transacaos_id' => 5,
                'permissao' => 'Excluir',
                'uri' => 'transacao/excluir/{id?}',
                'as' => 'controle.transacao.excluir',
                'uses' => 'Controle\TransacaoController@destroy',
                'restrito' => 1
            ]
        );
        //Rota
        Rota::create(
            [
                'transacaos_id' => 6,
                'permissao' => 'Visualizar',
                'uri' => 'rota/{id?}',
                'as' => 'controle.rota',
                'uses' => 'Controle\RotaController@index',
                'restrito' => 1
            ]
        );
        Rota::create(
            [
                'transacaos_id' => 6,
                'permissao' => 'Cadastrar',
                'uri' => 'rota/salvar/{id?}',
                'as' => 'controle.rota.salvar',
                'uses' => 'Controle\RotaController@create',
                'restrito' => 1
            ]
        );
        Rota::create(
            [
                'transacaos_id' => 6,
                'permissao' => 'Alterar',
                'uri' => 'rota/alterar/{id?}',
                'as' => 'controle.rota.alterar',
                'uses' => 'Controle\RotaController@edit',
                'restrito' => 1
            ]
        );
        Rota::create(
            [
                'transacaos_id' => 6,
                'permissao' => 'Excluir',
                'uri' => 'rota/excluir/{id?}',
                'as' => 'controle.rota.excluir',
                'uses' => 'Controle\RotaController@destroy',
                'restrito' => 1
            ]
        );
        //Permissao
        Rota::create(
            [
                'transacaos_id' => 7,
                'permissao' => 'Visualizar',
                'uri' => 'permissao/{id?}',
                'as' => 'controle.permissao',
                'uses' => 'Controle\PermissaoController@index',
                'restrito' => 1
            ]
        );

        Rota::create(
            [
                'transacaos_id' => 7,
                'permissao' => 'Alterar',
                'uri' => 'permissao/alterar/{id?}',
                'as' => 'controle.permissao.alterar',
                'uses' => 'Controle\PermissaoController@edit',
                'restrito' => 1
            ]
        );
    }

}