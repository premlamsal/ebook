@extends('admin.layouts.app')
@section('content')
<h3>Add Category</h3>
<div class="container" style="margin-top: 20px;">
<form method="post" action="{{route('admin/category/storeSubCat')}}">
@csrf
   <div class="form-group row">
      <label for="tagline">Sub-Category Name</label>
        <input type="text" class="form-control " id="subCat" value="" name="subCat" placeholder="Sub-Category Name">
   </div>
   <div class="form-group row">
      <label for="radio_btn">Select Category</label>
      <select name="category" class="form-control  country_to_state" id="category">
            <option value="0">Select a Category</option>
            @foreach ($cat_id as $category)
             <option value="{{$category->id}}">{{$category->category_name}}</option>
           @endforeach
        </select>
   </div>
<div class="form-group row">
      <button type="submit" class="btn btn-outline-success">Submit</button>
   </div>
</div>
@endsection

