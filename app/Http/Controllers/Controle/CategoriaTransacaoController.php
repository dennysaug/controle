<?php

namespace App\Http\Controllers\Controle;

use App\Model\Rota;
use App\Model\CategoriaTransacao;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoriaTransacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $categoriatransacaos = CategoriaTransacao::all();
        $data = ['categoriatransacaos'];
        return view('controle.categoriatransacao.index',compact($data));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        if(strcmp($request->method(),'POST') == 0) {
            $categoriatransacao = new CategoriaTransacao();

            $input = $request->except('_token');

            if($categoriatransacao->fill($input)->save()) {
                return redirect()->route('controle.categoriatransacao')->with('msg-success',true);
            }

            return redirect()->back()->with('msg-error',true);

        }

        return view('controle.categoriatransacao.create');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id = null, Request $request)
    {
        $categoriatransacao = CategoriaTransacao::find($id);

        if(strcmp($request->method(),'POST') == 0) {
            $input = $request->except('_token');

            if($categoriatransacao->fill($input)->save())
                return redirect()->route('controle.categoriatransacao')->with('msg-success',true);

            return redirect()->back()->with('msg-error',true);

        }


        $data = ['categoriatransacao'];
        return view('controle.categoriatransacao.edit',compact($data));

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
