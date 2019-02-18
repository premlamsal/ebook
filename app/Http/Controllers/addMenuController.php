<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addMenuController extends Controller
{
    public function addMenu(){
    	return view('admin.addMenu');
    }
}
