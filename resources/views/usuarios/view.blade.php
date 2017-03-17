@extends('plantillas.menu')

@section('contenido')
<div class="col-md-10">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4>Detalle de usuario</h4>
		</div>
		<div class="panel-body">
			<table class="table table-bordered">
				<tr>
					<td><strong>Id. de Usuario</strong></td>
					<td>{{ $usuario->id_usuario }}</td>
				</tr>
				<tr>
					<td><strong>Nombres</strong></td>
					<td>{{ $usuario->nombres }}</td>
				</tr>
				<tr>
					<td><strong>Apellidos</strong></td>
					<td>{{ $usuario->apellidos}}</td>
				</tr>
				<tr>
					<td><strong>Email</strong></td>
					<td>{{ $usuario->email }}</td>
				</tr>
				<tr>
					<td><strong>Nombre de usuario</strong></td>
					<td>{{ $usuario->username }}</td>
				</tr>
				<tr>
					<td><strong>Tipo de usuario</strong></td>
					<td>{{ $usuario->tipo }}</td>
				</tr>
			</table>
			<div class="text-center">
				<a href="{{ route('usuarios.edit', ['id' => $usuario->id_usuario]) }}" 
					class="btn btn-success">
					<b class="glyphicon glyphicon-edit"></b> Editar
				</a>
				{!! Form::open([
					'route' => ['usuarios.destroy', $usuario->id_usuario],
					'method' => 'delete',
					'class' => 'form-eliminar',
					]) !!}
					<button class="btn btn-danger">
						<b class="glyphicon glyphicon-trash"></b> Eliminar
					</button>
				{!! Form::close() !!}
				<a href="" class="btn btn-primary">
					<b class="glyphicon glyphicon-remove"></b> Salir
				</a>
			</div>
		</div>
	</div>
</div>
@endsection