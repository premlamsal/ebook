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
use App\About;
use App\Category;
use DB;
use App\Writer;
use App\Gallery;
use App\Subscriber;
use App\MyBook;
use App\Stationery;
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
        //writer retrieve
        $writer=Writer::all();
        return view('pages.index')->with(['blogs'=>$blogs,'popularBooks'=>$popularBooks,'latestBooks'=>$latestBooks,'moreBooks'=>$moreBooks,'sliders'=>$sliders,'testimonials'=>$testimonials,'writer'=>$writer]);
    }
    public function showBuyPage(Request $request){

             $getId=$request->id;
             $book=Book::find($getId);
             $url=URL('/');

            if (isset(Auth::user()->id)) {
             $user_id=Auth::user()->id;
             $book_id=$getId;
             $isBookBought=MyBook::where('user_id',$user_id)->where('book_id',$book_id)->get();
            if($isBookBought->first()){
                $nackH1="Hurray!!!";
                $nackP="You have already bought this book.";

                    return view('pages.buybook')->with(['nackH1'=>$nackH1,'nackP'=>$nackP]);
              }
              else{
                   return view('pages.buybook')->with(['book'=>$book,'url'=>$url]);
              }
            }
           
          


    }
    public function nack(){


    }

    public function showCategory(Request $request){

      $cat_name=$request->category_name;
      $sub_cat_name="";
      $book=Book::whereCategory($cat_name)->paginate();
      return view('pages.showCategory')->with(['books'=>$book,'cat_name'=>$cat_name,'sub_cat_name'=>$sub_cat_name]);
    

    }
     public function showSubCategory(Request $request){

      $cat_name=$request->category_name;
      $sub_cat_name=$request->sub_category_name;
     
      $book=Book::where('category',$cat_name)->where('sub_category',$sub_cat_name)->paginate();
   
      return view('pages.showCategory')->with(['books'=>$book,'cat_name'=>$cat_name,'sub_cat_name'=>$sub_cat_name]);

    }

    public function search(Request $request){

      $query=$request->get('query');
      $searchBooks=Book::where('title','like','%'.$query.'%')->orWhere('category','like','%'.$query.'%')->get();
      return view('pages.showSearch')->with(['searchBooks'=>$searchBooks,'query'=>$query]);

    }

    public function about()
    {
      $about=About::all();
      $admin=DB::select('SELECT * FROM staff where staff_type="ADMINISTRATION AND FINANCE" ' );
      $marketing=DB::select('SELECT * FROM staff where staff_type="MARKETING" ' );
      
      $COMPUTER=DB::select('SELECT * FROM staff where staff_type="COMPUTER DESK" ' );
    
      $distribution=DB::select('SELECT * FROM staff where staff_type="  DISTRIBUTION COUNTER" ' );
      return view('pages.about')->with(['abouts'=>$about, 'admin'=>$admin, 'marketing'=>$marketing, 'computer'=>$COMPUTER, 'DISTRIBUTION'=>$distribution ]);

    }
    public function contact(){

      return view('pages.contact');
    }

      public function gallery(){

        $galleries=Gallery::all();
      return view('pages.gallery')->with('galleries',$galleries);
    }

     public function addSubscriber(Request $request){

    
         $this->validate($request,[
                'sub_email'=>'required|string|unique:users,email',
                ]);

        $subscriber=new Subscriber;
                    $subscriber->email=$request->input('sub_email');
                    $subscriber->save();

        return redirect('/');
                  

    }
    public function stationery(){

      $state_kathmandu=Stationery::where('state','0')->get();
      $state_one=Stationery::where('state','1')->get();
      $state_two=Stationery::where('state','2')->get();
      $state_three=Stationery::where('state','3')->get();
      $state_four=Stationery::where('state','4')->get();
      $state_five=Stationery::where('state','5')->get();
      $state_six=Stationery::where('state','6')->get();
      $state_seven=Stationery::where('state','7')->get();
     
      return view('pages.stationery')->with(['state_kathmandu'=>$state_kathmandu,'state_one'=>$state_one,'state_two'=>$state_two,'state_three'=>$state_three,'state_four'=>$state_four,'state_five'=>$state_five,'state_six'=>$state_six,'state_seven'=>$state_seven]);
     
    }


 

    public function showBookDetails(Request $request){
         

          $book_id=$request->id;
          $book=Book::find($book_id);
          // $bookCategoryId=$book->category_id;
          // $categoryName=$book->category;
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
             return view('pages.showbookdetails')->with(['book'=>$book,'reviews'=>$reviews,'relatedBooks'=>$relatedBooks,'finalRating'=>$finalRating,'isReviewdDone'=>$isReviewdDone]);
          }
          else{
             return abort(404);
          }     
        
    }

}
