<?php

namespace App\Http\Controllers\Controle;

use App\Model\Rota;
use App\Model\Transacao;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id_transacao = null)
    {
        $transacao = Transacao::find($id_transacao);

        $rotas = Rota::where('transacaos_id','=',$id_transacao)->get();
        $data = ['transacao', 'rotas'];
        return view('controle.rota.index',compact($data));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($id_transacao = null,Request $request)
    {
        if(strcmp($request->method(),'POST') == 0) {
            $rota = new Rota();


            $input = $request->except('_token');
            $input['transacaos_id'] = $id_transacao;
            $input['restrito'] = isset($input['restrito']) ? 1 : 0;

            if($rota->fill($input)->save()) {
                return redirect()->route('controle.rota',$id_transacao)->with('msg-success',true);
            }

            return redirect()->back()->with('msg-error',true);

        }
        $data = ['id_transacao'];
        return view('controle.rota.create',compact($data));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id = null,Request $request)
    {
        $rota = Rota::find($id);

        if(strcmp($request->method(),'POST') == 0) {
            $input = $request->except('_token');

            $input['restrito'] = isset($input['restrito']) ? 1 : 0;

            if($rota->update($input))
                return redirect()->route('controle.rota',$rota->transacaos_id)->with('msg-success',true);

            return redirect()->back()->with('msg-error',true);
        }

        $data = ['rota'];
        return view('controle.rota.edit',compact($data));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id = null)
    {
        $rota = Rota::find($id);
        if($rota->delete())
            return redirect()->route('controle.rota', $rota->transacaos_id)->with('msg-success',true);

        return redirect()->back()->with('msg-error',true);
    }

}
