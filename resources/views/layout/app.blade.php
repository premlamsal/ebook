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
                <!-- start language -->
                <div class="aa-language">
                  <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <img src="{{URL::asset('img/flag/english.jpg')}}" alt="english flag">ENGLISH
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#"><img src="{{URL::asset('img/flag/french.jpg')}}" alt="">FRENCH</a></li>
                      <li><a href="#"><img src="img/flag/english.jpg" alt="">ENGLISH</a></li>
                    </ul>
                  </div>
                </div>
                <!-- / language -->

                <!-- start currency -->
                <div class="aa-currency">
                  <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <i class="fa fa-usd"></i>USD
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#"><i class="fa fa-euro"></i>EURO</a></li>
                      <li><a href="#"><i class="fa fa-jpy"></i>YEN</a></li>
                    </ul>
                  </div>
                </div>
                <!-- / currency -->
                <!-- start cellphone -->
                <div class="cellphone hidden-xs">
                  <p><span class="fa fa-phone"></span>00-62-658-658</p>
                </div>
                <!-- / cellphone -->
              </div>
              <!-- / header top left -->
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  <li><a href="account.html">My Account</a></li>
                  <li class="hidden-xs"><a href="wishlist.html">Wishlist</a></li>
                  <li class="hidden-xs"><a href="cart.html">My Cart</a></li>
                  <li class="hidden-xs"><a href="checkout.html">Checkout</a></li>
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
                                <a class="dropdown-list" href="{{route('/customer/profile')}}" style="border: none;">Customer Profile</a>

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
                  <span class="fa fa-shopping-cart"></span>
                  <p>daily<strong>Shop</strong> <span>Your Shopping Partner</span></p>
                </a>
                <!-- img based logo -->
                <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
              </div>
              <!-- / logo  -->
               <!-- cart box -->
              <div class="aa-cartbox">
                <a class="aa-cart-link" href="#">
                  <span class="fa fa-shopping-basket"></span>
                  <span class="aa-cart-title">SHOPPING CART</span>
                  <span class="aa-cart-notify">2</span>
                </a>
                <div class="aa-cartbox-summary">
                  <ul>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="img/woman-small-2.jpg" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Product Name</a></h4>
                        <p>1 x $250</p>
                      </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="img/woman-small-1.jpg" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Product Name</a></h4>
                        <p>1 x $250</p>
                      </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>                    
                    <li>
                      <span class="aa-cartbox-total-title">
                        Total
                      </span>
                      <span class="aa-cartbox-total-price">
                        $500
                      </span>
                    </li>
                  </ul>
                  <a class="aa-cartbox-checkout aa-primary-btn" href="checkout.html">Checkout</a>
                </div>
              </div>
              <!-- / cart box -->
              <!-- search box -->
              <div class="aa-search-box">
                <form action="">
                  <input type="text" name="" id="" placeholder="Search here ex. 'man' ">
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
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Our Services</a></li>
                    <li><a href="#">Our Products</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
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
                      <li><a href="#">Discount</a></li>
                      <li><a href="#">Special Offer</a></li>
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
                      <li><a href="#">Search</a></li>
                      <li><a href="#">Advanced Search</a></li>
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
                      <p> 25 Astor Pl, NY 10003, USA</p>
                      <p><span class="fa fa-phone"></span>+1 212-982-4589</p>
                      <p><span class="fa fa-envelope"></span>dailyshop@gmail.com</p>
                    </address>
                    <div class="aa-footer-social">
                      <a href="#"><span class="fa fa-facebook"></span></a>
                      <a href="#"><span class="fa fa-twitter"></span></a>
                      <a href="#"><span class="fa fa-google-plus"></span></a>
                      <a href="#"><span class="fa fa-youtube"></span></a>
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
            <p>Designed by <a href="http://www.markups.io/">MarkUps.io</a></p>
            <div class="aa-footer-payment">
              <span class="fa fa-cc-mastercard"></span>
              <span class="fa fa-cc-visa"></span>
              <span class="fa fa-paypal"></span>
              <span class="fa fa-cc-discover"></span>
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
          <h4>Login or Register</h4>
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
    <div class="modal-dialog">
      <div class="modal-content">                      
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Register Now. </h4>
          <form class="aa-login-form" action="{{action('AccountController@store')}}" method="POST">
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
            
            <button class="aa-browse-btn" type="submit">Register</button>
            <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
           
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
                                <h3 class="popup_title">T-Shirt</h3>
                                <div class="aa-price-block">
                                  <span class="aa-product-view-price popup_price">$34.99</span>
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
        @yield('PageScripts')
  
  </body>
</html>
