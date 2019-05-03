<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Online Book Store') }}</title>
    
    <!-- Font awesome -->
    <link href="{{URL::asset('css/font-awesome.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{URL::asset('css/bootstrap.css')}}" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="{{URL::asset('css/jquery.smartmenus.bootstrap.css')}}" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/jquery.simpleLens.css')}}">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/slick.css')}}">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/nouislider.css')}}">
    {{-- ourteam css --}}
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/ourteam.css')}}">
    <!-- Theme color -->
    <link id="switcher" href="{{URL::asset('css/theme-color/default-theme.css')}}" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="{{URL::asset('css/sequence-theme.modern-slide-in.css')}}" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">    
    <link href="{{URL::asset('css/rating.css')}}" rel="stylesheet">    
    {{-- font awesome --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

    <!-- khalti api source -->
    <script src="https://khalti.com/static/khalti-checkout.js"></script>
    <!-- khalti api source -->
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  
<style>

</style>
    <style type="text/css">
        .jumbotronImage{
          width: 100%;
          max-height: 300px;
          overflow: hidden;
           /* Add the blur effect */
          filter: blur(5px);
          -webkit-filter: blur(5px);

        }
        .jumbot-image{
          width: 100%;
          max-height: 300px;
        }

.elem, .elem * {
  box-sizing: border-box;
  margin: 0 !important; 
}
.elem {
  display: inline-block;
  font-size: 0;
  width: 33%;
  border: 20px solid transparent;
  border-bottom: none;
  background: #fff;
  padding: 10px;
  height: auto;
  border: 1px solid #eff2f6;
  border-radius: 40px 40px 40px 40px;
  background-clip: padding-box;
}
.elem:hover{
      -webkit-box-shadow: 0 10px 90px rgba(0, 0, 0, 0.08);
    box-shadow: 0 10px 90px rgba(0, 0, 0, 0.08);
}
.elem > span {
  display: block;
  cursor: pointer;
  height: 0;
  padding-bottom: 70%;
  background-size: cover;
  border-radius: 39px;
  border-radius: 40px 40px 0px 0px;
  background-position: center center;
}
.lcl_fade_oc.lcl_pre_show #lcl_overlay,
.lcl_fade_oc.lcl_pre_show #lcl_window,
.lcl_fade_oc.lcl_is_closing #lcl_overlay,
.lcl_fade_oc.lcl_is_closing #lcl_window {
  opacity: 0 !important;
}
.lcl_fade_oc.lcl_is_closing #lcl_overlay {
  -webkit-transition-delay: .15s !important; 
  transition-delay: .15s !important;
}

    </style>
    <!-- REQUIRED ELEMENTS -->

<link rel="stylesheet" href="css/lc_lightbox.css" />


<!-- SKINS -->
<link rel="stylesheet" href="skins/minimal.css" />

  </head>
  <body> 
   <!-- wpf loader Two -->
   <!--  <div id="wpf-loader-two">          
      <div class="wpf-loader-two-inner">
        <span>Loading</span>
      </div>
    </div>  -->
    <!-- / wpf loader Two -->       
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->


  <!-- Start header section -->
  <header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-top-area">
              <!-- start header top left -->
              <div class="aa-header-top-left">
                <!-- / currency -->
                <!-- start cellphone -->
                <div class="cellphone hidden-xs">
                  <p><span class="fa fa-phone"></span>01-4416599</p>
                </div>
                <!-- / cellphone -->
              </div>
              <!-- / header top left -->
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  <li><a href="/customer/profile">My Account</a></li>
                  <li class="hidden-xs"><a href="/wishlist">Wishlist</a></li>
                 
                
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="modal" data-target="#login-modal" href="#">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link"  data-toggle="modal" data-target="#register-modal" href="#">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();" style="border: none;">
                                               
                                    {{ __('Logout') }}
                                </a>
                                 @if(auth()->user()->user_type == 'admin')
                                  <a class="dropdown-list" href="{{route('/admin')}}" style="border: none;">Admin Dashboard</a>
                                  @else
                                <a class="dropdown-list" href="{{route('/customer/profile')}}" style="border: none;">Customer Dashboard</a>
                                @endif
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header top  -->
    
    <!-- start header bottom  -->
    <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <!-- Text based logo -->
                <a href="index.html">
                  <span class="fa fa-book"></span>
                  <p>Makalu<strong>Publication</strong> <span>Online Book Store</span></p>
                </a>
                <!-- img based logo -->
                <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
              </div>
              <!-- / logo  -->
              <!-- search box -->
              <div class="aa-search-box">
                <form action="/search" method="GET">
                  <input type="text" name="query" id="" placeholder="Search by Name or Category">
                  <button type="submit"><span class="fa fa-search"></span></button>
                </form>
              </div>
              <!-- / search box -->             
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->
 
@include('partials.nav')
@yield('PageContent')




  <!-- footer -->  
  <footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
     <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-top-area">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <h3>Main Menu</h3>
                  <ul class="aa-footer-nav">
                    <li><a href="/">Home</a></li>
                    <li><a href="/gallery">Gallery</a></li>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/contact">Contact Us</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Knowledge Base</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="#">Delivery</a></li>
                      <li><a href="#">Returns</a></li>
                      <li><a href="#">Services</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Useful Links</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="#">Site Map</a></li>
                      <li><a href="#">Suppliers</a></li>
                      <li><a href="#">FAQ</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Contact Us</h3>
                    <address>
                      <p> Makalu Publication House, कालिका मार्ग, Kathmandu</p>
                      <p><span class="fa fa-phone"></span>01-4416599</p>
                      <p><span class="fa fa-phone"></span>01-4435148</p>
                      <p><span class="fa fa-envelope"></span>info@makalupublication.com</p>
                    </address>
                    <div class="aa-footer-social">
                      <a href="https://facebook.com/makalupublication"><span class="fa fa-facebook"></span></a>
                      <a href="https://twitter.com/makalupublication"><span class="fa fa-twitter"></span></a>
                      <a href="https://facebook.com/makalupublication"><span class="fa fa-linkedin"></span></a>
                      <a href="https://facebook.com/makalupublication"><span class="fa fa-instagram"></span></a>
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
    <!-- footer-bottom -->
    <div class="aa-footer-bottom">
      <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-bottom-area">
            <p>© Copyright 2019 Makalu Publication House</p>
            <div class="aa-footer-payment">
                <span>We accept Khalti</span>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->

  <!-- Login Modal -->  
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">                      
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Login</h4>
          <form class="aa-login-form" action="{{ route('login') }}" method="POST">
              {{ csrf_field() }}
            <label for="">Username or Email address<span>*</span></label>
            <input type="text" placeholder="Username or email" name="email">
                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            <label for="">Password<span>*</span></label>
            <input type="password" placeholder="Password" name="password">
             @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
            <button class="aa-browse-btn" type="submit">Login</button>
            <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
            @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
            
          </form>
        </div>                        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>    
  <div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 400px;">
      <div class="modal-content">                      
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Register Now. </h4>
          <form class="aa-login-form" action="{{route('registerCustomer')}}" method="POST">
               @csrf
               <input type="hidden" name="getUserType" value="customer">
              <label for="">Full Name<span>*</span></label>
              <input type="text" name="name" placeholder="Your Full Name">
            <label for="">Email address<span>*</span></label>
            <input type="text" placeholder="E-mail" name="email">
            <label for="">Password<span>*</span></label>
            <input type="password" placeholder="Password" name="password">
            <label for="">Address<span>*</span></label>
            <input type="text" placeholder="Address" name="address" required>

            <input type="radio" value="male" name="gender"> Male
            <input type="radio" value="female" name="gender"> Female
            <div class="mt-4"></div>
            <button class="aa-browse-btn" type="submit">Register</button>
          </form>
        </div>                        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
  

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
                                          <a class="simpleLens-lens-image">
                                              <img src="img/view-slider/medium/polo-shirt-1.png" class="simpleLens-big-image" id="popup_image">
                                          </a>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- Modal view content -->
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="aa-product-view-content">
                                <h3 class="popup_title">Loading..Book Name</h3>
                                <div class="aa-price-block">
                                  <span class="aa-product-view-price popup_price">Loading..Book Pricec</span>
                                  <p class="aa-product-avilability">Avilable<!-- : <span>In stock</span></p> -->
                                </div>
                                <p class="popup_abstract"></p>
                                  <p class="aa-prod-category">
                                    Category: <a href="#" class="categoryName">Category</a>
                                  </p>
                                  <p class="authors">
                                    Author/s: <a href="#" class="popup_author">Auhor</a>
                                  </p>
                               
                                <div class="aa-prod-view-bottom">
                                  <a href="#" class="aa-add-to-cart-btn" id="popupBuyBoook"><span class="fa fa-shopping-cart"></span>Buy Book</a>
                                  <a href="#" class="aa-add-to-cart-btn" id="popupViewDetails">View Details</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>                        
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- / quick view modal -->           
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src= "{{URL::asset('js/bootstrap.js')}}"></script>  
  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="{{URL::asset('js/jquery.smartmenus.js')}}"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script type="text/javascript" src="{{URL::asset('js/jquery.smartmenus.bootstrap.js')}}"></script>  
  <!-- To Slider JS -->
  <script src="{{URL::asset('js/sequence.js')}}"></script>
  <script src="{{URL::asset('js/sequence-theme.modern-slide-in.js')}}"></script>  
  <!-- Product view slider -->
  <script type="text/javascript" src="{{URL::asset('js/jquery.simpleGallery.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/jquery.simpleLens.js')}}"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="{{URL::asset('js/slick.js')}}"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="{{URL::asset('js/nouislider.js')}}"></script>
  <!-- Custom js -->
  <script src="{{URL::asset('js/custom.js')}}"></script> 
  <!-- notification js -->
  <script src="{{URL::asset('js/notify.min.js')}}"></script>
<script>
        $(document).ready(function(){
         $('.popup').click(function(e) {
         var getId=$(this).attr('id');
        
               $.ajax({
                        type : 'post',
                        url : '{{url("fetchBookDataPopup")}}',
                        data:{'getId':getId},
                        success:function(result){
                        popup_title=result.popup_title
                        popup_image=result.popup_image
                        popup_price=result.popup_price
                        popup_author=result.popup_author
                        popup_abstract=result.popup_abstract
                        publicURL=result.publicURL
                        categoryName=result.categoryName
                        //dynamic image to popupbox
                        $('#popup_image').attr('src',popup_image);
                        //dynamic title to popupbx
                        $('.popup_title').html(popup_title);

                        $('.popup_price').html("Rs."+popup_price);
                        $('.popup_abstract').html(popup_abstract);
                        $('.categoryName').html(categoryName);
                        $('.popup_author').html(popup_author);
                        

                        //dymanic link to buy or viewbook
                        $('#popupViewDetails').attr('href','');
                        $('#popupBuyBoook').attr('href','');
                        $('#popupViewDetails').attr('href',publicURL+'/book/'+getId);
                        $('#popupBuyBoook').attr('href',publicURL+'/buy/'+getId);
                        
                        }


                    });

          $('#quick-view-modal').modal('toggle');
          return false;

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

        <script type="text/javascript">
           $(document).ready(function(){

         $('.wislistTrigger').click(function(e) {
         var getId=$(this).attr('wislistBookId');
        
               $.ajax({
                        type : 'post',
                        url : '{{url("insertWishlist")}}',
                        data:{'getId':getId},
                        success:function(result){
                        message=result.message
                        $.notify(message); 
                        }


                    });//end of ajax


         });//end of click function

      
       


      });    //end of document ready function  






        </script>
        @yield('PageScripts')
  
  </body>
</html>
