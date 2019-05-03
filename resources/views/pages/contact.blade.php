@extends('layout.app')
@section('PageContent')
  
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="img/contactus.jpg" alt="contactus img" height="400" width="100%">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Contact</h2>
        <ol class="breadcrumb">
          <li><a href="/">Home</a></li>         
          <li class="active">Contact</li>
        </ol>
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
             <h2>We are wating to assist you..</h2>
             <p>Please Find our Location from the map below</p>
           </div>
           <!-- contact map -->
           <div class="aa-contact-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7064.988899332491!2d85.325377!3d27.702016!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4d881f4593a48104!2sMakalu+Publication+House!5e0!3m2!1sen!2snp!4v1556849842896!5m2!1sen!2snp" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
           </div>
           <!-- Contact address -->
           <div class="aa-contact-address">
             <div class="row">
               
               <div class="col-md-12">
                 <div class="aa-contact-address-right">
                   <address>
                     <h4>Makalu Publication House</h4>
                     <p>Complete Online Book Store</p>
                     <p><span class="fa fa-home"></span>कालिका मार्ग, Kathmandu</p>
                     <p><span class="fa fa-phone"></span>01-4416599,01-4435148</p>
                     <p><span class="fa fa-envelope"></span>Email: info@makalupublication.com</p>
                   </address>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
@endsection