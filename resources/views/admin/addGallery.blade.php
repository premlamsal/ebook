@extends('admin.layouts.app')
@section('content')
<div class="container">
  <h3>Add Gallery</h3>
   <form method="post" action="{{route('admin/gallery/save')}}" enctype="multipart/form-data">
   @csrf
    <div class="form-group row">
      <label for="title">Title</label>
        <input type="text" class="form-control " id="title" value="" name="title" placeholder="Title">
   </div>
   <div class="form-group row">
      <label for="title">Short Description</label>
        <textarea name="short_description" class="form-control " ></textarea>
   </div>
<div class="form-group row">
      <label for="imagefile" style="margin-right: 25px;">Image File</label>
        <input type="file" name="image" class="form-control">
   </div>
   
   <div class="form-group row">
      <button type="submit" class="btn btn-outline-success">Submit</button>
   </div>
 
</div>
@endsection
