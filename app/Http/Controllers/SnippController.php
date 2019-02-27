<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Auth;
use URL;
use App\MyBook;
use App\Book;
use App\Review;
use App\User;
class SnippController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // Where ever you want your menu
    public function Category()
    {
       $Category = Category::all()->load('subcategory');

       //print_r($menu);

       return view('Category',compact('Category'));
    }

    public function fetchBookDataPopup(Request $request){
            $publicURL=URL::to('/storage/Book_image');
            $publicURL=$publicURL.'/';
            $publicURLHome=URL::to('/');
            //get book id from ajax call
            $book_id=$request->getId;
            //searching for book of id
            $fetchBookData=Book::find($book_id);
            $bookCategoryId=$fetchBookData->category_id;
            $categoryName=Category::find($bookCategoryId)->value('category_name');
            //assingn fetched data to the variable one by one
            $popup_id=$fetchBookData->id;
            $popup_image=$fetchBookData->image;
            $popup_image=$publicURL.$popup_image;
            $popup_title=$fetchBookData->author;
            $popup_price=$fetchBookData->price;
            $popup_abstract=$fetchBookData->abstract;
            //return repsone to the ajax call with data
             return response([
                'popup_image' =>$popup_image,
                'popup_title'=>$popup_title,
                'popup_price'=>$popup_price,
                'popup_abstract'=>$popup_abstract,
                'publicURL'=>$publicURLHome,
                'categoryName'=>$categoryName,
            ]);

    }
    public function reviewStore(Request $request){
            $request->validate([
            'rating'=>'required',
            'review_body'=>'required',
         ]);

         $userId= Auth::user()->id;
         $username=User::find($userId)->value('name');
         $Review = Review::create([
              'user_id'=>$userId,
              'title'=>$username,
              'rating' => $request->get('rating'),
              'body' => $request->get('review_body'),
              'book_id'=>$request->get('book_id')

          ]);
          
            return redirect('/book/'.$request->get('book_id'));
    }


   

    // public function fetchBook(Request $request){

    //     $page_no=$request->page_no;
    //     $action=$request->action;
            
    //         $url=asset('uploads/test.jpg?');
    //         if($action){

    //             switch ($action) {
    //                 case 'prev':
    //                   $page_no=$page_no-1;
    //                     break;
    //                 case 'next':
    //                    $page_no=$page_no+1;
    //                     break;
                    
    //                 default:
                      
    //                     break;
    //             }
         
    //         session(['page_no' => $page_no]);
            
    //         $page_no = $request->session()->get('page_no');
    //         $bookFile=$request->session()->get('bookFile');
    //         $pathToPdf="storage/Book_pdf/".$bookFile;
    //         $saveImagePath="uploads/test.jpg";
    //         $pdf = new \Spatie\PdfToImage\Pdf($pathToPdf);
    //         $page_no=$page_no;
    //         $pdf->setPage($page_no);
    //         $pdf->saveImage($saveImagePath);
    //         $imageGETURL=asset('uploads');
    //         return response([
    //             'session_page_no' => $page_no,
    //             'url'=>$url,
    //         ]);
    //     }
        
    // }

}
