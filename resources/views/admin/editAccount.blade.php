@extends('admin.layouts.app')
@section('content')
<div class="container">
   <h3>Edit Account</h3>
  {!! Form::open(['action'=>['AccountController@update',$account->id],'method'=>'POST']) !!}
  @csrf
      <div class="form-group">
        {{Form::label('name','Full Name')}}
        {{Form::text('name',$account->name,['class'=>'form-control'])}}
      </div>
      <div class="form-group">
        {{Form::label('email','Email')}}
        {{Form::text('email',$account->email,['class'=>'form-control'])}}
      </div>
      <div class="form-group">
        {{Form::label('password','Password')}}
        {{Form::text('password',$account->password,['class'=>'form-control'])}}
      </div>
      <div class="form-group">
        {{Form::label('address','Address')}}
        {{Form::text('address',$account->address,['class'=>'form-control'])}}
      </div>
      <div class="form-group">
        {{Form::label('phone','Phone Number')}}
        {{Form::text('phone',$account->phone,['class'=>'form-control'])}}
      </div>
      <div class="form-group">
        {{Form::label('gender','Gender')}}
        {{Form::radio('gender', 'Male')}}
        {{Form::radio('gender', 'Female')}}
      </div>
      
         {{Form::hidden('_method','PUT')}}
      {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
  {!! Form::close() !!}
</div>
@endsection