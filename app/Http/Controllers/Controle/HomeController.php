<?php

namespace App\Http\Controllers\Controle;


use App\Model\CategoriaTransacao;
use App\Model\PermissaoRota;
use App\Model\Rota;
use App\Model\Transacao;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $rota_as = $rota_as = Route::Current()->getAction()['as'];
        $categoria_transacao = session('rotas')->lists('transacao','as');

        $rota = Rota::where('as',$rota_as)->first();



        return view('controle.layout.conteudo');
    }

}
