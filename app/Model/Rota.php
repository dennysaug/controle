<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rota extends Model
{
    protected $table = 'rotas';
    protected $guarded = ['id'];
    protected $with = ['transacao'];


    public function transacao()
    {
        return $this->belongsTo('App\Model\Transacao', 'transacaos_id');
    }



}
