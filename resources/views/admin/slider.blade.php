@extends('admin.layouts.app')
@section('content')
<div class="container">
    <h2>Add Slider</h2>
    <form action="{{route('admin/addSlider')}}" method="POST" enctype="multipart/form-data">
     @csrf
      <div class="form-group">
        <label for="short">Choose a Slider</label>
        <input type="file"  placeholder="Menu Link" name="image" style="width: 100%; margin: 5px 0px; padding:2px 0px;">
      </div>
      <div class="form-group">
        <label for="short">Title</label>
        <input type="Text"   name="slider_title" class="form-control" style="width: 100%; margin: 5px 0px; padding:2px 0px;">
      </div>
      <div class="form-group">
        <label for="short">sub-title</label>
        <input type="Text"   class="form-control" name="slider_subtitle" style="width: 100%; margin: 5px 0px; padding:2px 0px;">
      </div>
    <button type="submit" class="btn btn-success btn-block btn-large" name="upload">Upload Slider</button>
    </form>

</div>

    <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Slider image</th>
                <th>Title</th>
                <th>Sub-title</th>
                <th>Upload at</th>
                <th>operation</th>
            </thead>
            <tbody>
                @if (count($sliders)>0)
                @foreach ($sliders as $slider)
                <tr>
                    <td> <img src="../Sliderimages/{{$slider->slider_image}}" height="auto" width="100px" alt=""></td>
                    <td>{{$slider->slider_title}}</td>
                    <td>{{$slider->slider_subtitle}}</td>
                    <td>Upload Date {{$slider->created_at}}</td>
                    <td>
                     <a href="Slider/destroy/{{$slider->id}}" class="btn btn-danger"> <span class="fa fa-trash"></span> Delete</a>
                    </td>
                </div>
                @endforeach
            @endif
              
                
               
                
              </tr>
            </tbody>
          </table>
        </div>
  </div>
@endsection