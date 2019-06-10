  $(document).ready(function(){
         $('.popup').click(function(e) {
         var getId=$(this).attr('id');
         var path='/fetchBookDataPopup';
         var fullURL = url.concat(path);

               $.ajax({
                        type : 'post',
                        url : fullURL,
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
                        $('#popupOrder').attr('href',publicURL+'/order/'+getId);
                        
                        }


                    });

          $('#quick-view-modal').modal('toggle');
          return false;

         });

      
       


      });     