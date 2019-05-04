<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Writer;

class WriterController extends Controller
{
    public function index()
    {
        $writer=Writer::all();
        return view('admin.writer')->with('writer',$writer);
    }

    public function store(Request $request)
    {
        $writer=new Writer();
        $writer->writer_name=$request->input('writer_name');
        $writer->writer_Contact=$request->input('writer_Contact');
        $writer->save();
        return back();
    }
  
    public function destroy($id)
    {
        $writer=Writer::find($id);
        $writer->delete();
        return back();
    }
}
