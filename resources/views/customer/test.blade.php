<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>
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

</head>
<body>
<div class="container">
	<div class="row">
			<div class="col-md-2">
				<div class="button">
					<div id="prevbtnDiv">
					   <button class="btn" id="prev-page">
				        <i class="fas fa-arrow-circle-left"></i> Prev Page
				      </button>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="showItem" id="toShowFetchedBook">	
					<canvas id="pdf-render"></canvas>
				</div>
			</div>
			<div class="col-md-2">
				<div class="button">
				  <button class="btn" id="next-page">
				        Next Page <i class="fas fa-arrow-circle-right"></i>
				      </button>		
				</div>
			</div>
		</div>
		
		<div class="float-menu">
			<ul>
				<li><a href="{{route('home')}}" class="home"><i class="fa fa-home"></i></a></li>
				<li><a href="{{route('/customer/profile')}}" class="mybooks"><i class="fa fa-book"></i></a></li>
			</ul>
		</div>
</div>
 <plank title="{{$filePath}}"></plank>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"
 integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.2.2/pdf.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  
    <script src="{{URL::asset('js/viewbook.js')}}"></script> 
    <script src="{{URL::asset('js/disabled.js')}}"></script> 


    
</body>
</html>


