<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CategoriaTransacao extends Model
{
    protected $table = 'categoria_transacaos';
    protected $fillable = ['nome','classe','ordem'];
//    protected $with = ['transacaos'];


//    public function transacaos()
//    {
//        return $this->hasMany('App\Model\Transacao', 'categoria_transacaos_id');
//    }
}
