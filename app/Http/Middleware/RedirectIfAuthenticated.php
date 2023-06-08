<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        // $guards = empty($guards) ? [null] : $guards;

        // foreach ($guards as $guard) {
        //     if (Auth::guard($guard)->check()) {
        //         return redirect(RouteServiceProvider::HOME);
        //     }
        // }

        // @$user = Auth::user()->user_type;
        // if ($user == 'admin') {
        //     return redirect()->route('admin-dashboard');
        // } elseif ($user == 'user') {
        //     return redirect()->route('user-profile');
        // } elseif ($user == 'company') {
        //     return redirect()->route('company-profile');
        // }else{
        //     $guards = empty($guards) ? [null] : $guards;


        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {

                if (auth()->user()->user_type == 'admin') {
                    return redirect()->route('admin-dashboard');
                }
                if (auth()->user()->user_type == 'artist') {

                    return redirect()->route('user-profile');
                }
                if (auth()->user()->user_type == 'filmmaker') {
                    return redirect()->route('company-profile');
                }
                return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }
}



