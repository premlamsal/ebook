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
        $userId=auth()->user()->id;
        //get book id from ajax call
        $book_id=$request->getId;
      $matchThese = ['book_id' => $book_id, 'user_id' => $userId,];
        if (Auth::check()){
        //check item exits on wishlist table or not
        $checkWishlist=Wishlist::where($matchThese)->get(); 
            if(!$checkWishlist->first()){
                $Wishlist= new Wishlist;
                $Wishlist->user_id=$userId;
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
        $userId=auth()->user()->id;
        //get book id from ajax call
        $id=$request->getId;
        $Wishlist=Wishlist::find($id);
        $table_user_id=$Wishlist->user_id;
        if($table_user_id==$userId){

            $Wishlist->delete();    
            
            $message="Item Removed from your Wislist"; 
        }
       //sent message to the ajax call to show the user
         return response([
                'message' =>$message,
        ]);  
    }

}
