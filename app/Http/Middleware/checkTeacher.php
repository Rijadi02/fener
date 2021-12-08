<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class checkTeacher
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        dd($request->user);
        if(Auth::id() == null){
            Auth::logout();
        }

        if (Auth::user()->role_id != 1){
            Auth::logout();
        }

        return $next($request);
    }
}
