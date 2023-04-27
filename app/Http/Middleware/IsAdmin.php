<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{

    public function handle(Request $request, Closure $next)
    {
        if (Auth::id()) {
            if (auth()->user()->is_admin == 1) {
                return $next($request);
            }

            return redirect('/')->with('info', "NTM TU VA OU");
        }
    }
}
