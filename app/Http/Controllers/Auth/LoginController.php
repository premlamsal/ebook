<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
        public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    protected function authenticated($request,$user){
        if($user->user_type === 'customer'){
            
           return redirect()->intended('/customer/profile'); //redirect to admin panel
        }
        else if($user->user_type === 'admin'){
          
           return redirect()->intended('/admin/'); //redirect to admin panel
        }
    
       return redirect()->intended('/');//redirect to standard user homepage
    }
}
