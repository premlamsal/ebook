<?php

namespace App\Http\Controllers;
use \Illuminate\Support\Str;
use Illuminate\Http\Request; 
use App\Blog;
use App\Book;
use App\Slider;
use App\Testimonial;
class PagesController extends Controller
{
    public function home(){

        //sliders
        $sliders=Slider::all();
        //testimonial
        $testimonials=Testimonial::all();
    	//popular book retrival
    	$popularBooks=Book::orderBy('views', 'desc')->limit(8)->get();
    	//lastet book retrival
    	$latestBooks=Book::orderBy('id', 'desc')->limit(8)->get();
    	//more books retrival
    	$moreBooks=Book::inRandomOrder()->get();
    	//blog retrival

        $blogs= Blog::orderBy('created_at','desc')->limit(3)->get();
        return view('pages.index')->with(['blogs'=>$blogs,'popularBooks'=>$popularBooks,'latestBooks'=>$latestBooks,'moreBooks'=>$moreBooks,'sliders'=>$sliders,'testimonials'=>$testimonials]);
    }
}
