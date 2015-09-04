<?php

namespace App\Http\Controllers\Auth;

use App\Model\Permissao;
use App\Model\PermissaoRota;
use App\Model\Rota;
use App\Model\Transacao;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function login(Request $request)
    {
        if (Auth::attempt(array('email' => $request->email, 'password'=> $request->password)))
        {

            $dados = PermissaoRota::where('grupo_id','=',Auth::user()->grupo_id)->orderBy('id','desc')->get();

            $rotas_id = $dados->lists('rota')->lists('id','as');
            $permissao = $dados->lists('rota')->lists('uri','as');
            $migalha = $dados->lists('rota')->lists('transacao','as');

            $rotas = Rota::where('permissao','Visualizar')
                ->whereIn('id',$rotas_id)
                ->orderBy('id','desc')
                ->get();



            session(['rotas' => $rotas,'permissao' => $permissao,'migalha' => $migalha]);


            return redirect()->route('controle.home');
        }

        return redirect('/auth/login')
            ->withInput($request->only('email'))
            ->withErrors([
                'Email'=>'Invalid username and password!'
            ]);
    }

    public function logoff() {
        return Auth::logout();
//        return redirect('/auth/login')
//            ->withInput($request->only('username'))
//            ->withErrors([
//                'username'=>'Invalid username and password!'
//            ]);

    }
}
