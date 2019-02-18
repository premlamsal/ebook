@extends('admin.layouts.app')
@section('content')
<div class='container-fluid'>
  <h4>All Account Name</h4>
  <div class='row'>
    <table>
  <tr>
    <th>User Name</th>
    <th>Address</th>
    <th>Phone Number</th>
    <th>Gender</th>
    <th>Operation</th>
  </tr>
  @if(count($showAccount)>0)
      @foreach($showAccount as $account)
        <!-- <div class='col-md-6'> -->
                <tr>
                    <td>
                                 {{$account->name}}
                    </td>
                    <td>
                                 {{$account->address}}
                    </td>
                    <td>
                                 {{$account->phone}}
                    </td>
                    <td>
                                 {{$account->gender}}
                    </td>
                    <td>

                                  <a href="{{URL('/admin/'.$account->id.'/editAccount')}}" class='btn btn-info' role='button' style='width:100%;'>Edit</a>
                                  {!! Form::open(['action'=>['AccountController@destroy',$account->id],'method'=>'POST']) !!} 
                                  {{Form::hidden('_method','DELETE')}}
                                  {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                  {!!Form::close()!!}
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