<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stationery;

class StationeryController extends Controller
{
    public function store(Request $request){
    	 $this->validate($request,[
        'name'=>'required',
        'address'=>'required',
        'phone'=>'required|numeric',
        'mobile'=>'required|regex:/(98)[0-9]{8}/',
        'proprietor'=>'required',
        'state'=>'required|numeric',
        ]);

    	 $stationery=new Stationery;
    	 $stationery->name=$request->name;
    	 $stationery->address=$request->address;
    	 $stationery->phone=$request->phone;
    	 $stationery->mobile=$request->mobile;
    	 $stationery->proprietor=$request->proprietor;
    	 $stationery->state=$request->state;
    	 $stationery->save();

    	 if($stationery){

    	 	return redirect('/admin/stationery');

    	 }
    	 else{
    	 	print_r("Add Failed");
    	 }

    }
    public function delete($id){
    	if(isset($id)){
    			$stationerydel=Stationery::find($id);
    	        $stationerydel->delete();

    	if($stationerydel){
    		return redirect('/admin/stationery');
    	}
    	 
    	 else{
    	 	print_r("Delete Failed");
    	 }

    	}
    	else{
    		print_r("Id not Set");
    	}
    

    }
    public function update(Request $request){

    	 $this->validate($request,[
        'name'=>'required',
        'address'=>'required',
        'phone'=>'required|numeric',
        'mobile'=>'required|regex:/(98)[0-9]{8}/',
        'proprietor'=>'required',
        'state'=>'required|numeric',
        ]);

    	
    	 //get id from the hidden field
    	 $getId=$request->getId;

    	 $stationery=Stationery::find($getId);
    	 $stationery->name=$request->name;
    	 $stationery->address=$request->address;
    	 $stationery->phone=$request->phone;
    	 $stationery->mobile=$request->mobile;
    	 $stationery->proprietor=$request->proprietor;
    	 $stationery->state=$request->state;
    	 $stationery->save();
    	 if($stationery){

    	 	return redirect('/admin/stationery');
    	 }
    	 else{
    	 	print_r("Opps! Update Failed");
    	 }


    }

}
