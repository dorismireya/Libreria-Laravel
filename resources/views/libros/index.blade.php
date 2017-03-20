@extends('plantillas.menu')

@section('contenido')
<div class="col-md-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4>Lista de cursos</h4>
		</div>
		<div class="panel-body">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Titulo</th>
						<th>Descripcion</th>
						<th>Archivo</th>
					</tr>
				</thead>
				<tbody>
				@forelse($libros as $libro)	
					<tr>
						<td>{{ $libro->titulo }}</td>
						<td>{{ $libro->descripcion }}</td>
						<td>
							<a href="{{ route('libros.show', 
								['id' => $libro->id_libro]) }}" 
							class="btn btn-xs btn-info" title="Ver">
								<b class="glyphicon glyphicon-eye-open"></b>
							
							<a href="{{ route('libros.edit', 
								['id' => $libro->id_libro]) }}" 
								class="btn btn-xs btn-success" title="Editar">
								<b class="glyphicon glyphicon-edit"></b>
							</a>
							{!! Form::open(['route' => 
									['libros.destroy', $libro->id_libro],
							 	'method' => 'delete', 
							 	'class' => 'form-eliminar']) !!}
								<button type="submit" class="btn btn-xs btn-danger" title="Eliminar">
									<b class="glyphicon glyphicon-trash"></b>
								</button>
							{!! Form::close() !!}
						</td>
					</tr>
				@empty
					<tr>
						<td colspan="3" class="text-center">No existen libros</td>
					</tr>
				@endforelse
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection