<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use DB;

class BlogController extends Controller
{
    /**
         * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  $blogs=DB::select('SELECT * FROM blogs ORDER BY id DESC LIMIT 3');
        $blogs= Blog::orderBy('created_at','desc')->paginate(4);
       
        return view('blog.index')->with('blogs',$blogs);
    }
public function addBlog(){

    return view('admin.addBlog');
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
        request()->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('img/blogImages'), $imageName);

        $blogs= new Blog;
        $blogs->blog_image=$imageName;
        $blogs->blog_title=$request->input('blog_title');
        $blogs->blog_body=$request->input('blog_body');
        $blogs->save();
        return redirect('admin/showBlog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $blog= Blog::find($id);
        $blogs= Blog::orderBy('created_at','desc')->get();
        return view('blog.show')->with(['blog'=>$blog, 'blogs'=>$blogs]);
        
       
    }
    public function showAdmin()
    {
        $blogs= Blog::orderBy('created_at','desc')->get();

            return view('admin.showBlog')->with('blog',$blogs);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editBlog($id)
    {
        $blogs=Blog::find($id);
     
        return view('admin.editBlog')->with('blog', $blogs);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateBlog(Request $request, $id)
    {
        $this->validate($request, [
            'blog_title'=> 'required',
            'blog_body' => 'required'
        ]);
        $blog=Blog::find($id);
        $blog->blog_title=$request->input('blog_title');
        $blog->blog_body=$request->input('blog_body');
        $blog->save();
        return redirect('admin/showBlog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyBlog($id)
    {
        $blogs=Blog::find($id);
        $blogs->delete();
        return redirect('admin/showBlog');
    }
}
