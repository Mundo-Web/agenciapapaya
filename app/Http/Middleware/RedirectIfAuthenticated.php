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
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;
        // $role = Auth::user()->roles->pluck('name');

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::HOME_ADMIN);
                // switch ($role[0]) {
                //     case 'Admin':
                //         return redirect(RouteServiceProvider::HOME_ADMIN);
                //     case 'Customer':
                //         return redirect(RouteServiceProvider::HOME_CUSTOMER);
                //     default:
                //         return redirect(RouteServiceProvider::INICIO);
                // }
                


            }
        }

        return $next($request);
    }
}
