<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
	.loadingbeam {
    position: fixed;
    top: 45%;
  
    left: 46%;
}
.float-menu{
	position: fixed;
	top: 40%;
	left: 0%;
}
.float-menu ul{
	list-style: none;
	padding: 0px;
	
}

.float-menu ul li {
	
}
.float-menu ul li a {
    text-decoration: none;
    display: block;
    padding-left: 6px;
    font-size: 30px;
    background: #4CAF50;
    padding: 4px;
    margin-bottom: 1px;
    color: white;
}
.float-menu ul li a:hover{
	color: yellow;
padding-left: 10px;
}
.float-menu ul li a mybooks:hover{
color: yellow;
padding-left: 10px;
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
					<button href="#" class="btn btn-success btn-prev btnPrevNext" id='btn-prev'  pno='{{$page_no}}' paction='prev'>Previous</button>	
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
				   <button class="btn btn-success btn-next btnPrevNext" id='btn-next' pno='{{$page_no}}' paction='next'>Next</button>			
				</div>
			</div>
		</div>
		<div class="loadingbeam">
			<img src="{{URL::asset('img/lg.-text-entering-comment-loader.gif')}}" width="100px">
			
		</div>
		<div class="float-menu">
			<ul>
				<li><a href="#" class="home"><i class="fa fa-home"></i></a></li>
				<li><a href="#" class="mybooks"><i class="fa fa-book"></i></a></li>
			</ul>
		</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"
 integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.bundle.min.js"></script>

<script>
        $(document).ready(function(){
        	$('.loadingbeam').hide();
        	$(document).on('click', '.btnPrevNext', function() {
        		$('#bookimginner').fadeOut();
        		$('.loadingbeam').show();
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
                        $('#toShowFetchedBook').append(result.bookFile);
                        $('#bookimginner').fadeIn();

                        $('#bookimginner').attr("src",url+d.getTime());
                        $('.loadingbeam').hide();
						
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


