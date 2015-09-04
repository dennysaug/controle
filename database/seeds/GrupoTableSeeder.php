<?php
/**
 * Created by PhpStorm.
 * User: dennys
 * Date: 25/07/15
 * Time: 14:09
 */
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Model\GrupoUsuario;

class GrupoUsuarioTableSeeder extends Seeder {

    public function run()
    {
        DB::table('grupo_usuarios')->delete();

        GrupoUsuario::create(
            ['nome' => 'Adminstrador']
        );

    }

}