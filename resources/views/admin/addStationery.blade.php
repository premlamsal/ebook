@extends('admin.layouts.app')
@section('content')
<div class="container">
  <h3>Add Stationery</h3>
   <form method="post" action="{{route('admin.stationery.store')}}" enctype="multipart/form-data">
   @csrf
    <div class="form-group row">
      <label for="title">Name</label>
        <input type="text" class="form-control " id="name" value="" name="name" placeholder="Enter the Name">
   </div>
   <div class="form-group row">
      <label for="isbn">Address</label>
        <input type="text" class="form-control " id="address" value="" name="address" placeholder="address">
   </div>
   <div class="form-group row">
      <label for="page_no">Phone</label>
        <input type="text" class="form-control " id="phone" value="" name="phone" placeholder="Phone">
   </div>
   <div class="form-group row">
      <label for="tagline">Mobile</label>
        <input type="text" class="form-control " id="mobile" value="" name="mobile" placeholder="Mobile">
   </div>
   <div class="form-group row">
      <label for="tagline">Proprietor</label>
        <input type="text" class="form-control " id="proprietor" value="" name="proprietor" placeholder="Proprietor">
   </div>
   <div class="form-group row">
      <label for="radio_btn">Select State</label>
      <select name="state" class="form-control">
             <option value="0">Kathmandu</option>
             <option value="1">Pradesh 1</option>
             <option value="2">Pradesh 2</option>
             <option value="3">Pradesh 3</option>
             <option value="4">Pradesh 4</option>
             <option value="5">Pradesh 5</option>
             <option value="6">Pradesh 6</option>
             <option value="7">Pradesh 7</option>
        </select>
   </div>

   <div class="form-group row">
      <button type="submit" class="btn btn-outline-success">Submit</button>
   </div>
 
</div>
@endsection

@section('PageScripts')

@endsection