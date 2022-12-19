<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class CompanyMiddleware
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
         if(Auth::user()->role_1=='c'){

            return $next($request);

        

        }
        elseif(Auth::user()->role_1=='f'){
            return $next($request);

        }
        elseif(Auth::user()->role_1=='b'){
            return $next($request);

        }
        elseif(Auth::user()->role_1=='m'){
            return $next($request);

        }
        elseif(Auth::user()->role_1=='s'){
            return $next($request);

        }
        elseif(Auth::user()->role_2=='fa'){
            return $next($request);

        }
        
        else {
            abort(403);
        }
        
    }
}
