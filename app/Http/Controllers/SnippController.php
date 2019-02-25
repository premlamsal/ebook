<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Auth;
use App\MyBook;
use App\Book;
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
