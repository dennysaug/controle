<?php

namespace App\Http\Controllers\Controle;

use App\Model\GrupoUsuario;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GrupoUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $gruposusuarios = GrupoUsuario::all();
        $data=['gruposusuarios'];
        return view('controle.grupousuario.index',compact($data));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        if(strcmp($request->method(),'POST') == 0) {
            $grupousuario = new GrupoUsuario();

            $input = $request->except('_token');

            if($grupousuario->fill($input)->save())
                return redirect()->route('controle.grupousuario')->with('msg-success',true);

            return redirect()->back()->with('msg-error',true);

        }

        return view('controle.grupousuario.create');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id = null, Request $request)
    {
        $grupousuario = GrupoUsuario::find($id);


        if(strcmp($request->method(),'POST') == 0) {
            $input = $request->except('_token');

            if($grupousuario->fill($input)->save())
                return redirect()->route('controle.grupousuario')->with('msg-success',true);

            return redirect()->back()->with('msg-error',true);

        }
        $data = ['grupousuario'];
        return view('controle.grupousuario.edit',compact($data));

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id = null)
    {
        $grupousuario = GrupoUsuario::find($id);
        if($grupousuario->delete())
            return redirect()->route('controle.grupousuario')->with('msg-success',true);

        return redirect()->back()->with('msg-error',true);
    }
}
