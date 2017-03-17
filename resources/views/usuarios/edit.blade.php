@extends('plantillas.menu')

@section('contenido')
<div class="col-md-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4>Editar Usuario</h4>
		</div>
		<div class="panel-body">
			{!! Form::model($usuario, ['route' => ['usuarios.update', $usuario->id_usuario], 'method' => 'put',]) !!}
				@include('usuarios.form')		
				<div class="text-center">
					<button type="submit" class="btn btn-success">
						<b class="glyphicon glyphicon-new-window"></b> Actualizar
					</button>
					<a class="btn btn-warning" href="">
						<b class="glyphicon glyphicon-remove"></b> Salir
					</a>
				</div>
			{!! Form::close() !!}	
		</div>
	</div>
</div>
@endsection