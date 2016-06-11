<?php

namespace shoes\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class AdminGeneral
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

    if ($user->administrador->type_admin->abreviado=='AG'){
      return $next($request);
    }else{
      return redirect()->route('admin');
    }
  }
}
