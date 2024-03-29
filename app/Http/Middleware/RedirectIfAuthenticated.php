<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        switch ($guard){
            case 'admin':
                if(Auth::guard($guard)->check()){
                    return redirect()->route('admin.home');
                }
                break;
            case 'shop':

                if(Auth::guard($guard)->check()){
                    return redirect()->route('shop.home');
                }
                break;

            case 'driver':

                if(Auth::guard($guard)->check()){
                    return redirect()->route('driver.home');
                }
                break;

            case 'customer':

                if(Auth::guard($guard)->check()){
                    return redirect()->route('customer.home');
                }
                break;

            default:
//                if(Auth::guard($guard)->check()){
//                    return redirect(RouteServiceProvider::HOME);
//                }
                break;

        }
//        if (Auth::guard($guard)->check()) {
//            return redirect(RouteServiceProvider::HOME);
//        }

        return $next($request);
    }
}
