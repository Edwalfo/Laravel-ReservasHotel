
@php
$current_route = request()
    ->route()
    ->getName();

@endphp
<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('entrada') }}
            {{ Form::date('entrada', $reserva->entrada, ['class' => 'form-control' . ($errors->has('entrada') ? ' is-invalid' : ''), 'placeholder' => 'Entrada','min'=>(date('Y-m-d'))]) }}
            {!! $errors->first('entrada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('salida') }}
            {{ Form::date('salida', $reserva->salida, ['class' => 'form-control' . ($errors->has('salida') ? ' is-invalid' : ''), 'placeholder' => 'Salida','min'=>(date('Y-m-d'))]) }}
            {!! $errors->first('salida', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('codigo') }}
            {{ Form::text('codigo', $reserva->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
            {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        @if ($current_route == 'reservas.edit')
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::select('estado',array('0' => 'Creada', '1' => 'Hospedado', '2' => 'Cancelada', '3' => 'Perdida', '4' => 'Finalizada'), $reserva->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        @endif
        <div class="form-group">
            {{ Form::label('huesped nombre') }}
            {{ Form::select('huesped_id',$huesped, $reserva->huesped_id, ['class' => 'form-control' . ($errors->has('huesped_id') ? ' is-invalid' : ''), 'placeholder' => 'Huesped nombre']) }}
            {!! $errors->first('huesped_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('habitacion numero') }}
            {{ Form::select('habitacion_id',$habitacion, $reserva->habitacion_id, ['class' => 'form-control' . ($errors->has('habitacion_id') ? ' is-invalid' : ''), 'placeholder' => 'Habitacion numero']) }}
            {!! $errors->first('habitacion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt-2">
        <a class="btn btn-secondary" href="{{ route('reservas.index') }}" role="button">Cancelar</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>