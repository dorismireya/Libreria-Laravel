
@if($errors->has('nombres'))
<div class="form-group has-error">
	<div class="help-block">
		{{ $errors->first('nombres') }}
	</div>
@else
<div class="form-group">
@endif
	{!! Form::label('nombres', 'Nombres', ['class' => 'control-label']) !!}	
	{!! Form::text('nombres', null, ['class' => 'form-control']) !!}
</div>
@if($errors->has('apellidos'))
<div class="form-group has-error">
	<div class="help-block">
		{{ $errors->first('apellidos') }}
	</div>
@else
<div class="form-group">
@endif
	{!! Form::label('apellidos', 'Apellidos', ['class' => 'control-label']) !!}	
	{!! Form::text('apellidos', null, ['class' => 'form-control']) !!}
</div>
@if($errors->has('email'))
<div class="form-group has-error">
	<div class="help-block">
		{{ $errors->first('email') }}
	</div>
@else
<div class="form-group">
@endif
	{!! Form::label('email', 'Email', ['class' => 'control-label']) !!}	
	{!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>
@if($errors->has('username'))
<div class="form-group has-error">
	<div class="help-block">
		{{ $errors->first('username') }}
	</div>
@else
<div class="form-group">
@endif
	{!! Form::label('username', 'Usuario', ['class' => 'control-label']) !!}	
	{!! Form::text('username', null, ['class' => 'form-control']) !!}
</div>
@if($errors->has('password'))
<div class="form-group has-error">
	<div class="help-block">
		{{ $errors->first('password') }}
	</div>
@else
<div class="form-group">
@endif
	{!! Form::label('password', 'Contraseña', ['class' => 'control-label']) !!}	
	{!! Form::password('password', ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('password_confirmation', 'Repita su contraseña', ['class' => 'control-label']) !!}	
	{!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
</div>