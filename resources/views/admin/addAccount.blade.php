@extends('admin.layouts.app')
@section('content')
<div class="container">
	<h3>Edit Account</h3>
   <form method="post" action="{{route('admin/account/Store')}}">
   @csrf
 
   <div class="form-group row">
      <label for="name">Full Name</label>
        <input type="text" class="form-control " id="name" value="" name="name" placeholder="Full Name">
   </div>
 	 <div class="form-group row">
      <label for="email">Email</label>
        <input type="text" class="form-control " id="email" value="" name="email" placeholder="example@example.xyz">
   </div>
   <div class="form-group row">
      <label for="password">Password</label>
        <input type="password" class="form-control " id="password" value="" name="password" placeholder="Password">
   </div>
   <div class="form-group row">
      <label for="address">Address</label>
        <input type="text" class="form-control " id="address" value="" name="address" placeholder="Address">
   </div>
   <div class="form-group row">
      <label for="address">Phone Number</label>
        <input type="text" class="form-control " id="phone" value="" name="phone" placeholder="Phone Number">
   </div>
   <div class="form-group row">
      <label for="radio_btn">Select Gender</label>      
        <input type="radio" value="male" name="gender"> Male
        <input type="radio" value="female" name="gender"> Female
   </div>
   <div class="form-group row">
      <button type="submit" class="btn btn-outline-success">Submit</button>
   </div>
   
</div>
@endsection