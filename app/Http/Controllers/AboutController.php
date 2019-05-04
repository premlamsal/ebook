<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
    
    public function index()
    {
        $about=About::all();
        return view('admin.addAbout')->with('about',$about);
    }

  
    public function edit($id)
    {
        $about=About::find($id);
        return view('admin.addAbout')->with('about',$about);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'about_body' => 'required'
        ]);
        $about=About::find($id);
        $about->about_body=$request->input('about_body');
        $about->save();
        return back();
    }

   
}
