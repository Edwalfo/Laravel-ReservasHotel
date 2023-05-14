@php
$current_route = request()
    ->route()
    ->getName();

@endphp
<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('numero') }}
            {{ Form::number('numero', $habitacion->numero, ['class' => 'form-control' . ($errors->has('numero') ? ' is-invalid' : ''), 'placeholder' => 'Numero']) }}
            {!! $errors->first('numero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('piso') }}
            {{ Form::select('piso_id',$piso, $habitacion->piso_id, ['class' => 'form-control' . ($errors->has('piso_id') ? ' is-invalid' : ''), 'placeholder' => 'Piso']) }}
            {!! $errors->first('piso_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipohabitacion') }}
            {{ Form::select('tipohabitacion_id',$tipohabitacion, $habitacion->tipohabitacion_id, ['class' => 'form-control' . ($errors->has('tipohabitacion_id') ? ' is-invalid' : ''), 'placeholder' => 'Tipo habitacion']) }}
            {!! $errors->first('tipohabitacion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        @if ($current_route == 'habitacions.edit')
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::select('estado',array('0' => 'Disponible', '1' => 'Ocupada', '2' => 'Limpieza', '3' => 'Reparacion', '4' => 'Reservada'), $habitacion->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        @endif

    </div>
    <div class="box-footer mt-2">
        <a class="btn btn-secondary" href="{{ route('habitacions.index') }}" role="button">Cancelar</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>