<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Transacao extends Model
{
    protected $table = 'transacaos';
    protected $guarded = ['id'];
    protected $with = ['categoria'];

    public function categoria()
    {
        return $this->belongsTo('App\Model\CategoriaTransacao', 'categoria_transacaos_id');
    }

    public function rotas()
    {
        return $this->hasMany('App\Model\Rota', 'transacaos_id');
    }


}
