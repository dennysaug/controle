<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class ChecaPermissao
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $rota_as = $request->route()->getAction()['as'];

        if(@session('permissao')[$rota_as])
            return $next($request);
        else
            return view('errors.permissao');

        return $next($request);
    }
}
