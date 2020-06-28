<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ModAuth
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!Auth::user()->user_role == "admin") {
            return redirect('/401');
        }
        elseif (!Auth::user()->user_role == "mod") {
            return redirect('/401');
        }
        return $next($request);
    }
}
