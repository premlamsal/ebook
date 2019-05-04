@extends('layout.app')
@section('PageContent')


  <!-- Start slider -->
  <section id="aa-slider">
    <div class="aa-slider-area">
      <div id="sequence" class="seq">
        <div class="seq-screen">
          <ul class="seq-canvas">
              @if (count($sliders)>0)
              @foreach ($sliders as $slider)
              <li>
                  <div class="seq-model">
                    <img data-seq src="Sliderimages/{{$slider->slider_image}}" alt="" />
                  </div>
                  <div class="seq-title">
                    <h2 data-seq>{{$slider->slider_title}}</h2>     
                    <p data-seq>{{$slider->slider_subtitle}}</p> 
                    <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">BUY NOW</a>
                  </div>
                </li>
              @endforeach
          @endif
          </ul>
        </div>
        <!-- slider navigation btn -->
        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
          <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
          <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
        </fieldset>
      </div>
    </div>
  </section>
  <!-- / slider -->
  <!-- Start Promo section -->
  <section id="aa-promo">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-promo-area">
            <div class="row">
              <!-- promo left -->
              <div class="col-md-5 no-padding">                
                <div class="aa-promo-left">
                  <div class="aa-promo-banner">                    
                    <img src="img/promo-banner-1.jpg" alt="img">                    
                    <div class="aa-prom-content">
                      <span>75% Off</span>
                      <h4><a href="#">For Women</a></h4>                      
                    </div>
                  </div>
                </div>
              </div>
              <!-- promo right -->
              <div class="col-md-7 no-padding">
                <div class="aa-promo-right">
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="img/promo-banner-3.jpg" alt="img">                      
                      <div class="aa-prom-content">
                        <span>Exclusive Item</span>
                        <h4><a href="#">For Men</a></h4>                        
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="img/promo-banner-2.jpg" alt="img">                      
                      <div class="aa-prom-content">
                        <span>Sale Off</span>
                        <h4><a href="#">On Shoes</a></h4>                        
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="img/promo-banner-4.jpg" alt="img">                      
                      <div class="aa-prom-content">
                        <span>New Arrivals</span>
                        <h4><a href="#">For Kids</a></h4>                        
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="img/promo-banner-5.jpg" alt="img">                      
                      <div class="aa-prom-content">
                        <span>25% Off</span>
                        <h4><a href="#">For Bags</a></h4>                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Promo section -->
  

  <!-- popular section -->
  <section id="aa-popular-category">

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-popular-category-area">
              <!-- start prduct navigation -->
             <ul class="nav nav-tabs aa-products-tab">
                <li class="active"><a href="#" data-toggle="tab">Popular</a></li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <!-- Start men popular category -->
                <div class="tab-pane fade in active" id="popular">
                  <ul class="aa-product-catg aa-popular-slider">
                    <!-- start single product item -->
                 
                    @foreach($popularBooks as $popularBook)
                          
                     <li>
                      <figure>
                        <a class="aa-product-img popup" href="javascript:void(0)" id="{{$popularBook->id}}"><img src="{{URL::asset('storage/Book_image').'/'.$popularBook->image}}" alt="{{$popularBook->title}}"></a>
                        <a class="aa-add-card-btn" href="/buy/{{$popularBook->id}}"><span class="fa fa-shopping-cart"></span>Buy Book</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">{{$popularBook->title}}</a></h4>
                          <span class="aa-product-price">{{$popularBook->price}}</span><span class="aa-product-price"><del>$0.00</del></span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Add to Wishlist" class="wislistTrigger" wislistBookId="{{$popularBook->id}}"><span class="fa fa-heart-o"></span></a>
                        <a href="/book/{{$popularBook->id}}" data-toggle="tooltip" data-placement="top" title="Details"><span class="fa fa-list"></span></a>
                        <a href="#" href="#" class="popup" href="javascript:void(0)" id="{{$popularBook->id}}"><span class="fa fa-search"></span></a>                            
                      </div>
                     
                    <!--   <span class="aa-badge aa-sale" href="#">SALE!</span> -->
                    </li>
                  @endforeach


                  </ul>
                  <!-- <a class="aa-browse-btn" href="#">Browse all <span class="fa fa-long-arrow-right"></span></a> -->
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

  <!-- Latest section -->
  <section id="aa-popular-category">

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-popular-category-area">
              <!-- start prduct navigation -->
             <ul class="nav nav-tabs aa-products-tab">
                <li class="active"><a href="#" data-toggle="tab">Latest</a></li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <!-- Start men Latest category -->
                <div class="tab-pane fade in active" id="popular">
                  <ul class="aa-product-catg aa-popular-slider">
                    <!-- start single product item -->
                 
                    @foreach($latestBooks as $latestBook)
                          
                     <li>
                      <figure>
                        <a class="aa-product-img popup" href="javascript:void(0)" id="{{$latestBook->id}}"><img src="{{URL::asset('storage/Book_image').'/'.$latestBook->image}}" alt="{{$latestBook->title}}"></a>
                        <a class="aa-add-card-btn" href="/buy/{{$latestBook->id}}"><span class="fa fa-shopping-cart"></span>Buy Book</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">{{$latestBook->title}}</a></h4>
                          <span class="aa-product-price">{{$latestBook->price}}</span><span class="aa-product-price"><del>$0.00</del></span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                       <a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Add to Wishlist" class="wislistTrigger" wislistBookId="{{$latestBook->id}}"><span class="fa fa-heart-o"></span></a>
                        <a href="/book/{{$latestBook->id}}" data-toggle="tooltip" data-placement="top" title="Details"><span class="fa fa-list"></span></a>
                     <a href="#" href="#" class="popup" href="javascript:void(0)" id="{{$latestBook->id}}"><span class="fa fa-search"></span></a>                              
                      </div>
                     
                    <!--   <span class="aa-badge aa-sale" href="#">SALE!</span> -->
                    </li>
                  @endforeach


                  </ul>
                 <!--  <a class="aa-browse-btn" href="#">Browse all<span class="fa fa-long-arrow-right"></span></a> -->
                </div>
                <!-- / Latest product category -->
           
                       
              </div>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </section>
  <!-- / Latest section -->

  <!-- Latest section -->
  <section id="aa-popular-category">

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-popular-category-area">
              <!-- start prduct navigation -->
             <ul class="nav nav-tabs aa-products-tab">
                <li class="active"><a href="#" data-toggle="tab">More Books</a></li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <!-- Start men Latest category -->
                <div class="tab-pane fade in active" id="popular">
                  <ul class="aa-product-catg aa-popular-slider">
                    <!-- start single product item -->
                 
                    @foreach($moreBooks as $moreBook)
                          
                     <li>
                      <figure>
                         <a class="aa-product-img popup" href="javascript:void(0)" id="{{$moreBook->id}}"><img src="{{URL::asset('storage/Book_image').'/'.$moreBook->image}}" alt="{{$moreBook->title}}"></a>
                        <a class="aa-add-card-btn" href="/buy/{{$moreBook->id}}"><span class="fa fa-shopping-cart"></span>Buy Book</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">{{$moreBook->title}}</a></h4>
                          <span class="aa-product-price">{{$moreBook->price}}</span><span class="aa-product-price"><del>$0.00</del></span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                       <a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Add to Wishlist" class="wislistTrigger" wislistBookId="{{$moreBook->id}}"><span class="fa fa-heart-o"></span></a>
                        <a href="/book/{{$moreBook->id}}" data-toggle="tooltip" data-placement="top" title="Details"><span class="fa fa-list"></span></a>
                      <a href="#" href="#" class="popup" href="javascript:void(0)" id="{{$moreBook->id}}"><span class="fa fa-search"></span></a>                                
                      </div>
                     
                    <!--   <span class="aa-badge aa-sale" href="#">SALE!</span> -->
                    </li>
                  @endforeach


                  </ul>
              <!--     <a class="aa-browse-btn" href="#">Browse all <span class="fa fa-long-arrow-right"></span></a> -->
                </div>
                <!-- / Latest product category -->
           
                       
              </div>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </section>
  <!-- / Latest section -->

   
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
        
              </div>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </section>
  <!-- / popular section -->
  <!-- Support section -->
  <section id="aa-support">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-support-area">
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-eye"></span>
                <h4>Online Reading</h4>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-clock-o"></span>
                <h4>30 DAYS MONEY BACK</h4>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-phone"></span>
                <h4>SUPPORT 24/7</h4>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Support section -->
    <!-- Testimonial -->
  <section id="aa-testimonial">  
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-testimonial-area">
            <ul class="aa-testimonial-slider">
              <!-- single slide -->
              @if (count($testimonials)>0)
              @foreach ($testimonials as $testimonial)
              <li>
              <div class="aa-testimonial-single">
                  <img class="aa-testimonial-img" src="Testimonialimages/{{$testimonial->person_image}}" alt="testimonial img">   
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>{!!$testimonial->testimonial_body!!}</p>
                  <div class="aa-testimonial-info">
                      <p>{{$testimonial->person_name}}</p>
                      <span>{{$testimonial->post}}</span>
                      <a href="#">{{$testimonial->company_name}}</a>
                    </div>
              </div>

                  @endforeach
                  
              @endif
              <!-- single slide -->
              {{-- <li>
                <div class="aa-testimonial-single">
                <img class="aa-testimonial-img" src="img/testimonial-img-1.jpg" alt="testimonial img">
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui.</p>
                  <div class="aa-testimonial-info">
                    <p>KEVIN MEYER</p>
                    <span>CEO</span>
                    <a href="#">Alphabet</a>
                  </div>
                </div>
              </li>
               <!-- single slide -->
              <li>
                <div class="aa-testimonial-single">
                <img class="aa-testimonial-img" src="img/testimonial-img-3.jpg" alt="testimonial img">
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui.</p>
                  <div class="aa-testimonial-info">
                    <p>Luner</p>
                    <span>COO</span>
                    <a href="#">Kinatic Solution</a>
                  </div>
                </div>
              </li> --}}
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Testimonial -->


  <!-- Latest Blog -->
  <section id="aa-latest-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-latest-blog-area">

            <h2>LATEST BLOG</h2>
            <div class="row">
              <!-- single latest blog -->
              @if (count($blogs)>0)
                      @foreach ($blogs as $item)
                      <div class="col-md-4 col-sm-4">
                        <div class="aa-latest-blog-single">
                          <figure class="aa-blog-img">     
                             {{-- iamge dynamic --}}
                            <a href="blog/{{$item->id}}"><img src="{{'img/blogImages/'.$item->blog_image}}" alt="img"></a>  
                              <figcaption class="aa-blog-img-caption">
                              <span href="blog/{{$item->id}}"><i class="fa fa-clock-o"></i>{{$item->created_at}}</span>
                            </figcaption>                          
                          </figure>
                          <div class="aa-blog-info">
                            {{-- Blog title dynamic --}}
                            <h3 class="aa-blog-title"><a href="blog/{{$item->id}}">{{$item->blog_title}}</a></h3>
                            {{-- Blog Body --}}
                              <p>{!! str_limit($item->blog_body, 250) !!}</p>
                            {{-- <p>{{$item->blog_body}}</p>  --}}
                            <a href="blog/{{$item->id}}" class="aa-read-mor-btn">Read more <span class="fa fa-long-arrow-right"></span></a>
                          </div>
                        </div>
                      </div>
                    
                      @endforeach
                     
              @endif
               
             
                  
             
              
              <!-- single latest blog -->
              
              <!-- single latest blog -->
              
            </div>
          </div>
        </div>    
      </div>
    </div>
  </section>
  <!-- / Latest Blog -->

  <!-- Subscribe section -->
  @if(!auth::check())
<section id="aa-subscribe">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-subscribe-area">
            <h3>Subscribe our newsletter </h3>
            <p>Please Subscribe us for more latest news and updates.</p>
            <form action="/addSubscriber" class="aa-subscribe-form" method="post">
              @csrf
              <input type="email" name="sub_email" id="" placeholder="Enter your Email">
              <input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
 
   @else

  <section id="aa-subscribe">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-subscribe-area">
            <h3>Subscribe our newsletter </h3>
            <p>Registered Customers are Subscribed default.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  @endif
  <!-- / Subscribe section -->


  <!-- Client Brand -->
  <section id="aa-client-brand">
  
    <div class="container">

      <div class="row">
        <div class="col-md-12">
            <h3 style="color:white; text-align:center;">Our Top Writers</h3>

          <div class="aa-client-brand-area">
            <ul class="aa-client-brand-slider">
              @if (count($writer)>0)
              @foreach ($writer as $item)
              <li><a href="#">{{$item->writer_name}}</a></li>
              @endforeach
                  
              @endif
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Client Brand -->
@endsection
