<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css">
<style type="text/css">
	.button{
		position: relative;
	}
	.btn-prev{
		position: absolute;
		top: 500px;
		left: 50px;
	}
.btn-next{
		position: absolute;
		top: 500px;
		right: 50px;
	}
	.showItem img{
		max-width: 100%;
    max-height: 100%;
	}
	.showItem{
		width: 765px; 
		box-shadow: 1px 1px 1px 1px;
	}

</style>
 <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="container">
	<div class="row">
			<div class="col-md-2">
				<div class="button">
					<div id="prevbtnDiv">
					@if($page_no!==1)
					<a href="#" class="btn btn-success btn-prev btnPrevNext" id='btn-prev'  pno='{{$page_no}}' paction='prev'>Previous</a>	
					@endif	
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="showItem" id="toShowFetchedBook">	
					<img src="{{URL::asset('uploads/test.jpg')}}" id="bookimginner">
				</div>
			</div>
			<div class="col-md-2">
				<div class="button">
				   <a href="#" class="btn btn-success btn-next btnPrevNext" id='btn-next' pno='{{$page_no}}' paction='next'>Next</a>			
				</div>
			</div>
		</div>

</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
 integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.bundle.min.js"></script>

<script>
        $(document).ready(function(){

        	$(document).on('click', '.btnPrevNext', function() {
		  var page_no = $(this).attr('pno');
		  	
		  var action = $(this).attr('paction');
		  var imgout;
		  var session_page_no;
		 
          var d = new Date();
                $.ajax({
                        type : 'post',
                        url : '{{url("/customer/readbook/fetch")}}',
                        data:{'page_no':page_no,
                        	   'action':action
                    		},
                        success:function(result){
                        session_page_no = result.session_page_no
                        url = result.url
                      //  imgout="<img id='bookimginner'src='uploads/test2.jpg'>";

                        //$('#toShowFetchedBook').html(session_page_no);
                        $('.btnPrevNext').attr("pno",session_page_no);
                        $('#bookimginner').attr("src","");
                        $('#bookimginner').attr("src",url+d.getTime());

                        	if(session_page_no>1){
                prevBtn="<a href='#' class='btn btn-success btn-prev btnPrevNext' id='btn-prev'  pno='"+session_page_no+"' paction='prev'>Previous</a>";
                        		$('#prevbtnDiv').replaceWith(prevBtn);
		  		
		  						}
		  						else if(session_page_no==1){
		  							$('#prevbtnDiv').replaceWith("");
		  						}

                        }

                    }); 
                // end of ajax request
         

	   		});   
		  // end of  btn click function




        });
        // end of documentReadyFunction
        </script>
        <script type="text/javascript">
         
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
             
        </script>
    
</body>
</html>


