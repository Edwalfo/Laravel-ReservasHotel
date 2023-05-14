@php
$current_route = request()
    ->route()
    ->getName();

@endphp
<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $tipodocumento->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        @if ($current_route == 'tipodocumentos.edit')
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::select('estado', array('Activo' => 'Activo', 'Inactivo' => 'Inactivo'),$tipodocumento->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    @endif

    </div>
    <div class="box-footer mt-2">
        <a class="btn btn-secondary" href="{{ route('tipodocumentos.index') }}" role="button">Cancelar</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>