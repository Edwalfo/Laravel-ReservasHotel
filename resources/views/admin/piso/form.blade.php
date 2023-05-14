@php
$current_route = request()
    ->route()
    ->getName();

@endphp


<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('numero') }}
            {{ Form::number('numero', $piso->numero, ['class' => 'form-control' . ($errors->has('numero') ? ' is-invalid' : ''), 'placeholder' => 'Numero']) }}
            {!! $errors->first('numero', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    @if ($current_route == 'pisos.edit')
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::select('estado', array('Activo' => 'Activo', 'Inactivo' => 'Inactivo'),$piso->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    @endif

    <div class="box-footer mt-2">
        <a class="btn btn-secondary" href="{{ route('pisos.index') }}" role="button">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
