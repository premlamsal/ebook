@extends('layout.app')
@section('PageContent')
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Wishlist Page</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>                   
          <li class="active">Wishlist</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

 <!-- Cart view section -->
 <section id="cart-view">
   <div class="container">
     <div class="row" style="margin-bottom: 40px;">
       <div class="col-md-12">
         <div class="cart-view-area">
           <div class="cart-view-table aa-wishlist-table">
             <form action="">
               <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th></th>
                        <th></th>
                        <th>Product</th>
                        <th>Price</th>
                       
                        
                      </tr>
                    </thead>
                    <tbody>
                   @if($Wishlists->first())
                      @foreach($Wishlists as $Wishlist)
                      <tr>
                        <td><a class="remove wishlistRemoveBtn" href="javascript:void(0)" wishlistId="{{$Wishlist->id}}"><fa class="fa fa-close"></fa></a></td>
                        <td><a href="#"><img src="{{URL::asset('storage/Book_image').'/'.$Wishlist->image}}" alt="img"></a></td>
                        <td><a class="aa-cart-title" href="/book/{{$Wishlist->book_id}}">{{$Wishlist->title}}</a></td>
                        <td>Rs.{{$Wishlist->price}}</td>
                       
                        
                      </tr>  
                      @endforeach   
                    @else
                      <p>Nothing Added to Wishlist</p>
                    @endif             
                      </tbody>
                  </table>
                </div>
             </form>             
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->











@endsection

@section('PageScripts')


        <script type="text/javascript">
           $(document).ready(function(){

         $('.wishlistRemoveBtn').click(function(e) {
         var getId=$(this).attr('wishlistId');
        
               $.ajax({
                        type : 'post',
                        url : '{{url("deleteWishlist")}}',
                        data:{'getId':getId},
                        success:function(result){
                        message=result.message
                        $.notify(message); 
                        // Sets the new location of the current window.
                        window.location = "/wishlist"  
                        }


                    });//end of ajax

         });//end of click function

      
       


      });    //end of document ready function  






        </script>

@endsection
