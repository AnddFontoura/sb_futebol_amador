<?php

namespace App\Http\Middleware;

use App\Http\Controllers\HomeController;
use Closure;
use Illuminate\Support\Facades\Auth;

class PlayerMiddleware
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
        if(Auth::user()->user_type_id == HomeController::USER_TYPE_PLAYER) {
            return $next($request);
        }

        return redirect('/home');
    }
}
