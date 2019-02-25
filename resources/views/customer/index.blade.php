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
                        <a class="aa-product-img" href="#"><img src="{{URL::asset('storage/Book_image').'/'.$my_book->image}}" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="{{route('/customer/readbook/',['book_id'=>$my_book->id])}}"><span class="fa fa-eye"></span>Read Book</a>
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
                        <a class="aa-product-img" href="#"><img src="{{URL::asset('storage/Book_image').'/'.$my_book->image}}" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="{{route('/customer/readbook/',['book_id'=>$my_book->id])}}"><span class="fa fa-eye"></span>Read Book</a>
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










  <!-- quick view modal -->                  
                  <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">                      
                        <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <div class="row">
                            <!-- Modal view slider -->
                            <div class="col-md-6 col-sm-6 col-xs-12">                              
                              <div class="aa-product-view-slider">                                
                                <div class="simpleLens-gallery-container" id="demo-1">
                                  <div class="simpleLens-container">
                                      <div class="simpleLens-big-image-container">

                                          <a class="simpleLens-lens-image" data-lens-image="	{{URL::asset('img/view-slider/large/polo-shirt-1.png')}}">
                                              <img src="{{URL::asset('img/view-slider/medium/polo-shirt-1.png')}}" class="simpleLens-big-image">
                                          </a>
                                      </div>
                                  </div>

                                  <div class="simpleLens-thumbnails-container">
                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                         data-lens-image="{{URL::asset('img/view-slider/large/polo-shirt-1.png')}}"
                                         data-big-image=" {{URL::asset('img/view-slider/medium/polo-shirt-1.png')}}">
                                          <img src="{{URL::asset('img/view-slider/thumbnail/polo-shirt-1.png')}}">
                                      </a> 

                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                         data-lens-image="{{URL::asset('img/view-slider/large/polo-shirt-3.png')}} "
                                         data-big-image="{{URL::asset('img/view-slider/medium/polo-shirt-3.png')}} ">
                                          <img src="{{URL::asset('img/view-slider/thumbnail/polo-shirt-3.png')}} ">
                                      </a>

                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                         data-lens-image="{{URL::asset('img/view-slider/large/polo-shirt-4.png')}} "
                                         data-big-image="{{URL::asset('img/view-slider/medium/polo-shirt-4.png')}} ">
                                          <img src="{{URL::asset('img/view-slider/thumbnail/polo-shirt-3.png')}} ">
                                      </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- Modal view content -->
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="aa-product-view-content">
                                <h3>Book Title</h3>
                                <div class="aa-price-block">
                                  <span class="aa-product-view-price">Rs. 3400</span>
                                  <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!</p>
                                <h4>Author/s</h4>
                                <p>Bishal Bhandar, Kshitiz Sapkota, Pralhad Rijal, Prem Lamsal</p>
                                
                           
                                  
                                
                                  <p class="aa-prod-category">
                                    Category: <a href="#">Polo T-Shirt</a>
                                  </p>
                                 <p class="aa-prod-category">
                                    Tagline: <a href="#"> Science Fiction</a>
                                  </p>
                                <div class="aa-prod-view-bottom">
                                  <a href="#" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                  <a href="#" class="aa-add-to-cart-btn">View Details</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>                        
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- / quick view modal -->   




@endsection

@section('PageScript')

@endsection