@extends('plantillas.menu')

@section('contenido')
<div class="col-md-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4>Lista de usuarios</h4>
		</div>
		<div class="panel-body">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Usuario</th>
						<th>Email</th>
						<th>Tipo</th>
						<th>Opciones</th>
					</tr>
				</thead>
				<tbody>
				@foreach($usuarios as $usuario)
					<tr>
						<td>{{ $usuario->nombres }}</td>
						<td>{{ $usuario->apellidos}}</td>
						<td>{{ $usuario->username }}</td>
						<td>{{ $usuario->email }}</td>
						<td>{{ $usuario->tipo }}</td>
						<td>
							<a href="{{ route('usuarios.show', 
								['id' => $usuario->id_usuario]) }}" 
							class="btn btn-xs btn-info" title="Ver">
								<b class="glyphicon glyphicon-eye-open"></b>
							</a>
							<a href="{{ route('usuarios.edit', 
								['id' => $usuario->id_usuario]) }}" 
								class="btn btn-xs btn-success" title="Editar">
								<b class="glyphicon glyphicon-edit"></b>
							</a>
							{!! Form::open(['route' => 
									['usuarios.destroy', $usuario->id_usuario],
							 	'method' => 'delete', 
							 	'class' => 'form-eliminar']) !!}
								<button type="submit" class="btn btn-xs btn-danger" title="Eliminar">
									<b class="glyphicon glyphicon-trash"></b>
								</button>
							{!! Form::close() !!}
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>	
		</div>	
	</div>
</div>
@endsection