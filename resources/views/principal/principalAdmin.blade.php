<!DOCTYPE html>
<html>
<head>
	<title>Bienvenido</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.min.css') !!}">
		<link rel="stylesheet" type="text/css" href="{!! asset('css/estilo.css') !!}">
		<script src="{!! asset('js/bootstrap.min.js')!!}"></script>
		<script src="{!! asset('js/jquery-3.1.1.min.js') !!}"></script>

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
	   
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Salir</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>
	  
	<div class="container-fluid text-center">    
	  <div class="row content">
	    <div class="col-sm-3 sidenav">
	      <p><a href="#">Link</a></p>
	      <p><a href="#">Link</a></p>
	      <p><a href="#">Link</a></p>
	    </div>
	    <div class="col-sm-9 text-left">
		    <article id="contenido">
				<div class="container-fluid">
					@yield('contenido')		
				</div>
			</article>
	  </div>
	</div>

	<footer class="container-fluid text-center">
	  <p>Developer for Mireya Terceros Ovando</p>
	</footer>

</body>
</html>