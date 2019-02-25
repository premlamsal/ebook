@extends('admin.layouts.app')
@section('content')


<div class="container">
        <h2>Add Blog</h2>
        <form action="{{route('admin/storeBlog')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Choose Blog Image</label>
                <input type="file"  placeholder="Menu Link" name="image" style="width: 100%; margin: 5px 0px; padding:2px 0px;">
            </div>
            <div class="form-group">
                <label for="fname">Blog Title</label>
                <input type="text" class="form-control" name="blog_title" id="fname">
            </div>
            <div class="form-group">
                    <label for="tbody">Write A Blog</label>
                    <textarea name="blog_body" id="editor1" cols="30" rows="10"></textarea>
                    
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="submit">
            </div>
        </form>
</div>
<script src="https://cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace( 'editor1' );
</script>
{{-- <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Person image</th>
                <th>Person Name</th>
                <th>Testimonial</th>
                <th>Company</th>
                <th>Post</th>
                <th>operation</th>
            </thead>
            <tbody>
                @if (count($testimonials)>0)
                @foreach ($testimonials as $testimonial)
                <tr>
                    <td> <img src="../Testimonialimages/{{$testimonial->person_image}}" height="auto" width="100px" alt=""></td>
                    <td> {{$testimonial->person_name}}</td>
                    <td> {{$testimonial->testimonial_body}}</td>
                    <td> {{$testimonial->company_name}}</td>
                    <td> {{$testimonial->post}}</td>
                    <td>
                     <a href="Testimonial/destroy/{{$testimonial->id}}" class="btn btn-danger"> <span class="fa fa-trash"></span> Delete</a>
                     <a href="Testimonial/destroy/{{$testimonial->id}}" class="btn btn-info"> <span class="fa fa-trash"></span> Edit</a>
                    </td>
                </div>
                @endforeach
            @endif
              
                
               
                
              </tr>
            </tbody>
          </table>
        </div>
  </div> --}}



@endsection