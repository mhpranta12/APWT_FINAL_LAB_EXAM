<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class accesschecker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle( $request, Closure $next)
    {
        if($request->unname=="admin")
        {
            return $next($request);
        }
        else
        {
            echo "Error";
        }
        //return $next($request);
       // echo "middle ware worked";
    }
}
