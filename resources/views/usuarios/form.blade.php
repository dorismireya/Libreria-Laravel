
@if($errors->has('nombre'))
<div class="form-group has-error">
	<div class="help-block">
		{{ $errors->first('nombre') }}
	</div>
@else
<div class="form-group">
@endif
	{!! Form::label('nombre', 'Nombre', ['class' => 'control-label']) !!}	
	{!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>
@if($errors->has('ape_pat'))
<div class="form-group has-error">
	<div class="help-block">
		{{ $errors->first('ape_pat') }}
	</div>
@else
<div class="form-group">
@endif
	{!! Form::label('ape_pat', 'Apellido Paterno', ['class' => 'control-label']) !!}	
	{!! Form::text('ape_pat', null, ['class' => 'form-control']) !!}
</div>
@if($errors->has('ape_mat'))
<div class="form-group has-error">
	<div class="help-block">
		{{ $errors->first('ape_mat') }}
	</div>
@else
<div class="form-group">
@endif
	{!! Form::label('ape_mat', 'Apellido materno', ['class' => 'control-label']) !!}	
	{!! Form::text('ape_mat', null, ['class' => 'form-control']) !!}
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
	{!! Form::label('username', 'Nombre de usuario', ['class' => 'control-label']) !!}	
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