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
	                <img class="profile-img" src="{!! asset('imagen/img_avatar2.png') !!}" alt="">
		                @if($errors->has('login'))
						<div class="alert alert-danger">
							{{ $errors->first('login') }}
						</div>
						@endif
						<form class="form-signin">
						{!! Form::open(['route'=>'usuarios.logear']) !!}
							<div class="form-control">
								{!! Form::label('username', 'Nombre de usuario', ['class' => 'control-label']) !!}
								{!! Form::text('username', null, ['class' => 'form-control']) !!}
							
								{!! Form::label('password', 'Contraseña', ['class' => 'control-label']) !!}
								{!! Form::password('password', ['class' => 'form-control']) !!}
							</div>
							<div class="text-right">
								<button type="submit" class="btn btn-lg btn-primary btn-block"> Ingresar </button>
							</div>
						{!! Form::close() !!}
						 <a href="#" class="text-center new-account">Crear Cuenta</a>
						</form>	
	            </div>
	           
	        </div>
	    </div>
	</div>
	<script src="{!! asset('js/jquery-3.1.1.min.js') !!}"></script>
	<script src="{!! asset('js/bootstrap.min.js') !!}"></script>

</body>
</html>