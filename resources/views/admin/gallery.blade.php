@extends('admin.layouts.app')
@section('content')

<div class="container">
    <h2>Gallery</h2>
    <div class="gallery-continer">
      <a href="/admin/gallery/add"><button class="btn btn-primary">Add Gallery</button></a>
@if(count($galleries)>0)
        <table class="mt-4">
          <th>Image</th> <th>Title</th> <th>Short Description</th><th>Actions</th>
          @foreach($galleries as $gallery)
            <tr>
              <td><img src="{{$gallery->image}}" alt="Title" width="150px"></td>
              <td>{{$gallery->title}}</td>
              <td>{{$gallery->short_description}}</td>
              <td><a href="/admin/gallery/update/{{$gallery->id}}"> <button class="btn btn-success">Edit</button></a> <a href="/admin/gallery/delete/{{$gallery->id}}"><button class="btn btn-danger">Delete</button></a></td>
            </tr>
            @endforeach
      @else
      <p>No Data Found.</p> 
    @endif 

        </table>
    </div>
</div>

@endsection