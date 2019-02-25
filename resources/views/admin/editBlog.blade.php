@extends('admin.layouts.app')
@section('content')

<div class="container">
    <h2>Edit Blog</h2>
    {!! Form::open(['action'=>['BlogController@updateBlog',$blog->id],'method'=>'post']) !!}
  @csrf
      <div class="form-group">
        {{Form::label('blog_title','Blog Title')}}
        {{Form::text('blog_title',$blog->blog_title,['class'=>'form-control'])}}
      </div>
      <div class="form-group">
        {{Form::label('blog_body','Blog Body')}}
        {{Form::textarea('blog_body',$blog->blog_body,['id'=>'editor1','class'=>'form-control'])}}
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