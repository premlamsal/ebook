<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Customer
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
            if(auth()->user()->user_type == 'customer'){
                
                 return $next($request);
             }
            
         }
          
        return redirect('/opps')->with('error','You have not admin access');
  
    }
}
