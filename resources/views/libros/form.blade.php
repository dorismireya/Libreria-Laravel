
@if($errors->has('titulo'))
<div class="form-group has-error">
	<div class="help-block">
		{{ $errors->first('titulo') }}
	</div>
@else
<div class="form-group">
@endif
	{!! Form::label('titulo', 'Titulo', ['class' => 'control-label']) !!}	
	{!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>
@if($errors->has('descripcion'))
<div class="form-group has-error">
	<div class="help-block">
		{{ $errors->first('descripcion') }}
	</div>
@else
<div class="form-group">
@endif
	{!! Form::label('descripcion', 'Descripcion', ['class' => 'control-label']) !!}	
	{!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>
