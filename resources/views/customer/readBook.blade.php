<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>

<style type="text/css">
*{
	padding:0px;
	margin: 0px;
}
	.button{
		position: relative;
	}
	.btn-prev{
		position: absolute;
		top: 500px;
		left: 92px;
	}
.btn-next{
		position: absolute;
		top: 500px;
		right: 90px;
	}
.top-bar {
  background: #333;
  color: #fff;
  padding: 1rem;
}

.btn {
  background: coral;
  color: #fff;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 0.7rem 2rem;
}

.btn:hover {
  opacity: 0.9;
}

.page-info {
  margin-left: 1rem;
}

.error {
  background: orangered;
  color: #fff;
  padding: 1rem;
}
#pdf-render{
  width: 100%;
}
	.showItem{
		
		box-shadow: 1px 1px 1px 1px #ff7f50
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
    padding: 4px;
    margin-bottom: 1px;
    background: coral;
    color: #fff;
}
.float-menu ul li a:hover{
	 opacity: 0.9;
	
}

@media only screen and (max-width: 768px) {
 
   .btn-prev{
		position: unset;
		
	}
.btn-next{
		position: unset;
		
  }
}
    </style>
    <title></title>
  </head>
  <body>
  	<div class="container">
	<div class="row">
			<div class="col-md-2">
				<div class="button">
					<div id="prevbtnDiv">
					   <button class="btn btn-prev" id="prev-page">
				        <i class="fas fa-arrow-circle-left"></i>
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
				  <button class="btn btn-next" id="next-page">
				         <i class="fas fa-arrow-circle-right"></i>
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

      <span class="page-info">
        Page <span id="page-num"></span> of <span id="page-count"></span>
      </span>
  </div>

    
    <plank title="{{$filePath}}"></plank>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.2.2/pdf.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  
    <script src="{{URL::asset('js/viewbook.js')}}"></script> 
    <!-- <script src="{{URL::asset('js/disabled.js')}}"></script>  -->

  </body>
</html>
