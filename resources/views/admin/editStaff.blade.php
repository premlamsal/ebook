@extends('admin.layouts.app')
@section('content')

<div class="container">
    <h2>Edit Staff</h2>
    {!! Form::open(['action'=>['AboutController@update',$staff->id],'method'=>'post']) !!}
  @csrf
      <div class="form-group">
        {{Form::label('staff_name','Staff Name')}}
        {{Form::text('staff_name',$staff->staff_name,['class'=>'form-control'])}}
      </div>
      <div class="form-group">
        {{Form::label('staff_position','Staff Position')}}
        {{Form::textarea('staff_position',$staff->staff_position,['id'=>'editor1','class'=>'form-control'])}}
      </div>
      <div class="form-group">
            {{Form::label('staff_image','Staff Image')}}
            {{Form::file('staff_image',$staff->staff_image,['id'=>'','class'=>'form-control'])}}
    </div>
         {{Form::hidden('_method','PUT')}}
      {{Form::submit('submit',['class'=>'btn btn-primary'])}}
  {!! Form::close() !!}
</div>
<script src="https://cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'editor1' );
</script>
@endsection