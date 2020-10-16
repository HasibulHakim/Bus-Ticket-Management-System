<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckUser
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
        if (Auth::user()->user_id==1){
            return redirect(route('dashboard_home'));
        }
        elseif(Auth::user()->user_id==2){
            return redirect(route('view_bus_list'));
        }
        else{
            return redirect(abort(404));
        }
        // return $next($request);
    }
}
