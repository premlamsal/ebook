<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Illuminate\Support\Facades\Hash;
use Auth; 

class AccountController extends Controller
{
 
    public function store(Request $request)
    {
      

                 $this->validate($request,[
                'name'=>'required',
                'address'=>'required',
                'email'=>'required',
                'password'=>'required',
                // 'phone'=>'required|regex:/[0-9]{10}/',
                'phone'=>'required',
                'gender'=>'required',


                ]);
                $user_type='admin';
                $addAccount=new User;
                    $addAccount->name=$request->input('name');
                    $addAccount->email=$request->input('email');
                    $addAccount->password=Hash::make($request->get('password'));
                    $addAccount->address=$request->input('address');
                    $addAccount->phone=$request->input('phone');
                    $addAccount->gender=$request->input('gender');
                    $addAccount->user_type="admin";
                        $addAccount->save();
                 return redirect('/admin')->with('sucsess','Account Added');
              
             

       
    }

    public function registerCustomer(Request $request)
    {
        $getUserType=$request->get('getUserType');

            if($getUserType==='customer'){
                $this->validate($request,[
                'name'=>'required',
                'address'=>'required',
                'email'=>'required',
                'password'=>'required',
                'gender'=>'required',
                ]);
                    $user_type='customer';
                User::create([
                    'name' => $request->get('name'),
                    'email' => $request->get('email'),
                    'password' => Hash::make($request->get('password')),
                    'address' => $request->get('address'),
                    'gender' => $request->get('gender'),
                    'user_type'=>$user_type,
                 ]);
                return redirect('/');
            }
    }



     public function update(Request $request, $id)
    
    {
          $this->validate($request, [
        'name'=>'required',
        'address'=>'required',
        'email'=>'required',
        'password'=>'required',
        'phone'=>'required',
        'gender'=>'required',
        ]);
        
        $editAccount=User::find($id);
            $editAccount->name=$request->input('name');
            $editAccount->email=$request->input('email');
            $editAccount->password=Hash::make($request->input('password'));
            $editAccount->address=$request->input('address');
            $editAccount->phone=$request->input('phone');
            $editAccount->gender=$request->input('gender');
                $editAccount->save();
        return redirect('/admin')->with('sucsess','Account Update');
    }
   
    public function destroy($id)
    {
        $delAccount=User::find($id);
        $delAccount->delete();
        return redirect('/admin/viewAccount')->with('success','Account Removed');
    }
}
