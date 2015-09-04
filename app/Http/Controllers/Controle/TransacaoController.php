<?php

namespace App\Http\Controllers\Controle;

use App\Model\CategoriaTransacao;
use App\Model\Rota;
use App\Model\Transacao;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TransacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $transacaos = Transacao::all();
        $data = ['transacaos'];
        return view('controle.transacao.index',compact($data));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $categoriatransacaos = CategoriaTransacao::all()->lists('nome','id')->toArray();

        if(strcmp($request->method(),'POST') == 0) {
            $transacao = new Transacao();

            $input = $request->except('_token');

            if($transacao->fill($input)->save()) {
                return redirect()->route('controle.transacao')->with('msg-success',true);
            }

            return redirect()->back()->with('msg-error',true);

        }
        $data = ['categoriatransacaos'];

        return view('controle.transacao.create',compact($data));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id = null, Request $request)
    {
        $transacao = Transacao::find($id);
        $categoriatransacaos = CategoriaTransacao::all()->lists('nome','id')->toArray();

        if(strcmp($request->method(),'POST') == 0) {
            $input = $request->except('_token');

            if($transacao->fill($input)->save())
                return redirect()->route('controle.transacao')->with('msg-success',true);

            return redirect()->back()->with('msg-error',true);

        }


        $data = ['transacao','categoriatransacaos'];
        return view('controle.transacao.edit',compact($data));

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
