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

        $check = auth()->guard('api')->check();
        $user = auth()->guard('api')->user();
        if($user ? $user->role_id : null == 1 && $check){
            return $next($request);
        }

        return response()->json([
            'message' => 'Not authorized as Teacher.'
        ], 403);

    }
}
