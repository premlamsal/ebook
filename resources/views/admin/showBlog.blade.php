@extends('admin.layouts.app')
@section('content')


    <div class="table-responsive">
      <table class="table " id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Blog Image</th>
            <th>Blog Title</th>
            <th>Blog Body</th>
            <th>Created At</th>
            <th>operation</th>
        </thead>
        <tbody>
            @if (count($blog)>0)
            @foreach ($blog as $item)
            <tr>
                <td> <img src="../img/blogImages/{{$item->blog_image}}" height="auto" width="100px" alt=""></td>
                <td> {{$item->blog_title}}</td>
                <td> {!! str_limit($item->blog_body, 150) !!}</td>
                <td> {{$item->created_at}}</td>
                <td>
                 <a href="destroyBlog/{{$item->id}}" class="btn btn-danger"> <span class="fa fa-trash"></span> Delete</a>
                 <a href="editBlog/{{$item->id}}" class="btn btn-info"> <span class="fa fa-trash"></span> Edit</a>
                </td>
            </div>
            @endforeach
        @endif
          </tr>
        </tbody>
      </table>
    </div>

@endsection