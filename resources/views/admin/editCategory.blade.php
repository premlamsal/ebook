@extends('admin.layouts.app')
@section('content')
<div class="container">
  <h3>Edit Category</h3>
   <form method="post" action="{{url('/')}}/admin/Category/{{$cat->id}}" enctype="multipart/form-data">
   @csrf
   {{ method_field('PUT') }}
    <div class="form-group row">
      <label for="title">Category Name</label>
        <input type="text" class="form-control " id="cat_name"  name="cat_name" value="{{$cat->category_name}}">
   </div>
  
  
   <div class="form-group row">
      <button type="submit" class="btn btn-outline-success">Submit</button>
   </div>
 
</div>
@endsection