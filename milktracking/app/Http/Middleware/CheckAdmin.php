<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class CheckAuth
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
        if( Session::get('isLogin') && Session::get('role') == 'admin'){

            return $next($request);

        }
        
        return back();
    }
}
