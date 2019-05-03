<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;

class GalleryController extends Controller
{
	//storing gallery images
   public function saveGallery(Request $request){
   	  $this->validate($request,[
        'title'=>'required',
        'short_description'=>'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8048',
        ]);
	   $title=$request->get('title');
	   $short_description=$request->get('short_description');

	   $imageName = time().'.'.request()->image->getClientOriginalExtension();

	   request()->image->move(public_path('uploads'), $imageName);
	   $imagepath="/uploads/".$imageName;

	     $addGallery=new Gallery;
            $addGallery->title=$request->input('title');
            $addGallery->short_description=$request->input('short_description');
            $addGallery->image=$imagepath;
            $addGallery->save();

	   return back()
	   
            ->with('success','You have successfully upload image.')

            ->with('image',$imageName);
	 

   }
   //update gallery content
   public function updateGallery(){

   }
   //remove gallery
   public function removeGallery(){

   }

}
