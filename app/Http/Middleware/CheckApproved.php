<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckApproved
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
        if(Auth::check()){
            if (Auth::user()->status == 0) {
                return redirect()->route('approval');
            }
        } else {
             return redirect()->route('login');
        }

        return $next($request);
    }
}
