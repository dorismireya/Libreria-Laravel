<!DOCTYPE html>
<html>
<head>
	<title>LIBRERIA VIRTUAL</title>

	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/estiloprincipal.css') !!}">
    <script src="{!! asset('js/jquery-3.1.1.min.js') !!}"></script>
	<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
</head>
<body>

	<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>                        
		      </button>
		      <a class="navbar-brand" href="#">Logo</a>
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		      <ul class="nav navbar-nav navbar-right">
		      	@if(!Auth::check())
		      	<li><a href="{{ route('usuarios.login') }}"><span class="glyphicon glyphicon-log-in"></span>  Ingresar</a></li>
		      	@endif	
		      </ul>
		    </div>
	  </div>
	</nav>

		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		    <!-- Indicators -->
		    <ol class="carousel-indicators">
		      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		      <li data-target="#myCarousel" data-slide-to="1"></li>
		    </ol>

		    <!-- Wrapper for slides -->
		    <div class="carousel-inner" role="listbox">
		      <div class="item active">
		        <img src="{!! asset('imagen/images10.jpg') !!}" alt="Image">
		        <div class="carousel-caption">
		          <h3>Sell $</h3>
		          <p>Money Money.</p>
		        </div>      
		      </div>

		      <div class="item">
		        <img src="{!! asset('imagen/images12.jpg') !!}" alt="Image">
		        <div class="carousel-caption">
		          <h3>More Sell $</h3>
		          <p>Lorem ipsum...</p>
		        </div>      
		      </div>
		    </div>

		    <!-- Left and right controls -->
		    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		      <span class="sr-only">Next</span>
		    </a>
		</div>
		  
		<div class="container text-center">    
		  <h3>What We Do</h3><br>
		  <div class="row">
		    <div class="col-sm-4">
		      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
		      <p>Current Project</p>
		    </div>
		    <div class="col-sm-4"> 
		      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
		      <p>Project 2</p>    
		    </div>
		    <div class="col-sm-4"> 
		      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
		      <p>Project 3</p>    
		    </div>
		  </div>
		</div><br>

		<footer class="container-fluid text-center">
		  <p>Diseñado por Mireya Terceros Ovando</p>
		</footer>

</body>
</html>