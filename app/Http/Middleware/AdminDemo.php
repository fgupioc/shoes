<?php

namespace shoes\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminDemo
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
        if(Auth::User()->email == 'tests@gmail.com'){
            return $next($request);
        }
        else
        {
            return abort(503);
        }

    }
}
