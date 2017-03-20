@extends('plantillas.menu')

@section('contenido')
<div class="col-md-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4>Editar Libro</h4>
		</div>
		<div class="panel-body">
			{!! Form::model($libro, [
				'route' => ['libros.update', $libro->id_libro],
				'method' => 'put',
				]) !!}
				@include('libros.form')		
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