@extends('admin.layouts.app')
@section('content')
<h3>Add Category</h3>
<div class="container" style="margin-top: 20px;">
<form method="post" action="{{route('admin/category/storeCat')}}">
@csrf
   <div class="form-group row">
      <label for="cat_url"> Category Name</label>
        <input type="text" class="form-control " id="cat_name" value="" name="cat_name" placeholder="Category Name">
   </div>
<div class="form-group row">
      <button type="submit" class="btn btn-outline-success">Submit</button>
   </div>
</div>
@endsection

