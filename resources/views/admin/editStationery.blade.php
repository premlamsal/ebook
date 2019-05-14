@extends('admin.layouts.app')
@section('content')
<div class="container">
  <h3>Edit Stationery</h3>
   <form method="post" action="{{route('admin.stationery.update')}}" enctype="multipart/form-data">
   @csrf
   <input type="hidden" name="getId" value="{{$stationery->id}}">
    <div class="form-group row">
      <label for="title">Name</label>
        <input type="text" class="form-control " id="name" value="{{$stationery->name}}" name="name" placeholder="Enter the Name">
   </div>
   <div class="form-group row">
      <label for="isbn">Address</label>
        <input type="text" class="form-control " id="address" value="{{$stationery->address}}" name="address" placeholder="address">
   </div>
   <div class="form-group row">
      <label for="page_no">Phone</label>
        <input type="text" class="form-control " id="phone" value="{{$stationery->phone}}" name="phone" placeholder="Phone">
   </div>
   <div class="form-group row">
      <label for="tagline">Mobile</label>
        <input type="text" class="form-control " id="mobile" value="{{$stationery->mobile}}" name="mobile" placeholder="Mobile">
   </div>
   <div class="form-group row">
      <label for="tagline">Proprietor</label>
        <input type="text" class="form-control " id="proprietor" value="{{$stationery->proprietor}}" name="proprietor" placeholder="Proprietor">
   </div>
   <div class="form-group row">
      <label for="radio_btn">Select State</label>
      <select name="state" class="form-control">
            @if($stationery->state=='0')
             <option value="0" selected="">Kathmandu</option>
             <option value="1">Pradesh 1</option>
             <option value="2">Pradesh 2</option>
             <option value="3">Pradesh 3</option>
             <option value="4">Pradesh 4</option>
             <option value="5">Pradesh 5</option>
             <option value="6">Pradesh 6</option>
             <option value="7">Pradesh 7</option>
            @elseif($stationery->state=='1')
             <option value="0">Kathmandu</option>
             <option value="1" selected="">Pradesh 1</option>
             <option value="2">Pradesh 2</option>
             <option value="3">Pradesh 3</option>
             <option value="4">Pradesh 4</option>
             <option value="5">Pradesh 5</option>
             <option value="6">Pradesh 6</option>
             <option value="7">Pradesh 7</option>
              @elseif($stationery->state=='2')
             <option value="0">Kathmandu</option>
             <option value="1">Pradesh 1</option>
             <option value="2" selected="">Pradesh 2</option>
             <option value="3">Pradesh 3</option>
             <option value="4">Pradesh 4</option>
             <option value="5">Pradesh 5</option>
             <option value="6">Pradesh 6</option>
             <option value="7">Pradesh 7</option>
              @elseif($stationery->state=='3')
             <option value="0">Kathmandu</option>
             <option value="1" selected="">Pradesh 1</option>
             <option value="2">Pradesh 2</option>
             <option value="3" selected="">Pradesh 3</option>
             <option value="4">Pradesh 4</option>
             <option value="5">Pradesh 5</option>
             <option value="6">Pradesh 6</option>
             <option value="7">Pradesh 7</option>
              @elseif($stationery->state=='4')
             <option value="0">Kathmandu</option>
             <option value="1" selected="">Pradesh 1</option>
             <option value="2">Pradesh 2</option>
             <option value="3">Pradesh 3</option>
             <option value="4" selected="">Pradesh 4</option>
             <option value="5">Pradesh 5</option>
             <option value="6">Pradesh 6</option>
             <option value="7">Pradesh 7</option>
              @elseif($stationery->state=='5')
             <option value="0">Kathmandu</option>
             <option value="1" selected="">Pradesh 1</option>
             <option value="2">Pradesh 2</option>
             <option value="3">Pradesh 3</option>
             <option value="4">Pradesh 4</option>
             <option value="5" selected="">Pradesh 5</option>
             <option value="6">Pradesh 6</option>
             <option value="7">Pradesh 7</option>
              @elseif($stationery->state=='6')
             <option value="0">Kathmandu</option>
             <option value="1">Pradesh 1</option>
             <option value="2">Pradesh 2</option>
             <option value="3">Pradesh 3</option>
             <option value="4">Pradesh 4</option>
             <option value="5">Pradesh 5</option>
             <option value="6" selected="">Pradesh 6</option>
             <option value="7">Pradesh 7</option>
              @elseif($stationery->state=='7')
             <option value="0">Kathmandu</option>
             <option value="1">Pradesh 1</option>
             <option value="2">Pradesh 2</option>
             <option value="3">Pradesh 3</option>
             <option value="4">Pradesh 4</option>
             <option value="5">Pradesh 5</option>
             <option value="6">Pradesh 6</option>
             <option value="7" selected="">Pradesh 7</option>
             @endif

        </select>
   </div>

   <div class="form-group row">
      <button type="submit" class="btn btn-outline-success">Submit</button>
   </div>
 
</div>
@endsection

@section('PageScripts')

@endsection