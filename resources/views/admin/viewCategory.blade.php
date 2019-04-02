@extends('admin.layouts.app')
@section('content')
<div class='container-fluid'>
  <div class="col-md-6">
  <h4>All Category Name</h4>
  <div class='row'>
    <table>
  <tr>
    <th>Name</th>
    <th>Operation</th>
  </tr>
  @if(count($showCat)>0)
      @foreach($showCat as $cat)
        <!-- <div class='col-md-6'> -->
                <tr>
                    <td>
                                 {{$cat->category_name}}
                    </td>
                    <td>

                                  <a href="{{URL('/admin/'.$cat->id.'/editCategory')}}" class='btn btn-info' role='button' style='width:38%;'>Edit</a>
                                  {{--<!-- <a href="{{URL('/admin/'.$cat->id.'/Catdestroy')}}" class='btn btn-info' role='button' style='width:38%;'>Delete</a> -->--}}
                                 {!! Form::open(['action'=>['CategoryController@Catdestroy',$cat->id],'method'=>'POST']) !!} 
                                  {{Form::hidden('_method','DELETE')}}
                                  {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                  {!!Form::close()!!}
                    </td>
                  </tr>
        <!-- </div> -->
      @endforeach
    @else
      <p>No Data Found.</p> 
    @endif 
    </table>          
  </div>
</div>
  <div class="col-md-6">
  <h4>All Sub-Category Name</h4>
  <div class='row'>
    <table>
  <tr>
    <th>Name</th>
    <th>Category</th>
    <th>Operation</th>
  </tr>
  @if(count($showSubCat)>0)
      @foreach($showSubCat as $subcat)
        <!-- <div class='col-md-6'> -->
                <tr>
                    <td>
                                 {{$subcat->subcategory_name}}
                    </td>
                    <td>
                                 {{$subcat->Category->category_name}}
                    </td>
                    <td>

                                 <a href="{{URL('/admin/'.$subcat->id.'/editSubCategory')}}" class='btn btn-info' role='button' style='width:38%;'>Edit</a>
                                 {{--<!-- <a href="{{URL('/admin/'.$subcat->id.'/SubCatdestroy')}}" class='btn btn-info' role='button' style='width:38%;'>Delete</a> -->--}}
                                 {!!Form::open(['action'=>['CategoryController@SubCatdestroy',$subcat->id],'method'=>'POST']) !!} 
                                  {{Form::hidden('_method','DELETE')}}
                                  {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                  {!!Form::close()!!}
                    </td>
                  </tr>
        <!-- </div> -->
      @endforeach
    @else
      <p>No Data Found.</p> 
    @endif 
    </table>          
  </div>
</div>
</div>
@endsection