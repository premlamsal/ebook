@extends('admin.layouts.app')
@section('content')
<div class='container-fluid'>
  <h4>All orders</h4>
  <div class='row'>
   
  @if(count($orders)>0)
   <table>
  <tr>
    <th>Title</th>
    <th>Quantity</th>
    <th>Email</th>
    <th>Phone</th>
  </tr>
      @foreach($orders as $subscriber)
       <tr>
         <td>{{$subscriber->email}}</td>
         <td>{{$subscriber->quantity}}</td>
         <td>{{$subscriber->email}}</td>
         <td>{{$subscriber->phone}}</td>
          
       </tr>
      @endforeach
    @else
      <p>No Data Found.</p> 
    @endif 
    </table>          
  </div>
</div>
@endsection