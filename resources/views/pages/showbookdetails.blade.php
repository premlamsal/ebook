@extends('layout.app')
@section('PageContent')

  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="../storage/Book_image/{{$book->image}}" alt="fashion img" class="jumbot-image">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>{{$book->title}}</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>         
          <li><a href="#">Book</a></li>
          <li class="active">{{$book->title}}</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

  <!-- product category -->
  <section id="aa-product-details">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-product-details-area">
            <div class="aa-product-details-content">
              <div class="row">
                <!-- Modal view slider -->
                <div class="col-md-5 col-sm-5 col-xs-12">                              
                  <div class="aa-product-view-slider">                                
                    <div id="demo-1" class="simpleLens-gallery-container">
                      <div class="simpleLens-container">
                        <div class="simpleLens-big-image-container"><a data-lens-image="../storage/Book_image/{{$book->image}}" class="simpleLens-lens-image"><img src="../storage/Book_image/{{$book->image}}" class="simpleLens-big-image"></a></div>
                      </div>
                 <!--      <div class="simpleLens-thumbnails-container">
                          <a data-big-image="../img/view-slider/medium/polo-shirt-1.png" data-lens-image="../img/view-slider/large/polo-shirt-1.png" class="simpleLens-thumbnail-wrapper" href="#">
                            <img src="../img/view-slider/thumbnail/polo-shirt-1.png">
                          </a>                                    
                          <a data-big-image="../img/view-slider/medium/polo-shirt-3.png" data-lens-image="../img/view-slider/large/polo-shirt-3.png" class="simpleLens-thumbnail-wrapper" href="#">
                            <img src="../img/view-slider/thumbnail/polo-shirt-3.png">
                          </a>
                          <a data-big-image="../img/view-slider/medium/polo-shirt-4.png" data-lens-image="../img/view-slider/large/polo-shirt-4.png" class="simpleLens-thumbnail-wrapper" href="#">
                            <img src="../img/view-slider/thumbnail/polo-shirt-4.png">
                          </a>
                      </div> -->
                    </div>
                  </div>
                </div>
                <!-- Modal view content -->
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <div class="aa-product-view-content">
                    <h3>{{$book->title}}</h3>
                    				
                    				  @if($finalRating==1)
				                            <div class="aa-product-rating">
				                              <span class="fa fa-star"></span>
				                              <span class="fa fa-star-o"></span>
				                              <span class="fa fa-star-o"></span>
				                              <span class="fa fa-star-o"></span>
				                              <span class="fa fa-star-o"></span>
				                            </div>
				                          @elseif($finalRating==2)
				                            <div class="aa-product-rating">
				                              <span class="fa fa-star"></span>
				                              <span class="fa fa-star"></span>
				                              <span class="fa fa-star-o"></span>
				                              <span class="fa fa-star-o"></span>
				                              <span class="fa fa-star-o"></span>
				                            </div>
				                            @elseif($finalRating==3)
				                            <div class="aa-product-rating">
				                              <span class="fa fa-star"></span>
				                              <span class="fa fa-star"></span>
				                              <span class="fa fa-star"></span>
				                              <span class="fa fa-star-o"></span>
				                              <span class="fa fa-star-o"></span>
				                            </div>
				                             @elseif($finalRating==4)
				                            <div class="aa-product-rating">
				                              <span class="fa fa-star"></span>
				                              <span class="fa fa-star"></span>
				                              <span class="fa fa-star"></span>
				                              <span class="fa fa-star"></span>
				                              <span class="fa fa-star-o"></span>
				                            </div>
				                             @elseif($finalRating==5)
				                             <div class="aa-product-rating">
				                              <span class="fa fa-star"></span>
				                              <span class="fa fa-star"></span>
				                              <span class="fa fa-star"></span>
				                              <span class="fa fa-star"></span>
				                              <span class="fa fa-star"></span>
				                            </div>
				                            @endif
                    <div class="aa-price-block">
                      <span class="aa-product-view-price">Rs.{{$book->price}}</span>
                      <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                    </div>
                    <p>{{ str_limit($book->abstract, 250) }}</p>
                      <p class="aa-prod-category">
                        Category: <a href="#">{{$book->category}}</a>
                      </p>
                    <div class="aa-prod-view-bottom">
                      <a class="aa-add-to-cart-btn" href="/buy/{{$book->id}}">Buy</a>
                     <a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Add to Wishlist" class="wislistTrigger" wislistBookId="{{$book->id}}">
             
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="aa-product-details-bottom">
              <ul class="nav nav-tabs" id="myTab2">
                <li><a href="#description" data-toggle="tab">Description</a></li>
                <li><a href="#review" data-toggle="tab">Reviews</a></li>                
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade in active" id="description">
                  <p style="text-align: justify;">{{$book->abstract}}</p>
                </div>
                <div class="tab-pane fade " id="review">
                 <div class="aa-product-review-area">
                   <h4>{{count($reviews)}} Reviews for {{$book->title}}</h4> 
                   <ul class="aa-review-nav">
                  	@if(count($reviews)>0)
                    	@foreach($reviews as $review)
                     <li>
                        <div class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" src="../img/user_head.png" alt="review image">
                            </a>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading">
                            	<strong>{{$review->title}}</strong> - <span>{{$review->created_at}}</span></h4>
				                           @if(($review->rating)==1)
				                            <div class="aa-product-rating">
				                              <span class="fa fa-star"></span>
				                              <span class="fa fa-star-o"></span>
				                              <span class="fa fa-star-o"></span>
				                              <span class="fa fa-star-o"></span>
				                              <span class="fa fa-star-o"></span>
				                            </div>
				                          @elseif(($review->rating)==2)
				                            <div class="aa-product-rating">
				                              <span class="fa fa-star"></span>
				                              <span class="fa fa-star"></span>
				                              <span class="fa fa-star-o"></span>
				                              <span class="fa fa-star-o"></span>
				                              <span class="fa fa-star-o"></span>
				                            </div>
				                            @elseif(($review->rating)==3)
				                            <div class="aa-product-rating">
				                              <span class="fa fa-star"></span>
				                              <span class="fa fa-star"></span>
				                              <span class="fa fa-star"></span>
				                              <span class="fa fa-star-o"></span>
				                              <span class="fa fa-star-o"></span>
				                            </div>
				                             @elseif(($review->rating)==4)
				                            <div class="aa-product-rating">
				                              <span class="fa fa-star"></span>
				                              <span class="fa fa-star"></span>
				                              <span class="fa fa-star"></span>
				                              <span class="fa fa-star"></span>
				                              <span class="fa fa-star-o"></span>
				                            </div>
				                             @elseif(($review->rating)==5)
				                             <div class="aa-product-rating">
				                              <span class="fa fa-star"></span>
				                              <span class="fa fa-star"></span>
				                              <span class="fa fa-star"></span>
				                              <span class="fa fa-star"></span>
				                              <span class="fa fa-star"></span>
				                            </div>
				                            @endif

                            <p>{{$review->body}}</p>
                          </div>
                        </div>
                      </li>
                      <li>
                        @endforeach
                      @else
                      	 <h4>No Reviews !!</h4> 
                      @endif

                   </ul>
  				<!-- review form -->
                  @if(Auth::user())
                  @if($isReviewdDone==0)
                   <h4>Add a review</h4>
                 <form action="{{route('reviewStore')}}" method="post">
                 	@csrf
                     <p>Your Rating</p>   
                      <div class="form-group rating">          
					
					    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
					
					    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
					 
					    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
					
					    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
					  
					    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
					
					
                 </div>
                 <div style="margin-bottom: 30px;height: 10px"></div>
                      <div class="form-group">
                      	
                       <input type="hidden" name="book_id" value="{{$book->id}}">
                        <textarea class="form-control" rows="3" id="review" name="review_body"> </textarea>
                      </div>
              <!--         <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Name">
                      </div>  
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="example@gmail.com">
                      </div> -->

                      <button type="submit" class="btn btn-default aa-review-submit">Submit</button>
                   </form>
                   @else
                   	 <h4>You have already reviewd this book.</h4>
                   	 @endif
                   @else
                   <h4>You must login to Reivew</h4>

                   @endif
                 </div>
                </div>            
              </div>
            </div>
            <!-- Related product -->
            <div class="aa-product-related-item">
              <h3>Related Items</h3>
              <ul class="aa-product-catg aa-related-item-slider">
                <!-- start single product item -->

                    @foreach($relatedBooks as $relatedBook)
                          
                     <li>
                      <figure>
                        <a class="aa-product-img popup" href="javascript:void(0)" id="{{$relatedBook->id}}"><img src="{{URL::asset('storage/Book_image').'/'.$relatedBook->image}}" alt="{{$relatedBook->title}}"></a>
                        <a class="aa-add-card-btn" href="/buy/{{$relatedBook->id}}"><span class="fa fa-shopping-cart"></span>Buy Book</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">{{$relatedBook->title}}</a></h4>
                          <span class="aa-product-price">{{$relatedBook->price}}</span><span class="aa-product-price"><del>$0.00</del></span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                       <a href="/book/{{$relatedBook->id}}" data-toggle="tooltip" data-placement="top" title="Details"><span class="fa fa-list"></span></a>
                        <a href="#" href="#" class="popup" href="javascript:void(0)" id="{{$relatedBook->id}}"><span class="fa fa-search"></span></a>                            
                      </div>
                     
                    <!--   <span class="aa-badge aa-sale" href="#">SALE!</span> -->
                    </li>
                  @endforeach

              </ul>
            
            </div>  
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / product category -->

@endsection