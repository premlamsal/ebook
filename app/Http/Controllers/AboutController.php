<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function index()
    {
        $about = About::all();
        return view('admin.addAbout')->with('about', $about);
    }

    public function edit($id)
    {
        $about = About::find($id);
        if ($about) {

            return view('admin.addAbout')->with('about', $about);

        } else {
            $about             = new About();
            $about->about_body = "Sample text. Please change from admin section.";

            if ($about->save()) {
                return view('admin.addAbout')->with('about', $about);
            } else {
                echo "There is not about content in database. Failed creating it.";
            }

        }

    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'about_body' => 'required',
        ]);
        $about             = About::find($id);
        $about->about_body = $request->input('about_body');
        $about->save();
        return back();
    }

}
