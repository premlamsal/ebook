<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyBook;
use App\Category;
use App\User;
use App\Publication;
use Auth;
use DB;
use App\Book;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
          $this->validate($request,[
        'title'=>'required',
        'abstract'=>'required',
        'isbn'=>'required',
        'page_no'=>'required',
        'tagline'=>'required',
        'category'=>'required',
        'subcategory'=>'required',
        'price'=>'required',
        'author'=>'required',
        'publication'=>'required',
        'image'=>'required|image|max:2048',
        'bookfile'=>'required',
        'edition'=>'required',
        'tags'=>'required',
        ]);
        //image handling
            if ($request->hasFile('image')) {
                $filenameWithExt=$request->file('image')->getClientOriginalName();
                $filename=pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension=$request->file('image')->getClientOriginalExtension();
                $fileNameToStore=$filename.'_'.time().'.'.$extension;
                $path=$request->file('image')->storeAs('public/Book_image',$fileNameToStore);
            }
            else{
                $fileNameToStore='noimage.jpg';
            }
            //file handling
            if ($request->hasFile('bookfile'))
             {
                $filenameWithExt=$request->file('bookfile')->getClientOriginalName();
                $filename=pathinfo($filenameWithExt, PATHINFO_FILENAME);
                //$extension=$request->file('bookfile')->getClientOriginalExtension();
                $BookfileNameToStore=$filename.'_'.time(); //.'.'.$extension;
                $Bookpath=$request->file('bookfile')->storeAs('public/Book_pdf',$BookfileNameToStore);
            }
            else{
                $BookfileNameToStore='nofile.pdf';
            }
            //cat_name
            $catid=$request->input('category');
        $cat=DB::table('categories')->where(['id'=>$catid])->value('category_name');
         //cat_name
            $subcatid=$request->input('subcategory');
        $subcat=DB::table('sub_categories')->where(['id'=>$subcatid])->value('subcategory_name');
          $user_id= 1;

        $addBook=new Book;
            $addBook->title=$request->input('title');
            $addBook->abstract=$request->input('abstract');
            $addBook->isbn=$request->input('isbn');
            $addBook->page_no=$request->input('page_no');
            $addBook->tagline=$request->input('tagline');
            $addBook->price=$request->input('price');
            $addBook->category_id=$request->input('category');
            $addBook->category=$cat;
            $addBook->sub_category=$subcat;
            $addBook->price=$request->input('price');
            $addBook->author=$request->input('author');
            $addBook->publication_id=$request->input('publication');
            $addBook->image=$fileNameToStore;
            $addBook->book_file=$BookfileNameToStore;
            $addBook->edition=$request->input('edition');
            $addBook->user_id=$user_id;
            $addBook->tags=$request->input('tags');
            $addBook->save();
         return redirect('admin/viewBook')->with('sucsess','Book Added');
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
        $this->validate($request,[
        'title'=>'required',
        'abstract'=>'required',
        'isbn'=>'required',
        'page_no'=>'required',
        'tagline'=>'required',
        'category'=>'required',
        'subcategory'=>'required',
        'price'=>'required',
        'author'=>'required',
        'publication'=>'required',
        'image'=>'required|image|max:2048',
        'bookfile'=>'required',
        'edition'=>'required',
        'tags'=>'required',
   
        ]);
        //image handling
            if ($request->hasFile('image')) {
                $filenameWithExt=$request->file('image')->getClientOriginalName();
                $filename=pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension=$request->file('image')->getClientOriginalExtension();
                $fileNameToStore=$filename.'_'.time().'.'.$extension;
                $path=$request->file('image')->storeAs('public/Book_image',$fileNameToStore);
            }
            // else{
            //     $fileNameToStore=NULL;
            // }
            //file handling
            if ($request->hasFile('bookfile'))
             {
                $filenameWithExt=$request->file('bookfile')->getClientOriginalName();
                $filename=pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension=$request->file('bookfile')->getClientOriginalExtension();
                $BookfileNameToStore=$filename.'_'.time().'.'.$extension;
                $Bookpath=$request->file('bookfile')->storeAs('public/Book_pdf',$BookfileNameToStore);
            }
            // else{
            //     $BookfileNameToStore=NULL;
            // }
 //cat_name

            $catid=$request->input('category');
        $cat=DB::table('categories')->where(['id'=>$catid])->value('category_name');
         //cat_name
            $subcatid=$request->input('subcategory');
        $subcat=DB::table('sub_categories')->where(['id'=>$subcatid])->value('subcategory_name');
          $user_id= 1;

        $editBook=Book::find($id);
            $editBook->title=$request->input('title');
            $editBook->abstract=$request->input('abstract');
            $editBook->isbn=$request->input('isbn');
            $editBook->page_no=$request->input('page_no');
            $editBook->tagline=$request->input('tagline');
            $editBook->category=$cat;
            $editBook->sub_category=$subcat;
            $editBook->category_id=$request->input('category');
            $editBook->price=$request->input('price');
            $editBook->author=$request->input('author');
            $editBook->publication_id=$request->input('publication');
            $editBook->image=$fileNameToStore;
            $editBook->book_file=$BookfileNameToStore;
            $editBook->edition=$request->input('edition');
            $editBook->user_id=$user_id;
            $editBook->tags=$request->input('tags');
      
                $editBook->save();
         return redirect('admin/viewBook')->with('sucsess','Book Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delBook=Book::find($id);
        $delBook->delete();
        return redirect('admin/viewBook')->with('success','Book Removed');
    }
}
