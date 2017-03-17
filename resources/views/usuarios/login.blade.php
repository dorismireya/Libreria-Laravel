<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap-theme.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/estilo.css') !!}">
</head>
<body>
	<div class="container">
	    <div class="row">
	        <div class="col-sm-6 col-md-4 col-md-offset-4">
	            <h1 class="text-center login-title">Ingrese sus Datos</h1>
	            <div class="account-wall">
	                 <img class="profile-img" src="{!! asset('imagen/img_avatar2.png') !!}"
	                    alt="">
	                <form class="form-signin">
	                <input type="text" class="form-control" placeholder="Nombre de Usuario" required autofocus>
	                <input type="password" class="form-control" placeholder="Contraseña" required>
	                <button class="btn btn-lg btn-primary btn-block" type="submit">
	                    Ingresar</button>
	                </form>
	                 <a href="#" class="text-center new-account">Crear Cuenta</a>
	        </div>
	    </div>
	</div>
	<script src="{!! asset('js/jquery-3.1.1.min.js') !!}"></script>
	<script src="{!! asset('js/bootstrap.min.js') !!}"></script>

</body>
</html>