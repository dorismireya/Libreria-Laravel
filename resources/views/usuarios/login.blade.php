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
	                 		@if(session('mensaje'))
							<div class="alert alert-success">
								{{ session('mensaje') }}
							</div>
							@endif

							@if($errors->has('login'))
							<div class="alert alert-danger">
								{{ $errors->first('login') }}
							</div>
							@endif
			                {!! Form::open(['route' => 'usuarios.logear']) !!}
								<div class="form-group">
									{!! Form::label('username', 'Usuario', ['class' => 'control-label']) !!}
									{!! Form::text('username', null, ['class' => 'form-control']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('password', 'Contraseña', ['class' => 'control-label']) !!}
									{!! Form::password('password', ['class' => 'form-control']) !!}
								</div>
								<div class="text-center">
									<button type="submit" class="btn btn-primary">
										<b class="glyphicon glyphicon-log-in"></b>  Ingresar
									</button>
								</div>
								<div>
									<a href="#" class="text-center new-account">Crear Cuenta</a>
								</div>
							{!! Form::close() !!}
	        </div>
	    </div>
	</div>
</div>
	<script src="{!! asset('js/jquery-3.1.1.min.js') !!}"></script>
	<script src="{!! asset('js/bootstrap.min.js') !!}"></script>

</body>
</html>