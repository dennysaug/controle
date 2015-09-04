<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Model::unguard();

        $this->call(GrupoUsuarioTableSeeder::class);
        $this->call(UsuarioTableSeeder::class);
        $this->call(CategoriaTransacaoTableSeeder::class);
        $this->call(TransacaoTableSeeder::class);
        $this->call(RotaTableSeeder::class);
        $this->call(PermissaoTableSeeder::class);

//        Model::reguard();
    }
}
