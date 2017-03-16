<div class="form-group">
	{!! Form::label('nombres', 'Nombre', ['class' => 'control-label']) !!}	
	{!! Form::text('nombres', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('apellidos', 'Apellido', ['class' => 'control-label']) !!}	
	{!! Form::text('apellidos', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('email', 'Email', ['class' => 'control-label']) !!}	
	{!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('username', 'Nombre de usuario', ['class' => 'control-label']) !!}	
	{!! Form::text('username', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('password', 'Contraseña', ['class' => 'control-label']) !!}	
	{!! Form::password('password', ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('rpassword', 'Repita su contraseña', ['class' => 'control-label']) !!}	
	{!! Form::password('rpassword', ['class' => 'form-control']) !!}
</div>