@extends('layout.app')
@section('PageContent')
  
 
  <!-- / catg header banner section -->
<!-- start faq section -->
 <section id="aa-contact" style="background: #fff;">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="aa-contact-area">
           <div class="aa-contact-address">
            <!-- start opps code -->
            <div class="content">
              <div class="order-box">
             <h3>You are about to Order Book</h3>
             
                 <form class="aa-login-form" method="post" action="/postOrder" style="margin-left: 20px">
                   @csrf
                   <input type="hidden" name="id" value="{{$order_book->id}}">
                       <div class="form-group row">
                          <label for="title">Title: <b>{{$order_book->title}}</b></label>
                              <input type="hidden" class="form-control" name="Title" placeholder="Title" value="{{$order_book->title}}">
                        </div>
                         <div class="form-group row">
                          <label for="title">Quantity</label>
                              <input type="number" class="form-control" name="Quantity" placeholder="Quantity">
                        </div>
                        @if (!Auth::check())

                         <div class="form-group row">
                          <label for="title">Email</label>
                              <input type="email" class="form-control" name="Email" placeholder="Email">
                        </div>
                         <div class="form-group row">
                          <label for="title">Phone</label>
                              <input type="phone" class="form-control" name="Phone" placeholder="Phone">
                        </div>
                        @else
                        <p>Your Profile Information will be sent with this order.</p>
                        @endif
                        <p style="color: #f66">You will get Instant Response after this order.</p>
                        <input type="submit" class="aa-browse-btn">
                     
                 </form>
                </div>
              </div>
             <!-- end opps code -->
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
@endsection
@section('PageScripts')

@endsection