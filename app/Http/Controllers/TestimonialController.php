<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;
class TestimonialController extends Controller
{
    public function index()
    {
        $Testimonials=Testimonial::orderby('created_at','desc')->get();
        return view('admin.addTestimonial')->with('testimonials',$Testimonials);
    }

   
    public function store(Request $request)
    {
        
        request()->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('Testimonialimages'), $imageName);

        //store Image in Database
        $Testimonial=new Testimonial;
        $Testimonial->person_image=$imageName;
        $Testimonial->person_name=$request->input('fname');
        $Testimonial->testimonial_body =$request->input('testimonial_body');
        $Testimonial->save();
        return redirect('admin/Testimonial');
       

    }

    public function destroy($id)
    {
        $Testimonial=Testimonial::find($id);
        $Testimonial->delete();
        return redirect('admin/Testimonial');
    }
}
