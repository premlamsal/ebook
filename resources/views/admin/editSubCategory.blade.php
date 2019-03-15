@extends('admin.layouts.app')
@section('content')
<div class="container">
  <h3>Edit Sub-Category</h3>
   <form method="post" action="{{url('/')}}/admin/SubCategory/{{$subcat->id}}" enctype="multipart/form-data">
   @csrf
   {{ method_field('PUT') }}
    <div class="form-group row">
      <label for="title">Sub-Category Name</label>
        <input type="text" class="form-control " id="subCat"  name="subCat" value="{{$subcat->subcategory_name}}">
   </div>
  <div class="form-group row">
      <label for="category">Select Category</label>
      <select name="category" class="form-control  country_to_state" id="category">
            @foreach ($cat_id as $category)
             <option value="{{$category->id}}"
                 @if($subcat->category_id == $category->id)
                 {{'selected="selected"'}}
                 @endif 
              >{{$category->category_name}}</option>
           @endforeach
        </select>
   </div>
  
   <div class="form-group row">
      <button type="submit" class="btn btn-outline-success">Submit</button>
   </div>
 
</div>
@endsection
