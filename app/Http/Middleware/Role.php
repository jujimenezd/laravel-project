<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $roles)
    {   
        $roles = explode('|', $roles); # array de roles $roles = ['adminstrador', 'usuario']
        $user = Auth::user(); # Obtiene el usuario actualmente autenticado
        if(!$user || !$user->role || !in_array($user->role->label, $roles)){
            return abort(403, 'No tienes permisos para acceder a esta página');
        }
        return $next($request);
    }
}