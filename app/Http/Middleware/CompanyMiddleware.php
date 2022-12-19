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
         if(Auth::user()->role_1==='f'){

            return "hello";
        

        }
        elseif(!Auth::user()->role_1==='c'){
            return "hi";
        }
        elseif(!Auth::user()->role_1==='b'){
            return "hi";
        }
        
        else {
        return $next($request);
        }
        
    }
}
