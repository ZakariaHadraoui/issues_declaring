<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if(Auth::user() == null){
            return Redirect::to('/');  
        }
        if(Auth::user()->role !== 'admin'){
            return Redirect::to('/dashboard');  
        }
        return $next($request);// Redirigez vers une autre page si l'utilisateur n'a pas le rôle approprié
    }
}
