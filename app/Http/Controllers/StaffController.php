<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;

class StaffController extends Controller
{
    
    public function index()
    {
        $staff=Staff::all();
        return view('admin.staff')->with('staff', $staff);
    }

    public function store(Request $request)
    {
        request()->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('img/staffImages'), $imageName);

        $staff=new Staff();
        $staff->staff_image=$imageName;
        $staff->staff_name=$request->input('staff_name');
        $staff->staff_position=$request->input('staff_position');
        $staff->contact_info=$request->input('contact_info');
        $staff->staff_type=$request->input('staff_type');
        $staff->save();
        return back();
    }

    public function edit($id)
    {
        $staff=Staff::find($id);
        return view('admin.editStaff')->with('staff', $staff);
    }   

   
    public function update(Request $request, $id)
    {
        $staff=Staff::find($id);
        $staff->staff_image=$imageName;
        $staff->staff_name=$request->input('staff_name');
        $staff->staff_position=$request->input('staff_position');
        $staff->contact_info=$request->input('contact_info');
        $staff->staff_type=$request->input('staff_type');
        $staff->save();
        return back();
    }

   
    public function destroy($id)
    {
        $staff=Staff::find($id);
        $staff->delete();
        return back();
    }
}
