@extends('admin.layouts.app')
@section('content')
<div class='container-fluid'>
  <h4>Transaction Details</h4>
  <div class='row'>
    <table>
  <tr>
<th>Transaction Time</th>
    <th>Amount</th>
    <th>Points</th>
    
    <th>Customer</th>
  </tr>
  @if(count($showTransaction)>0)
      @foreach($showTransaction as $Tran)
        <!-- <div class='col-md-6'> -->
                <tr>
                    <td>
                                 {{$Tran->dateTime}}
                    </td>
                    <td>
                                 {{$Tran->amount}}
                    </td>
                    <td>
                                 {{$Tran->points}}
                    </td>
                    
                    <td>
                                {{$Tran->user_Id}}
                    </td>
                  </tr>
        <!-- </div> -->
      @endforeach
    @else
      <p>No Data Found.</p> 
    @endif 
    </table>          
  </div>
</div>
@endsection