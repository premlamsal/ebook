@extends('layout.app')
@section('PageContent')

  <!-- popular section -->
  <section id="aa-popular-category">

    <div class="container">

      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-6">
              <h3>Hello! {{$userName}}</h3>
              <h4>You have {{count($my_books)}} Books</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-popular-category-area">
              <!-- start prduct navigation -->
             <ul class="nav nav-tabs aa-products-tab">
                <li class="active"><a href="#" data-toggle="tab">My Books</a></li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <!-- Start men popular category -->
                <div class="tab-pane fade in active" id="popular">
                  <ul class="aa-product-catg aa-popular-slider">
                    <!-- start single product item -->
                 
                    @foreach($my_books as $my_book)
                          
                     <li>
                      <figure>
                          <a class="aa-product-img popup" href="javascript:void(0)" id="{{$my_book->id}}"><img src="{{URL::asset('storage/Book_image').'/'.$my_book->image}}" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="{{route('/customer/readbook/',['book_id'=>$my_book->id])}}"><span class="fa fa-eye"></span>Read Book</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">{{$my_book->title}}</a></h4>
                          <span class="aa-product-price">{{$my_book->price}}</span><span class="aa-product-price"><del>$0.00</del></span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                      
                     
                        <a href="#" href="#" class="popup" href="javascript:void(0)" id="{{$my_book->id}}"><span class="fa fa-search"></span></a>                            
                      </div>
                     
                    <!--   <span class="aa-badge aa-sale" href="#">SALE!</span> -->
                    </li>
                  @endforeach


                  </ul>
                  <a class="aa-browse-btn" href="#">Browse all MyBooks <span class="fa fa-long-arrow-right"></span></a>
                </div>
                <!-- / popular product category -->
           
                       
              </div>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </section>
  <!-- / popular section -->

  <!-- popular section -->
  <section id="aa-popular-category">

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-popular-category-area">
              <!-- start prduct navigation -->
             <ul class="nav nav-tabs aa-products-tab">
                <li class="active"><a href="#" data-toggle="tab">You May Like</a></li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <!-- Start men popular category -->
                <div class="tab-pane fade in active" id="popular">
                  <ul class="aa-product-catg aa-popular-slider">
                    <!-- start single product item -->
                 
                    @foreach($my_books as $my_book)
                          
                     <li>
                      <figure>
                         <a class="aa-product-img popup" href="javascript:void(0)" id="{{$my_book->id}}"><img src="{{URL::asset('storage/Book_image').'/'.$my_book->image}}" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-eye"></span>Buy Book</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">{{$my_book->title}}</a></h4>
                          <span class="aa-product-price">{{$my_book->price}}</span><span class="aa-product-price"><del>$0.00</del></span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                      
                     
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
                      </div>
                     
                    <!--   <span class="aa-badge aa-sale" href="#">SALE!</span> -->
                    </li>
                  @endforeach


                  </ul>
                  <a class="aa-browse-btn" href="#">Browse all <span class="fa fa-long-arrow-right"></span></a>
                </div>
                <!-- / popular product category -->
           
                       
              </div>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </section>
  <!-- / popular section -->







@endsection

@section('PageScript')

@endsection