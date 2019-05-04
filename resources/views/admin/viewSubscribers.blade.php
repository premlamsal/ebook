@extends('admin.layouts.app')
@section('content')
<div class='container-fluid'>
  <h4>All Subscribers</h4>
  <div class='row'>
   
  @if(count($subscribers)>0)
   <table>
  <tr>
    <th>Email</th>
    <th>Date(Subscribed)</th>
  </tr>
      @foreach($subscribers as $subscriber)
       <tr>
         <td>{{$subscriber->email}}</td>
          <td>{{$subscriber->created_at}}</td>
       </tr>
      @endforeach
    @else
      <p>No Data Found.</p> 
    @endif 
    </table>          
  </div>
</div>
@endsection