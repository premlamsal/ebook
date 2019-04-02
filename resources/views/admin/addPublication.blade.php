@extends('admin.layouts.app')
@section('content')
<div class="container">
  <h3>Add Publication</h3>
   <form method="post" action="{{route('admin/Publication/Store')}}" enctype="multipart/form-data">
   @csrf
    <div class="form-group row">
      <label for="title">Name</label>
        <input type="text" class="form-control " id="name" value="" name="name" placeholder="Name">
   </div>
   <div class="form-group row">
      <label for="abstract">Address</label>
        <input type="text" class="form-control " id="address" value="" name="address" placeholder="Address">
   </div>
   <div class="form-group row">
      <label for="isbn">PostBox Number</label>
        <input type="text" class="form-control " id="pobox" value="" name="pobox" placeholder="PostBox Number">
   </div>
   <div class="form-group row">
      <label for="page_no">Phone</label>
        <input type="text" class="form-control " id="phone" value="" name="phone" placeholder="Phone">
   </div>
   <div class="form-group row">
      <label for="tagline">Fax Number</label>
        <input type="text" class="form-control " id="fax" value="" name="fax" placeholder="Fax Number">
   </div>
    <div class="form-group row">
      <label for="tagline">Email Address</label>
        <input type="text" class="form-control " id="email" value="" name="email" placeholder="Email Address">
   </div>
    <div class="form-group row">
      <label for="tagline">Website</label>
        <input type="text" class="form-control " id="website" value="" name="website" placeholder="Website">
   </div>
    <div class="form-group row">
      <label for="tagline">Tagline</label>
        <input type="text" class="form-control " id="tagline" value="" name="tagline" placeholder="Tagline">
   </div>
   
   <div class="form-group row">
      <button type="submit" class="btn btn-outline-success">Submit</button>
   </div>
 
</div>
@endsection