<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Admin
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
        if($user = Auth::user())
         {
            if(auth()->user()->user_type == 'admin'){
            return $next($request);
             }
         }
          
        return redirect('/')->with('error','You have not admin access');
    }
}
