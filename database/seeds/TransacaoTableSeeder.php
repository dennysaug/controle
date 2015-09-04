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
use App\Model\Transacao;

class TransacaoTableSeeder extends Seeder {

    public function run()
    {
        DB::table('transacaos')->delete();

        Transacao::create([
            'categoria_transacaos_id' => 1,
            'nome' => 'Controle',
            'classe' => '',
            'rota' => 'controle',
            'exibir' => 0,
        ]);

        Transacao::create([
            'categoria_transacaos_id' => 1,
            'nome' => 'Grupo Usuário',
            'classe' => 'icon-group',
            'rota' => 'controle.grupousuario'
        ]);

        Transacao::create([
            'categoria_transacaos_id' => 1,
            'nome' => 'Usuário',
            'classe' => 'icon-user',
            'rota' => 'controle.usuario'
        ]);

        Transacao::create([
            'categoria_transacaos_id' => 1,
            'nome' => 'Categoria Transação',
            'classe' => 'icon-star-empty',
            'rota' => 'controle.categoriatransacao'
        ]);

        Transacao::create([
            'categoria_transacaos_id' => 1,
            'nome' => 'Transação',
            'classe' => 'icon-magic',
            'rota' => 'controle.transacao'
        ]);

        Transacao::create([
            'categoria_transacaos_id' => 1,
            'nome' => 'Rota',
            'classe' => '',
            'exibir' => 0
        ]);

        Transacao::create([
            'categoria_transacaos_id' => 1,
            'nome' => 'Permissão',
            'classe' => '',
            'exibir' => 0
        ]);
        /////////////////////////////////////////////////////

    }

}