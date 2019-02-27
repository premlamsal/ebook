<?php

namespace App\Http\Controllers;
use \Illuminate\Support\Str;
use Illuminate\Http\Request; 
use App\Blog;
use App\Book;
use App\Slider;
use App\Testimonial;
use App\Review;
use Auth;
use App\Category;
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

    public function showBookDetails(Request $request){
         

          $book_id=$request->id;
          $book=Book::find($book_id);
          $bookCategoryId=$book->category_id;
          $categoryName=Category::find($bookCategoryId)->value('category_name');
          $reviews=Review::where('book_id',$book_id)->get();

          $rating_no=Review::where('book_id',$book_id)->get();
          $reviews_rating=Review::where('book_id',$book_id)->sum('rating');

          if(Auth::user()){
              $userId= Auth::user()->id;
            $isReviewd=Review::where('book_id',$book_id)->where('user_id',$userId)->get();

            if(count($isReviewd)>0){
              $isReviewdDone=1;
            }
            else{
               $isReviewdDone=0;
            }
          }
          else{
             $isReviewdDone=0;
          }
         


          $rating_no=count($rating_no);
          if($rating_no>0){
            $finalRating=$reviews_rating/$rating_no;
          }
          else{
            $finalRating=$reviews_rating/1;
          }
          
          $finalRating=round($finalRating);

          $category_id=$book->category_id;

         
          $relatedBooks=Book::all()->where('category_id',$category_id)->where('id','!=',$book_id);
          if($book){
             return view('pages.showbookdetails')->with(['book'=>$book,'reviews'=>$reviews,'relatedBooks'=>$relatedBooks,'finalRating'=>$finalRating,'isReviewdDone'=>$isReviewdDone,'CategoryName'=>$categoryName]);
          }
          else{
             return abort(404);
          }     
        
    }

}
