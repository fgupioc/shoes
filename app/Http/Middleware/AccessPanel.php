<?php

namespace shoes\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;
class AccessPanel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */ 
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next)
    { 
       $user = $this->auth->user();
       //dd($user->administrador->type_admin->abreviado);

       if($user->administrador->type_admin->abreviado=='AG')
       {
         return $next($request);
        }elseif($user->administrador->type_admin->abreviado=='AI'){
                return $next($request);
            }elseif($user->administrador->type_admin->abreviado=='AL'){
                    return $next($request);
                }else{
                    return abort(503);
                }
    }
}
