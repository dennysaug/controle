<?php

namespace App\Http\Controllers\Controle;

use App\Model\PermissaoRota;
use App\Model\Transacao;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PermissaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id = null)
    {
        $transacoes = Transacao::with('rotas')->orderBy('id','desc')->get();
        $permissoes = PermissaoRota::where('grupo_id','=',$id)->lists('rota_id')->toArray();

        $data = ['transacoes','permissoes','id'];
        return view('controle.permissao.index',compact($data));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id = null, Request $request)
    {
        $input = $request->only('permissao_id');
        PermissaoRota::where('grupo_id',$id)->delete();
        foreach($input['permissao_id'] as $permissao_id)
          PermissaoRota::updateOrCreate(['grupo_id' => $id,'rota_id' => $permissao_id]);

        return redirect()->route('controle.permissao',$id)->with('msg-success',true);
    }

}
