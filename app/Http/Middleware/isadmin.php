<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class isadmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if(auth()->user()->role == 'Admin'){
        //     return $next($request);
        // }
        // else
        // {
        //     return redirect(route('home'));
        // }

        if(auth()->user()->name == "Sudip Parajuli")
        {
            return $next($request);
        }

        else
        {
            return redirect('/');
        }
    }
}
