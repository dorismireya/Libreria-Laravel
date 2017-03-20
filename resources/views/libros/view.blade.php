@extends('plantillas.menu')

@section('contenido')
<div class="col-md-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4>Detalle de Libro</h4>
		</div>
		<div class="panel-body">
			<table class="table table-bordered">
				<tr>
					<td><strong>Id. de Libro</strong></td>
					<td>{{ $libro->id_libro }}</td>
				</tr>
				<tr>
					<td><strong>Titulo</strong></td>
					<td>{{ $libro->titulo }}</td>
				</tr>
				<tr>
					<td><strong>Descripcion</strong></td>
					<td>{{ $libro->descripcion}}</td>
				</tr>
				<tr>
					<td><strong>Archivo</strong></td>
					<td>{{ $libro->archivo }}</td>
				</tr>
			</table>
			<div class="text-center">
				<a href="" class="btn btn-success">
					<b class="glyphicon glyphicon-edit"></b> Editar
				</a>
				<a href="" class="btn btn-danger">
					<b class="glyphicon glyphicon-trash"></b> Eliminar
				</a>
				<a href="" class="btn btn-warning">
					<b class="glyphicon glyphicon-remove"></b> Salir
				</a>
			</div>
		</div>
	</div>
</div>
@endsection