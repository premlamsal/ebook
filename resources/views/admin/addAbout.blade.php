@extends('admin.layouts.app')
@section('content')

<div class="container">
    <h2>Update About</h2>
    {!! Form::open(['action'=>['AboutController@update',$about->id],'method'=>'post']) !!}
  @csrf
     
      <div class="form-group">
        {{Form::label('about_body','About Body')}}
        {{Form::textarea('about_body',$about->about_body,['id'=>'editor1','class'=>'form-control'])}}
      </div>
         {{Form::hidden('_method','PUT')}}
      {{Form::submit('submit',['class'=>'btn btn-primary'])}}
  {!! Form::close() !!}
</div>
<script src="https://cdn.ckeditor.com/4.11.2/full-all/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'editor1' );
</script>
<div class="table-responsive mt-4">
    <table class="table" id="dataTable" Width="100%" cellspacing="0">
        <thead> 
            <th>About Body</th>
        </thead>
        <tbody>
            <tr>
                <td>{!!$about->about_body!!}</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection