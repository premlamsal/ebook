<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
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

    public function convert(){
        $pdf_file_path="done/resume.pdf";
        $folder_path_for_images="done/";
        $pdflib = new ImalH\PDFLib\PDFLib();
        $pdflib->setPdfPath($pdf_file_path);
        $pdflib->setOutputPath($folder_path_for_images);
        $pdflib->setImageFormat(\ImalH\PDFLib\PDFLib::$IMAGE_FORMAT_PNG);
        $pdflib->setDPI(300);
        $pdflib->setPageRange(1,$pdflib->getNumberOfPages());
        $pdflib->convert();

        $message="Conversion Done";
        return view('convert')->with('message',$message);
    }
}
