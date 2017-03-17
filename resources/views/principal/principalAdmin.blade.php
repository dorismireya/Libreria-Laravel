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
		<script src="{!! asset('js/menu.js') !!}"></script>

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
	      	@if(Auth::check())
	      	<li class="dropdown">
						<a href="#" 
							class="dropdown-toggle" 
							data-toggle="dropdown" 
							role="button" 
							aria-haspopup="true" 
							aria-expanded="false">
							<b class="glyphicon glyphicon-log-out"></b>
							{{ Auth::user()->username }}&nbsp;
							<span class="caret"></span>
						</a>
			          	<ul class="dropdown-menu">
			            	<li>
			            		<a href="{{ route('usuarios.logout') }}">
			            			Cerrar sesión
			            		</a>
			            	</li>
			          	</ul>
			  </li>
			@endif
	      </ul>
	    </div>
	  </div>
	</nav>
	@yield('menu')

	<footer class="container-fluid text-center">
	  <p>Developer for Mireya Terceros Ovando</p>
	</footer>
</body>
</html>