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
use App\Model\Usuario;

class UsuarioTableSeeder extends Seeder {

    public function run()
    {
        DB::table('usuarios')->delete();

        Usuario::create(
            [
                'grupo_id' => 1,
                'nome' => 'Dennys Augustus',
                'celular' => '(91)982841155',
                'email' => 'dennys@bredi.com.br',
                'username' => 'dennys',
                'password' => bcrypt('dennys')
            ]
        );
    }

}