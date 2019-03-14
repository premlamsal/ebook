@extends('admin.layouts.app')
@section('content')
<div class='container-fluid'>
  <h4>All Book</h4>
  <div class='row'>
    <table style="font-size: 13px;">
  <tr>
    <th>Image</th>
    <th>Book Title</th>
    <th>Abstract</th>
    <th>ISBN</th>
    <th>Page Number</th>
    <th>Tagline</th>
    <th>Category</th>
    <th>Sub-Category</th>
    <th>Price</th>
    <th>Author</th>
    <th>Publication House</th>
    <th>Edition</th>
    <th>User Name</th>
    <th>Tags</th>

    <th>Operation</th>
  </tr>
  @if(count($showBook)>0)
      @foreach($showBook as $book)
        <!-- <div class='col-md-6'> -->
                <tr>
                    <td>
                                 <img src="../storage/Book_image/{{$book->image}}" style="width: 100%;" alt="hey">

                    </td>
                    <td>
                                 {{$book->title}}
                    </td>
                    <td>
                                 {{$book->abstract}}
                    </td>
                    <td>
                                 {{$book->isbn}}
                    </td>
                    <td>
                                 {{$book->page_no}}
                    </td>
                    <td>
                                 {{$book->tagline}}
                    </td>
                    <td>
                                {{ $book->category}}
                    </td>
                    <td>
                                {{ $book->sub_category}}
                    </td>
                    <td>
                                 {{$book->price}}
                    </td>
                    <td>
                                 {{$book->author}}
                    </td>
                    <td>
                                 {{ $book->Publication->name}}
                    </td>
                    <td>
                                 {{$book->edition}}
                    </td>
                    <td>
                                 {{ $book->User->name}}
                    </td>
                    <td>
                                 {{$book->tags}}
                    </td>
                  

                    <td>

                                  <a href="{{URL('/admin/'.$book->id.'/editBook')}}" class='btn btn-info' role='button' style='width:100%;'>Edit</a>
                                  {!! Form::open(['action'=>['BookController@destroy',$book->id],'method'=>'POST']) !!} 
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
@endsection