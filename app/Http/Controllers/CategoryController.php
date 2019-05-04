<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use DB;
class CategoryController extends Controller
{
    public function storeCat(Request $request)
    {
        $this->validate($request,[
                'cat_name'=>'required',
               ]);
        $slash= '/';
        $cat_name=$request->input('cat_name');
        $CatUrl=$slash.$cat_name;
                $addCat=new Category;
                    $addCat->category_name=$request->input('cat_name');
                    $addCat->url=$CatUrl;
                        $addCat->save();
                 return redirect('/admin')->with('sucsess','Category Added');
    }
    public function storeSubCat(Request $request)
    {
        $this->validate($request,[
                'subCat'=>'required',
                'category'=>'required',
               ]);
        $catid=$request->input('category');
        $cat=DB::table('categories')->where(['id'=>$catid])->value('category_name');
        $slash='/';
        $sub=$request->input('subCat');
        // $cat=$request->input('category');
        $CatUrl=$slash.$cat.$slash.$sub;
                $addsubCat=new SubCategory;
                    $addsubCat->subcategory_name=$request->input('subCat');
                    $addsubCat->link=$CatUrl;
                    $addsubCat->category_id=$request->input('category');
                        $addsubCat->save();
                 return redirect('/admin')->with('sucsess','Sub-Category Added');
    }


      public function Catupdate(Request $request, $id)
    {
        $this->validate($request,[
                'cat_name'=>'required',
               ]);
        $slash= '/';
        $cat_name=$request->input('cat_name');
        $CatUrl=$slash.$cat_name;
                $addCat=Category::find($id);
                    $addCat->category_name=$request->input('cat_name');
                    $addCat->url=$CatUrl;
                        $addCat->save();
                 return redirect('/admin')->with('sucsess','Category Added');
    }
    public function SubCatupdate(Request $request, $id)
    {
        $this->validate($request,[
                'subCat'=>'required',
                'category'=>'required',
               ]);
        $catid=$request->input('category');
        $cat=DB::table('categories')->where(['id'=>$catid])->value('category_name');
        $slash='/';
        $sub=$request->input('subCat');
        // $cat=$request->input('category');
        $CatUrl=$slash.$cat.$slash.$sub;
                $addsubCat=SubCategory::find($id);
                    $addsubCat->subcategory_name=$request->input('subCat');
                    $addsubCat->link=$CatUrl;
                    $addsubCat->category_id=$request->input('category');
                        $addsubCat->save();
                 return redirect('/admin')->with('sucsess','Sub-Category Added');
    }
   
    
     public function Catdestroy($id)
    {
        $delCat=Category::find($id);
        $delCat->delete();
        return redirect('admin/viewCategory')->with('success','Category Removed');
    }
    public function SubCatdestroy($id)
    {
        $delSubCat=SubCategory::find($id);
        $delSubCat->delete();
        return redirect('admin/viewCategory')->with('success','Sub-Category Removed');
    }
     
}
