<?php

namespace App\Http\Controllers\Controle;

use App\Model\GrupoUsuario;
use App\Model\Usuario;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function index()
    {
        $usuarios = Usuario::all();
        $data = ['usuarios'];
        return view('controle.usuario.index',compact($data));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {

        if(strcmp($request->method(),'POST') == 0) {
            $usuario = new Usuario();

            $input = $request->except('_token');

            if($input['senha'] == $input['confirmar_senha'])
                $input['password'] = bcrypt($input['senha']);

            unset($input['senha'],$input['confirmar_senha']);

            if($usuario->fill($input)->save())
                return redirect()->route('controle.usuario')->with('msg-success',true);

            return redirect()->back()->with('msg-error',true);

        }

        $gruposusuarios = GrupoUsuario::all();
        $data = ['gruposusuarios'];
        return view('controle.usuario.create',compact($data));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id = null, Request $request)
    {
        $usuario = Usuario::find($id);
        $gruposusuarios = GrupoUsuario::all();

        if(strcmp($request->method(),'POST') == 0) {
            $input = $request->except('_token');

            if((strlen($input['senha']) > 0) && ($input['senha'] == $input['confirmar_senha']))
                $input['password'] = bcrypt($input['senha']);
            unset($input['senha'],$input['confirmar_senha']);

            if($usuario->fill($input)->save())
                return redirect()->route('controle.usuario')->with('msg-success',true);

            return redirect()->back()->with('msg-error',true);

        }


        $data = ['usuario','gruposusuarios'];
        return view('controle.usuario.edit',compact($data));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id = null)
    {
        $usuario = Usuario::find($id);
        if($usuario->delete())
            return redirect()->route('controle.usuario')->with('msg-success',true);

        return redirect()->back()->with('msg-error',true);
    }
}
