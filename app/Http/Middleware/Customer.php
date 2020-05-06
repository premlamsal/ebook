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
            elseif (auth()->user()->user_type == 'admin') {

            $msg="You should login as customer to access this page";
             return redirect('/opps/'.$msg);
                
            }
             else{
                
            $msg="You should login as customer to access this page.";
            return redirect('/opps/'.$msg);

            }
            
         }else{

            $msg="You should login to access this page";
            return redirect('/opps/'.$msg);
         }
          
  
    }
}
