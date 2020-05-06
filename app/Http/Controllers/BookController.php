<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use DB;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'       => 'required',
            'abstract'    => 'required',
            // 'isbn'        => 'required',
            'page_no'     => 'required',
            'tagline'     => 'required',
            'category'    => 'required',
            'subcategory' => 'required',
            'price'       => 'required',
            'author'      => 'required',
            'publication' => 'required',
            'image'       => 'required|image|max:2048',
            'bookfile'    => 'required',
            'edition'     => 'required',
            'tags'        => 'required',
        ]);
        //image handling
        if ($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension       = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path            = $request->file('image')->storeAs('public/Book_image', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        //file handling
        if ($request->hasFile('bookfile')) {
            $filenameWithExt = $request->file('bookfile')->getClientOriginalName();
            $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //$extension=$request->file('bookfile')->getClientOriginalExtension();
            $BookfileNameToStore = $filename . '_' . time(); //.'.'.$extension;

            $Bookpath = $request->file('bookfile')->storeAs('book', $BookfileNameToStore);
        } else {
            $BookfileNameToStore = 'nofile.pdf';
        }
        //cat_name
        $catid = $request->input('category');
        $cat   = DB::table('categories')->where(['id' => $catid])->value('category_name');
        //cat_name
        $subcatid = $request->input('subcategory');
        $subcat   = DB::table('sub_categories')->where(['id' => $subcatid])->value('subcategory_name');
        $user_id  = 1;

        $addBook                 = new Book;
        $addBook->title          = $request->input('title');
        $addBook->abstract       = $request->input('abstract');
        $addBook->isbn           = $request->input('isbn');
        $addBook->page_no        = $request->input('page_no');
        $addBook->tagline        = $request->input('tagline');
        $addBook->price          = $request->input('price');
        $addBook->category_id    = $request->input('category');
        $addBook->category       = $cat;
        $addBook->sub_category   = $subcat;
        $addBook->price          = $request->input('price');
        $addBook->author         = $request->input('author');
        $addBook->publication_id = $request->input('publication');
        $addBook->image          = $fileNameToStore;
        $addBook->book_file      = $BookfileNameToStore;
        $addBook->edition        = $request->input('edition');
        $addBook->user_id        = $user_id;
        $addBook->tags           = $request->input('tags');
        $addBook->save();
        return redirect('admin/viewBook')->with('sucsess', 'Book Added');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'       => 'required',
            'abstract'    => 'required',
            // 'isbn'        => 'required',
            'page_no'     => 'required',
            'tagline'     => 'required',
            'category'    => 'required',
            'subcategory' => 'required',
            'price'       => 'required',
            'author'      => 'required',
            'publication' => 'required',
            'image'       => 'required|image|max:2048',
            'bookfile'    => 'required',
            'edition'     => 'required',
            'tags'        => 'required',

        ]);
        //image handling
        if ($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension       = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path            = $request->file('image')->storeAs('public/Book_image', $fileNameToStore);
        }
        // else{
        //     $fileNameToStore=NULL;
        // }
        //file handling
        if ($request->hasFile('bookfile')) {
            $filenameWithExt     = $request->file('bookfile')->getClientOriginalName();
            $filename            = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension           = $request->file('bookfile')->getClientOriginalExtension();
            $BookfileNameToStore = $filename . '_' . time(); //.'.'.$extension;
            $Bookpath            = $request->file('bookfile')->storeAs('book', $BookfileNameToStore);
        }
        // else{
        //     $BookfileNameToStore=NULL;
        // }
        //cat_name

        $catid = $request->input('category');
        $cat   = DB::table('categories')->where(['id' => $catid])->value('category_name');
        //cat_name
        $subcatid = $request->input('subcategory');
        $subcat   = DB::table('sub_categories')->where(['id' => $subcatid])->value('subcategory_name');
        $user_id  = 1;

        $editBook                 = Book::find($id);
        $editBook->title          = $request->input('title');
        $editBook->abstract       = $request->input('abstract');
        $editBook->isbn           = $request->input('isbn');
        $editBook->page_no        = $request->input('page_no');
        $editBook->tagline        = $request->input('tagline');
        $editBook->category       = $cat;
        $editBook->sub_category   = $subcat;
        $editBook->category_id    = $request->input('category');
        $editBook->price          = $request->input('price');
        $editBook->author         = $request->input('author');
        $editBook->publication_id = $request->input('publication');
        $editBook->image          = $fileNameToStore;
        $editBook->book_file      = $BookfileNameToStore;
        $editBook->edition        = $request->input('edition');
        $editBook->user_id        = $user_id;
        $editBook->tags           = $request->input('tags');

        $editBook->save();
        return redirect('admin/viewBook')->with('sucsess', 'Book Updated');
    }

    public function destroy($id)
    {
        $delBook = Book::find($id);
        try {
            $delBook->delete();
            return redirect('admin/viewBook')->with('success', 'Book Removed');

        } catch (\Illuminate\Database\QueryException $e) {
            // print_r($e->errorInfo);
            return redirect('admin/viewBook')->with('error', 'Book can\'t be deleted. Customer has bought this book or associated with other function in the application.');
            // Example output from MySQL
            // array (size=3)
            //    0 => string '23000' (length=5)
            //    1 => int 1452
            //    2 => string 'Cannot add or update a child row: a foreign key constraint fails (...)'
        }

    }
}
