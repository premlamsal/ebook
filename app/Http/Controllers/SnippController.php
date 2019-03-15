<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use Auth;
use URL;
use App\MyBook;
use App\Book;
use App\Review;
use App\User;
class SnippController extends Controller
{
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
            $categoryName=$fetchBookData->category;
            $sub_categoryName=$fetchBookData->sub_category;
            // $categoryName=Category::find($bookCategoryId)->value('category_name');
            //assingn fetched data to the variable one by one
            $popup_id=$fetchBookData->id;
            $popup_image=$fetchBookData->image;
            $popup_image=$publicURL.$popup_image;
            $popup_title=$fetchBookData->title;
            $popup_author=$fetchBookData->author;
            $popup_price=$fetchBookData->price;
            $popup_abstract=$fetchBookData->abstract;
            //return repsone to the ajax call with data
             return response([
                'popup_image' =>$popup_image,
                'popup_title'=>$popup_title,
                'popup_price'=>$popup_price,
                'popup_author'=>$popup_author,
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
    public function testJson(){


        
        $arrayName = array('amount' => 20000,'status'=>'Ok done' );

        $arrayName = json_encode($arrayName);
         dd($arrayName);
        $newdata=json_decode($arrayName);
         print_r($newdata->amount);


    }
    public function testing(){

        // $column="category_id";
        // $id=2;
        // $subCats=SubCategory::where($column,'=',$id)->get();
        // // $data=SubCategory::all();
        // foreach($subCats as $subCat)
        //   {
             
        //     $output="<option value='$subCat->id'>$subCat->subcategory_name</option>"; 
        //     print_r($output);   
        //   }
        print_r("This is test route");
          
         


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
