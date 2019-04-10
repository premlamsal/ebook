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

    $getWishlists=Wishlist::where('wishlists.user_id', $userId)->join('books','wishlists.book_id','=','books.id')->select('books.title','books.price','books.image','wishlists.id')->get();


    return view('pages.wishlist')->with('Wishlists',$getWishlists);

    }

    public function add($book_id){

        if (Auth::check()){
        //check item exits on wishlist table or not
        $checkWishlist=Wishlist::where('book_id', $book_id); 
            if(!$checkWishlist->first()){
                $Wishlist=new Wishlist;
                $Wishlist->user_id=auth()->user()->id;
                $Wishlist->book_id=$book_id;
                $Wishlist->save();
             }
        }  

    }
    public function remove($id)
    {
        $Wishlist=Wishlist::find($id);
        $Wishlist->delete();
        return redirect('wishlist')->with('success','Book Removed');
    }

}
