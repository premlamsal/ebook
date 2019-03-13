@extends('layout.app')
@section('PageContent')


 <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="/img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Search</h2>
        <ol class="breadcrumb">
         <!--  <li><a href="index.html">Home</a></li>   -->       
          <li class="active">{{$query}}</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

  <!-- product category -->
  <section id="aa-product-category">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-10">
          <div class="aa-product-catg-content">
            <div class="aa-product-catg-head">
              <div class="aa-product-catg-head-left">
               
                  <label for="">Seach Results</label>
             
              </div>
              <div class="aa-product-catg-head-right">
                <a id="grid-catg" href="#"><span class="fa fa-th"></span></a>
                <a id="list-catg" href="#"><span class="fa fa-list"></span></a>
              </div>
            </div>
            <div class="aa-product-catg-body">
              <ul class="aa-product-catg">
                <!-- start single product item -->
                @if($searchBooks->first())
                 @foreach($searchBooks as $book)
                          
                     <li>
                      <figure>
                        <a class="aa-product-img popup" href="javascript:void(0)" id="{{$book->id}}"><img src="{{URL::asset('storage/Book_image').'/'.$book->image}}" alt="{{$book->title}}"></a>
                        <a class="aa-add-card-btn" href="/buy/{{$book->id}}"><span class="fa fa-shopping-cart"></span>Buy Book</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">{{$book->title}}</a></h4>
                          <span class="aa-product-price">Rs.{{$book->price}}</span><!-- <span class="aa-product-price"><del>$0.00</del></span> -->
                          <p class="aa-product-descrip">{{str_limit($book->abstract, 250)}}</p>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="/book/{{$book->id}}" data-toggle="tooltip" data-placement="top" title="Details"><span class="fa fa-list"></span></a>
                        <a href="#" href="#" class="popup" href="javascript:void(0)" id="{{$book->id}}"><span class="fa fa-search"></span></a>                            
                      </div>
                     
                    <!--   <span class="aa-badge aa-sale" href="#">SALE!</span> -->
                    </li>
                  @endforeach
                <!-- start single product item --> 
                @else
                  <div style="margin-left: 35px; margin-bottom: 20px;">Nothing Found. Try another Query</div>
                @endif
        </div>
       
      </div>
    </div>
  </section>
  <!-- / product category -->










@endsection