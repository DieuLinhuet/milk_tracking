<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class CheckGuest
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
        if(Session::get('isLogin'))
             return redirect()->route('home');
        return $next($request);
    }
}
