<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Auth;

class SliderController extends Controller
{
    public function index()
    {
        // $slider=Slider::all();
        $slider=Slider::orderBy('created_at','desc')->get();
        return view('admin.slider')->with('sliders',$slider);
    }

    public function store(Request $request)
    {
        request()->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('Sliderimages'), $imageName);

        //store Image in Database
        $slider=new Slider;
        $slider->slider_image=$imageName;
        $slider->slider_title=$request->input('slider_title');
        $slider->slider_subtitle=$request->input('slider_subtitle');
        $slider->save();
        return redirect('admin/Slider');
        // return back()

        //     ->with('success','You have successfully upload image.')

        //     ->with('image',$imageName);
            
    }

    public function destroy($id)
    {
        $slider=Slider::find($id);
        $slider->delete();
        return redirect('/admin/Slider');
    }
}
