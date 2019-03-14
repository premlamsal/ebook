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

class AdminController extends Controller
{
    public function index()
    {
      return view('admin.index');  
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


      $book= Book::all()->first();
      
      $cat_id= Category::all();
      $subcat_id= SubCategory::all();
      $pub_id= Publication::all();
   
      // print_r($user_id);
      return view('admin.editBook',compact('book','cat_id','subcat_id','pub_id'));
    }
    public function viewTransaction()
    {
      $showTransaction= Transaction::all();
      return view('admin.viewTransaction')->with('showTransaction',$showTransaction);
    }



    //AJAX for sub categories
      public function getCategory(Request $request){
        $id=$request->get('id');
    if($id==0){
        $output="";
        return Response($output); 
        }
        
    else{
      $column="SubCat_id";
        $subCategory=SubCategory::where($column,'=',$id)->get();
        $output="";
        $output.="<select name='category' class='form-control category_options'  required autofocus>";
      if($subCategory){  
          foreach($subCategory as $subcategory)
          {
             
            $output.="<option value='$subcategory->id'>$subcategory->subcategory_name</option>";    
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
