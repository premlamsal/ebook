<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use URL;
use App\MyBook;
use App\Book;
use DB;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (isset(Auth::user()->id)) {
            $user_id=Auth::user()->id;
            $userName=Auth::user()->name;
            //$my_books=MyBook::where('user_id',$user_id)->get();
            $my_books= Book::join('my_books','my_books.book_id','books.id')
            ->where('my_books.user_id',$user_id)
            ->select('books.*')
            ->get();
            return view('customer.index')->with(['userName'=>$userName,'my_books'=>$my_books]);
            }
            else{
                print_r("Please Login!!!");
         }

    }

    public function readBook()
    {
        $filename=URL::to('/uploads/file.swf');
        return view('customer.readBook')->with('filename',$filename);
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
    public function viewBook($book_id,Request $request){

        print_r($book_id);

    }


    public function ShowReadPage($book_id,Request $request){
        if(isset(Auth::user()->id)){
            if($book_id){
              $user_id=Auth::user()->id;
               $fetch = MyBook::where(['user_id'=>$user_id,'book_id'=>$book_id])->get();
                if ($fetch->first()) {

                   $bookFile=Book::find($book_id);
                               if($bookFile){
              
                                //  if ($request->session()->has('page_no')) {
                                //     //  $request->session()->put('page_no', 1);
                                // }
                                // else{
                                    session(['page_no' => 1]);
                                // }
                                $bookFile=$bookFile->book_file;
                               
                                session(['bookFile' => $bookFile]);
                                $page_no = $request->session()->get('page_no');
                                $filePath="storage/Book_pdf/".$bookFile;
                              
                                $saveImagePath="uploads/test.jpg";
                                $pathToPdf=$filePath;
                                $pdf = new \Spatie\PdfToImage\Pdf($pathToPdf);

                               // $pdf->setResolution(100);

                                $pdf->setPage(1);
                                $pdf->saveImage($saveImagePath);
                                return view('customer.readbook')->with('page_no',$page_no);

                               }
                               else{
                                     return abort(404);
                               }
                 
                             }
                    else{
                       return abort(404);
                      }

            }

            else{
               return abort(404);
            }
        }
        else{
            print_r("Please Login");
        }
    }
   


}
