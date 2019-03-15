@extends('admin.layouts.app')
@section('content')


<div class="container">
        <h2>Add Staff</h2>
        <form action="{{route('admin/addStaffs')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Choose Staff Image</label>
                <input type="file"  placeholder="Menu Link" name="image" style="width: 100%; margin: 5px 0px; padding:2px 0px;">
            </div>
            <div class="form-group">
                <label for="fname">Staff Name</label>
                <input type="text" class="form-control" name="staff_name" id="fname">
            </div>
            <div class="form-group">
                    <label for="fname">Staff Position</label>
                    <input type="text" class="form-control" name="staff_position" id="fname">
            </div>
            <div class="form-group">
                    <label for="fname">Staff Type</label>
                    <select name="staff_type" class="form-control">
                            <option >ADMINISTRATION AND FINANCE</option>
                            <option>MARKETING</option>
                            <option >COMPUTER DESK</option>
                            <option >DISTRIBUTION COUNTER</option>
                    </select>
            </div>
            <div class="form-group">
                    <label for="tbody">Contact Detail</label>
                    <textarea name="contact_info" id="editor1" cols="30" rows="10"></textarea>
                    
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
                <th>Staff image</th>
                <th>Staff Name</th>
                <th>Staff Position</th>
                <th>Staff Type</th>
                <th>Contact Info</th>
                <th>operation</th>
            </thead>
            <tbody>
                @if (count($staff)>0)
                @foreach ($staff as $item)
                <tr>
                    <td> <img src="../img/staffImages/{{$item->staff_image}}" height="auto" width="100px" alt=""></td>
                    <td> {{$item->staff_name}}</td>
                    <td> {{$item->staff_position}}</td>
                    <td> {{$item->staff_type}}</td>
                    <td> {{$item->contact_info}}</td>
                    <td>
                     <a href="destroyStaffs/{{$item->id}}" class="btn btn-danger"> <span class="fa fa-trash"></span> Delete</a>
                     <a href="EditStaffs/{{$item->id}}" class="btn btn-info"> <span class="fa fa-trash"></span> Edit</a>
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