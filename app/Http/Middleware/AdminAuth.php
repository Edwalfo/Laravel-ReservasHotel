<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->check()){
            if (!auth()->user()->is_admin) {
                return redirect()->route('getLogin')->with('error','Necesitas permiso de admnistrador para tener acceso a esta pagina');
            }

        }else{
            return redirect()->route('getLogin')->with('error','Debes iniciar sesion para tener acceso a esta pagina');
        }
        return $next($request);
    }
}
