@extends('admin.layouts.app')
@section('content')


<div class="container">
        <h2>Add Top Writer</h2>
        <form action="{{route('admin/writerStore')}}" method="POST" enctype="multipart/form-data">
            @csrf
           
            <div class="form-group">
                <label for="fname">Writer Name</label>
                <input type="text" class="form-control" name="writer_name" id="fname">
            </div>
            <div class="form-group">
                    <label for="fname">Writer Contact</label>
                    <input type="text" class="form-control" name="writer_Contact" id="fname">
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
<div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Writer Name</th>
                <th>Writer Contact</th>
                <th>operation</th>
            </thead>
            <tbody>
                @if (count($writer)>0)
                @foreach ($writer as $item)
                <tr>
                   
                    <td> {{$item->writer_name}}</td>
                    <td> {{$item->writer_Contact}}</td>
                  
                    <td>
                     <a href="writerdelete/{{$item->id}}" class="btn btn-danger"> <span class="fa fa-trash"></span> Delete</a>
                    
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