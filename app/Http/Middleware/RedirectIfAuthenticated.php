<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $redirectTo = RouteServiceProvider::HOME;

                // Arahkan pengguna sesuai dengan peran
                switch (Auth::user()->level) {
                    case 'admin':
                        $redirectTo = '/admin/konten';
                        break;
                }

                return redirect($redirectTo);
            }
        }

        return $next($request);
    }
}
