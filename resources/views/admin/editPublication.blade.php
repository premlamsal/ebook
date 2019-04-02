@extends('admin.layouts.app')
@section('content')
<div class="container">
  <h3>Edit Publication</h3>
   <form method="post" action="{{url('/')}}/admin/Publication/{{$pub->id}}" enctype="multipart/form-data">
   @csrf
   {{ method_field('PUT') }}
    <div class="form-group row">
      <label for="title">Name</label>
        <input type="text" class="form-control " id="name" value="{{$pub->name}}" name="name" >
   </div>
   <div class="form-group row">
      <label for="abstract">Address</label>
        <input type="text" class="form-control " id="address" value="{{$pub->address}}" name="address" >
   </div>
   <div class="form-group row">
      <label for="isbn">PostBox Number</label>
        <input type="text" class="form-control " id="pobox" value="{{$pub->pobox}}" name="pobox" >
   </div>
   <div class="form-group row">
      <label for="page_no">Phone</label>
        <input type="text" class="form-control " id="phone" value="{{$pub->phone}}" name="phone" >
   </div>
   <div class="form-group row">
      <label for="tagline">Fax Number</label>
        <input type="text" class="form-control " id="fax" value="{{$pub->fax}}" name="fax" >
   </div>
    <div class="form-group row">
      <label for="tagline">Email Address</label>
        <input type="text" class="form-control " id="email" value="{{$pub->email}}" name="email" >
   </div>
    <div class="form-group row">
      <label for="tagline">Website</label>
        <input type="text" class="form-control " id="website" value="{{$pub->website}}" name="website" >
   </div>
    <div class="form-group row">
      <label for="tagline">Tagline</label>
        <input type="text" class="form-control " id="tagline" value="{{$pub->tagline}}" name="tagline" >
   </div>
   
    <div class="form-group row">
      <button type="submit" class="btn btn-outline-success">Submit</button>
   </div>
 
</div>
@endsection