<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class GrupoUsuario extends Model
{
    protected $table = 'grupo_usuarios';
    protected $guarded = ['id'];
}
