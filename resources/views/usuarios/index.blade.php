@extends('plantillas.menu')

@section('contenido')
<div class="col-md-8 col-md-offset-2">
	<table class="table">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Nombre de usuario<th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody>
		@foreach($usuarios as $usuario)
		<tr>
			<td>{{ $usuario->nombres }}</td>
			<td>{{ $usuario->username }}</td>
			<td>{{ $usuario->email }}</td>
		</tr>
		@endforeach
		</tbody>
	</table>
</div>
@endsection