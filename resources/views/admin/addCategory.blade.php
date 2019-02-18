@extends('admin.layouts.app')
@section('content')
<h3>Add Category</h3>
<div class="container" style="margin-top: 20px;">
<form method="post" action="{{route('admin/category/Store')}}">
@csrf
   <div class="form-group row">
      <label for="cat_url"> Category URL</label>
        <input type="text" class="form-control " id="cat_url" value="" name="cat_url" placeholder="Category URL">
   </div>
   <div class="form-group row ">
      <label for="category_name"> Category Name</label><br>
      <select name="category" class="form-control  country_to_state" id="category">
            <option value="0">Select a Category</option>
            @foreach ($categories as $category)
             <option value="{{$category->Cat_id}}">{{$category->category_name}}</option>
           @endforeach
        </select>
   </div>
   <div class="form-group row ">
      <label for="subcategory_name"> Sub-Category Name</label>
      <div id="toShowSubCategory" style="margin-left: 20px;"></div>
   </div>
<div class="form-group row">
      <button type="submit" class="btn btn-outline-success">Submit</button>
   </div>
</div>
@endsection


@section('PageScripts')
<script>
        $(document).ready(function(){
            $("select#category").change(function(){
                var selectedCategory = $(this).children("option:selected").val();
                $.ajax({
                        type : 'post',
                        url : '{{url("admin/getCategory")}}',
                        data:{'id':selectedCategory},
                        success:function(data){
                        $('#toShowSubCategory').html(data);
                        }
                    });
            });
        });
        </script>
        <script type="text/javascript">
         
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
             
        </script>
    <!--  <script type="text/javascript">
        $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii'});
    </script> -->  
@endsection