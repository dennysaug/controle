<?php
/**
 * Created by PhpStorm.
 * User: dennys
 * Date: 25/07/15
 * Time: 14:09
 */
use App\Model\PermissaoRota;
use Illuminate\Database\Seeder;

class PermissaoTableSeeder extends Seeder {

    public function run()
    {
        DB::table('permissao_rota')->delete();

        for($i=1;$i<=24;$i++)
            PermissaoRota::create(['grupo_id' => 1, 'rota_id' => $i]);

    }

}