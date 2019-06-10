 $(document).ready(function(){

         $('.wislistTrigger').click(function(e) {
         var getId=$(this).attr('wislistBookId');
        
               $.ajax({
                        type : 'post',
                        url : '{{url("/insertWishlist")}}',
                        data:{'getId':getId},
                        success:function(result){
                        message=result.message
                        $.notify(message); 
                        }


                    });//end of ajax


         });//end of click function

      
       


      });    //end of document ready function  




