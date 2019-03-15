@extends('layout.app')
@section('PageContent')
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
    <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
    <div class="aa-catg-head-banner-area">
      <div class="container">
       <div class="aa-catg-head-banner-content">
         <h2>About Us</h2>
       </div>
      </div>
    </div>
   </section>
   <!-- / catg header banner section -->
 <!-- start contact section -->
  <section id="aa-contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-contact-area">
            <div class="aa-contact-top">
              <h2>Who We Are?</h2>
  
              <hr style="background-color: #ff6666; height: 3px; width: 100%; border-radius: 100px;">
              <p style="text-align: justify;">
                @if (count($abouts)>0)
                @foreach ($abouts as $item)
                        {!!$item->about_body!!} 
                @endforeach
               
                @endif
              
 
 
     <h2>OUR TEAM</h2>
     <p> मकालु प्रकाशन गृहकाे व्यवस्थापन तथा कार्यरत कर्मचारीहरू</p>
     <div style="background-color: #ff6666; height:20px; width: 100%; border-radius: 100px; font-weight: bold; color: white; ">
      ADMINISTRATION AND FINANCE
     </div>
           <!-- <hr style="background-color: #ff6666; height: 3px; width: 100%; border-radius: 100px;"> -->
      
        {{-- Our Team  start  --}}
     {{-- <div class="container">  --}}
          
          <div class="row ">
              @if (count($admin)>0)
            @foreach ($admin as $item)
              <div class="col-md-3 col-sm-6 " style="margin-top:10px;">
                  <div class="our-team">
                      <div class="pic"><img src="../img/staffImages/{{$item->staff_image}}" alt=""></div>
                      <h3 class="title">{{$item->staff_name}}</h3>
                      <span class="post">{{$item->staff_position}}</span>
                    
                    
                  </div>
              </div>
              @endforeach
              @endif
       
          </div>
            {{-- <ul class="icon">
                          <li><a href="#" class="fab fa-facebook"></a></li>
                          <li><a href="#" class="fab fa-skype"></a></li>
                          <li><a href="#" class="fab fa-twitter"></a></li>
                      </ul> --}}
      {{-- </div> --}}
        {{-- Our Team  end --}}
      
         <div  style="background-color: #ff6666; height: 20px; width: 100%; border-radius: 100px; font-weight: bold; color: white; ">
          MARKETING 
     </div>
           <!-- <hr style="background-color: #ff6666; height: 3px; width: 100%; border-radius: 100px;"> -->
           <div class="row ">
              @if (count($marketing)>0)
            @foreach ($marketing as $item)
              <div class="col-md-3 col-sm-6 "  style="margin-top:10px;">
                  <div class="our-team mt-4">
                      <div class="pic"><img src="../img/staffImages/{{$item->staff_image}}" alt=""></div>
                      <h3 class="title">{{$item->staff_name}}</h3>
                      <span class="post">{{$item->staff_position}}</span>
                  </div>
              </div>
              @endforeach
              @endif
       
          </div>
         <div style="background-color: #ff6666; height: 20px; width: 100%; border-radius: 100px; font-weight: bold; color: white; ">COMPUTER DESK 
     </div>
           <!-- <hr style="background-color: #ff6666; height: 3px; width: 100%; border-radius: 100px;"> -->
           <div class="row ">
              @if (count($computer)>0)
            @foreach ($computer as $item)
              <div class="col-md-3 col-sm-6 "  style="margin-top:10px;">
                  <div class="our-team">
                      <div class="pic"><img src="../img/staffImages/{{$item->staff_image}}" alt=""></div>
                      <h3 class="title">{{$item->staff_name}}</h3>
                      <span class="post">{{$item->staff_position}}</span>
                  </div>
              </div>
              @endforeach
              @endif
       
          </div>
         <div style="background-color: #ff6666; height: 20px; width: 100%; border-radius: 100px; font-weight: bold; color: white; ">DISTRIBUTION COUNTER
 
     </div>
           <!-- <hr style="background-color: #ff6666; height: 3px; width: 100%; border-radius: 100px;"> -->
           <div class="row ">
              @if (count($DISTRIBUTION)>0)
            @foreach ($DISTRIBUTION as $item)
              <div class="col-md-3 col-sm-6 " style="margin-top:10px;" >
                  <div class="our-team">
                      <div class="pic"><img src="../img/staffImages/{{$item->staff_image}}" alt=""></div>
                      <h3 class="title">{{$item->staff_name}}</h3>
                      <span class="post">{{$item->staff_position}}</span>
                    
                    
                  </div>
              </div>
              @endforeach
              @endif
       
          </div>
     </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection