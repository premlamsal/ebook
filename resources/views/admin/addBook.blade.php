@extends('admin.layouts.app')
@section('content')
<div class="container">
  <h3>Add Book</h3>
   <form method="post" action="{{route('admin/Book/Store')}}" enctype="multipart/form-data">
   @csrf
    <div class="form-group row">
      <label for="title">Title</label>
        <input type="text" class="form-control " id="title" value="" name="title" placeholder="Title">
   </div>
   <div class="form-group row">
      <label for="abstract">Abstract</label>
        <textarea class="form-control" rows="5" id="abstract" name="abstract"></textarea>
   </div>
   <div class="form-group row">
      <label for="isbn">ISBN</label>
        <input type="text" class="form-control " id="isbn" value="" name="isbn" placeholder="ISBN">
   </div>
   <div class="form-group row">
      <label for="page_no">Page Number</label>
        <input type="text" class="form-control " id="page_no" value="" name="page_no" placeholder="Page Number">
   </div>
   <div class="form-group row">
      <label for="tagline">Tagline</label>
        <input type="text" class="form-control " id="tagline" value="" name="tagline" placeholder="Tagline">
   </div>
   <div class="form-group row">
      <label for="radio_btn">Select Category</label>
      <select name="category" class="form-control  country_to_state" id="category">
            <option value="0">Select a Category</option>
            @foreach ($cat_id as $category)
             <option value="{{$category->id}}">{{$category->category_name}}</option>
           @endforeach
        </select>
   </div>
  {{-- <!-- <div class="form-group row">
      <label for="radio_btn">Select Sub-Category</label>
      <select name="subcategory" class="form-control  country_to_state" id="subcategory">
            <option value="0">Select a Sub-Category</option>
            @foreach ($subcat_id as $subcategory)
             <option value="{{$subcategory->id}}">{{$subcategory->subcategory_name}}</option>
           @endforeach
        </select>
   </div> -->--}}


 <div class="form-group row ">
      <label for="subcategory"> Sub-Category Name</label>
      <div id="toShowSubCategory" style="margin-left: 20px;"></div>
   </div>

    <div class="form-group row">
      <label for="price">Price</label>
        <input type="text" class="form-control " id="price" value="" name="price" placeholder="Price">
   </div>
   <div class="form-group row">
      <label for="author">Author</label>
        <input type="text" class="form-control " id="author" value="" name="author" placeholder="Author">
   </div>
   <div class="form-group row">
      <label for="radio_btn">Select Publication</label>
      <select name="publication" class="form-control  country_to_state" id="publication">
            <option value="0">Select a Publication</option>
            @foreach ($pub_id as $publication)
             <option value="{{$publication->id}}">{{$publication->name}}</option>
           @endforeach
        </select>
   </div>
     <div class="form-group row">
      <label for="image" style="margin-right: 16px;">Image File</label>
        <input type="file" name="image" accept="image/*">
   </div>
   <div class="form-group row">
      <label for="bookfile" style="margin-right: 25px;">Book File</label>
        <input type="file" name="bookfile">
   </div>
   <div class="form-group row">
      <label for="edition">Edition</label>
        <input type="text" class="form-control " id="edition" value="" name="edition" placeholder="Edition">
   </div>
    <div class="form-group row">
      <label for="tags">Tags</label>
        <input type="text" class="form-control " id="tags" value="" name="tags" placeholder="Tags">
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
                        url : '{{url("/admin/getCategory")}}',
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