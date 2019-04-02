@extends('admin.layouts.app')
@section('content')
<div class='container-fluid'>
  <h4>All Publication</h4>
  <div class='row'>
    <table>
  <tr>
    <th>Name</th>
    <th>Address</th>
    <th>Phone Number</th>
    <th>PostBox</th>
    <th>Fax</th>
    <th>Email</th>
    <th>Website</th>
    <th>Tagline</th>
    <th>Operation</th>
  </tr>
  @if(count($public)>0)
      @foreach($public as $pub)
        <!-- <div class='col-md-6'> -->
                <tr>
                    <td>
                                 {{$pub->name}}
                    </td>
                    <td>
                                 {{$pub->address}}
                    </td>
                    <td>
                                 {{$pub->phone}}
                    </td>
                    <td>
                                 {{$pub->pobox}}
                    </td>
                    <td>
                                 {{$pub->fax}}
                    </td>
                    <td>
                                 {{$pub->email}}
                    </td>
                    <td>
                                 {{$pub->website}}
                    </td>
                    <td>
                                 {{$pub->tagline}}
                    </td>
                    <td>

                                  <a href="{{URL('/admin/'.$pub->id.'/editPublication')}}" class='btn btn-info' role='button' style='width:81%;'>Edit</a>
                                  {!! Form::open(['action'=>['PublicationController@destroy',$pub->id],'method'=>'POST']) !!} 
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