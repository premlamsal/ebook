<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publication;

class PublicationController extends Controller
{
    
public function store(Request $request)
    {
          $this->validate($request,[
        'name'=>'required',
        'address'=>'required',
        'pobox'=>'required',
        'phone'=>'required',
        'fax'=>'required',
        'email'=>'required',
        'website'=>'required',
        'tagline'=>'required',
        
        ]);
      

        $addPublication=new Publication;
            $addPublication->name=$request->input('name');
            $addPublication->address=$request->input('address');
            $addPublication->pobox=$request->input('pobox');
            $addPublication->phone=$request->input('phone');
            $addPublication->fax=$request->input('fax');
            $addPublication->email=$request->input('email');
            $addPublication->website=$request->input('website');
            $addPublication->tagline=$request->input('tagline');
            $addPublication->save();
         return redirect('admin/showPublication')->with('sucsess','Publication Added');
    }
    public function destroy($id)
    {
        $pub=Publication::find($id);
        $pub->delete();
        return redirect('admin/showPublication')->with('success','Publication Removed');
    }
     public function update(Request $request, $id)
    {
        $this->validate($request,[
        'name'=>'required',
        'address'=>'required',
        'pobox'=>'required',
        'phone'=>'required',
        'fax'=>'required',
        'email'=>'required',
        'website'=>'required',
        'tagline'=>'required',
        
        ]);
      
       
        $editPublication=Publication::find($id);
             $editPublication->name=$request->input('name');
            $editPublication->address=$request->input('address');
            $editPublication->pobox=$request->input('pobox');
            $editPublication->phone=$request->input('phone');
            $editPublication->fax=$request->input('fax');
            $editPublication->email=$request->input('email');
            $editPublication->website=$request->input('website');
            $editPublication->tagline=$request->input('tagline');
            $editPublication->save();
         return redirect('admin/showPublication')->with('sucsess','Publication Updated');
    }

}
