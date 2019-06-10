 $(document).ready(function(){
   var path='/insertWishlist';
   var fullURL = url.concat(path);   
         $('.wislistTrigger').click(function(e) {
         var getId=$(this).attr('wislistBookId');
        
               $.ajax({
                        type : 'post',
                        url : fullURL,
                        data:{'getId':getId},
                        success:function(result){
                        message=result.message
                        $.notify(message); 
                        }


                    });//end of ajax


         });//end of click function

      
       


      });    //end of document ready function  




