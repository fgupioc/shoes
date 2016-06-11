<?php

namespace shoes\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
class Administrator
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
    $user = $this->auth->user()->administrador()->get()->all();
    if(count($user) > 0)
      return $next($request);
    else
      abort(404);
  }
}
