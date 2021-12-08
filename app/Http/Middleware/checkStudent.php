<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkStudent
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
        $user = auth()->guard('api')->user();
        $check = auth()->guard('api')->check();

        if($user ? $user->role_id : null == 0 && $check){
            return $next($request);
        }
        return response()->json([
            'message' => 'Not authorized as Student.'
        ], 403);

    }
}
