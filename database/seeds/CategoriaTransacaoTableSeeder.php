<?php
/**
 * Created by PhpStorm.
 * User: dennys
 * Date: 25/07/15
 * Time: 14:09
 */
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Model\CategoriaTransacao;

class CategoriaTransacaoTableSeeder extends Seeder {

    public function run()
    {
        DB::table('categoria_transacaos')->delete();

        CategoriaTransacao::create(
            ['nome' => 'Configuração', 'classe' => 'icon-cogs']
        );
        
    }

}