@extends('layout.app')
@section('PageContent')
  
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
    <img src="img/gallery-banner.png" alt="gallery img" width="100%">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Gallery</h2>
        <ol class="breadcrumb">
          <li><a href="/">Home</a></li>         
          <li class="active">Gallery</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->
<!-- start gallery section -->
 <section id="aa-contact" style="background: #fff;">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="aa-contact-area">
           <div class="aa-contact-address">
            <!-- start gallery code -->
            <div class="content">
              @foreach($galleries as $gallery)
               
                <a class="elem" href="{{$gallery->image}}" title="{{$gallery->title}}" data-lcl-txt="{{$gallery->short_description}}" data-lcl-author="Makalu Publication" data-lcl-thumb="{{$gallery->image}}" style="position: relative;">
              <h5 style="background: #ff6666; padding:5px;position: absolute;bottom:0%;left: 0%;color: white;text-align: center;border-radius: 0px 0px 40px 40px; width: 100%">{{str_limit($gallery->title,40)}}</h5>
                    <span style="background-image: url({{$gallery->image}});"></span>
                  </a>
              @endforeach
             
                <br/><br/>
              </div>
             <!-- end gallery code -->
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
@endsection
@section('PageScripts')

<script src="lib/jquery.js" type="text/javascript"></script>

<script src="js/lc_lightbox.lite.js" type="text/javascript"></script>


<!-- ASSETS -->
<script src="lib/AlloyFinger/alloy_finger.min.js" type="text/javascript"></script>
<!-- LIGHTBOX INITIALIZATION -->
<script type="text/javascript">
$(document).ready(function(e) {
   
  // live handler
  lc_lightbox('.elem', {
    wrap_class: 'lcl_fade_oc',
    gallery : true, 
    thumb_attr: 'data-lcl-thumb', 
    
    skin: 'minimal',
    radius: 0,
    padding : 0,
    border_w: 0,
  }); 

});
</script>
@endsection