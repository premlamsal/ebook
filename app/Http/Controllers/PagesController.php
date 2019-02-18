<?php

namespace App\Http\Controllers;
use \Illuminate\Support\Str;
use Illuminate\Http\Request; 
use App\Blog;
class PagesController extends Controller
{
    public function index(){
        $blogs= Blog::orderBy('created_at','desc')->limit(3)->get();
        return view('pages.index')->with('blogs',$blogs);
    }
}
