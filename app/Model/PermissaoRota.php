<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PermissaoRota extends Model
{
    protected $table = 'permissao_rota';
    protected $fillable = ['grupo_id','rota_id'];
    protected $with = ['rota'];


    public function rota()
    {
        return $this->belongsTo('App\Model\Rota');
    }



}
