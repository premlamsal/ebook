<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use App\User;
use App\MyBook;
use App\Publication;
use App\Review;
use Auth;
use App\Book;
use App\Transaction;
use App\Blog;
use App\Testimonial;
use App\Gallery;
use App\Subscriber;
use App\Stationery;
use App\Order;

class AdminController extends Controller
{
    public function index()
    {
      $userNo=User::count();
      $bookNo=Book::count();
      $CatNo=Category::count();
      $blogNo=Blog::count();
      $pubNo=Publication::count();
      $TestNo=Testimonial::count();
      $subCatNo=SubCategory::count();

      return view('admin.index',compact('userNo','bookNo','CatNo','blogNo','pubNo','TestNo','subCatNo'));  

    }

     public function addCategory()
    {
      $categories= Category::all();
      return view('admin.addCategory')->with('categories',$categories);  
    }
    public function addSubCategory()
    {
      $categories= SubCategory::all();
      $cat_id=Category::all();
      return view('admin.addSubCategory',compact('categories','cat_id')); 
    }
    public function viewCategory()
    {
      $showCat= Category::orderBy('id','desc')->get();
      $showSubCat= SubCategory::orderBy('id','desc')->get();
      return view('admin.viewCategory',compact('showCat','showSubCat'));
    }
    public function editSubCategory($id)
    {
        $subcat=SubCategory::find($id);
        $cat_id= Category::all();
        return view('admin.editSubCategory',compact('subcat','cat_id'));
    }
    public function editCategory($id)
    {
       $cat=Category::find($id);
        return view('admin.editCategory')->with('cat',$cat);
    }
    public function orders(){

      $orders=Order::all();

      return view('admin.orders')->with('orders',$orders);

    }



//publication
     public function addPublication()
    {
      $public= Publication::all();
      return view('admin.addPublication')->with('public',$public);  
    }
     public function showPublication()
    {
      $public= Publication::all();
      return view('admin.showPublication')->with('public',$public);  
    }
     public function editPublication($id)
    {
      $pub= Publication::all()->first();
   
      // print_r($user_id);
      return view('admin.editPublication')->with('pub',$pub);
    }





//account
    public function addAccount()
    {
      return view('admin.addAccount');
    }
    public function viewAccount()
    {
      $showAccount= User::orderBy('id','desc')->get();
      return view('admin.viewAccount')->with('showAccount',$showAccount);
    }
    public function editAccount($id)
    {
      $account=User::find($id);
        return view('admin.editAccount')->with('account',$account);
    }

    //gallery

    public function gallery(){

      $galleries=Gallery::all();
      return view('admin.gallery')->with('galleries',$galleries);
    }

    public function addGallery(){

      return view('admin.addGallery');
    }

    public function updateGallery($id){

      $gallery=Gallery::find($id);
      return view('admin.updateGallery')->with('gallery',$gallery);
    }

    public function viewSubscribers(){

      $subscribers=Subscriber::all();
      return view('admin.viewSubscribers')->with('subscribers',$subscribers);


    }
    public function viewStationery(){
      $state_kathmandu=Stationery::where('state','0')->get();
      $state_one=Stationery::where('state','1')->get();
      $state_two=Stationery::where('state','2')->get();
      $state_three=Stationery::where('state','3')->get();
      $state_four=Stationery::where('state','4')->get();
      $state_five=Stationery::where('state','5')->get();
      $state_six=Stationery::where('state','6')->get();
      $state_seven=Stationery::where('state','7')->get();
     
      return view('admin.viewStationery')->with(['state_kathmandu'=>$state_kathmandu,'state_one'=>$state_one,'state_two'=>$state_two,'state_three'=>$state_three,'state_four'=>$state_four,'state_five'=>$state_five,'state_six'=>$state_six,'state_seven'=>$state_seven]);
   


    }
    public function addStationery(){

      return view('admin.addStationery');

    }
    public function editStationery($id){

      $stationery=Stationery::find($id);
      return view('admin.editStationery')->with('stationery',$stationery);
    }

    public function addStationeryNew(){


    }
   

    //book
    public function addBook()
    {
      $book= Book::all();
      $cat_id= Category::all();
      $subcat_id= SubCategory::all();
      $pub_id= Publication::all();
      $review_id=Review::all();
      // print_r($user_id);
      return view('admin.addBook',compact('book','cat_id','subcat_id','pub_id','review_id'));  
    }
    public function viewBook()
    {
      //$showBook= Book::all();
      $showBook=Book::orderBy('id', 'desc')->get();
      //lastet book retrival
      return view('admin.viewBook')->with('showBook',$showBook);
    }
     public function editBook($id)
    {
      $book=Book::find($id);      
      $Categories= Category::all();
      $SubCategories= SubCategory::all();
      $Publications= Publication::all();
   
      // print_r($user_id);
      return view('admin.editBook',compact('book','Categories','SubCategories','Publications'));
    }
    public function viewTransaction()
    {
      $showTransaction= Transaction::all();
      return view('admin.viewTransaction')->with('showTransaction',$showTransaction);
    }



    //AJAX for sub categories
    public function getSubCategory(Request $request){

    $id=$request->id;
      $id=$request->id;
        if($id==0){
        $output="";
        return Response($output); 
        }
        
    else{
        $column="category_id";
        $subCats=SubCategory::where($column,'=',$id)->get();
        $output="";
        $output.="<select name='subcategory' class='form-control'  required autofocus>";
      if($subCats){  
          foreach($subCats as $subCat)
          {
             
            $output.="<option value='$subCat->id'>$subCat->subcategory_name</option>";    
          }
          $output.="</select>";

          return Response($output);
      }   else{
          $output="";
        return Response($output);
      }
    }


       
    }

}
