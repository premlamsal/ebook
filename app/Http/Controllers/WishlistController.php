<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wishlist;
use Auth;
use App\Book;

class WishlistController extends Controller
{
    public function show(){

    $userId=auth()->user()->id;
  //  $Wishlists=Wishlist::where('user_id', $userId)->get(); 

    $getWishlists=Wishlist::where('wishlists.user_id', $userId)->join('books','wishlists.book_id','=','books.id')->select('books.title','books.price','books.image','wishlists.id','wishlists.book_id')->get();


    return view('pages.wishlist')->with('Wishlists',$getWishlists);

    }

    public function add(Request $request){

        //get book id from ajax call
        $book_id=$request->getId;

        if (Auth::check()){
        //check item exits on wishlist table or not
        $checkWishlist=Wishlist::where('book_id', $book_id); 
            if(!$checkWishlist->first()){
                $Wishlist=new Wishlist;
                $Wishlist->user_id=auth()->user()->id;
                $Wishlist->book_id=$book_id;
                $Wishlist->save();
                //sent message to the ajax call to show the user
                $message="Book added to Wishlist"; 
               
             }
             else{
                 $message="Book already in Wishlist";
             }
        }  
       return response([
                'message' =>$message,
        ]);  

    }
    public function remove(Request $request)
    {
         //get book id from ajax call
        $id=$request->getId;
        $Wishlist=Wishlist::find($id);
        $Wishlist->delete();
        //sent message to the ajax call to show the user
        $message="Item Removed from your Wislist"; 
         return response([
                'message' =>$message,
        ]);  
    }

}
