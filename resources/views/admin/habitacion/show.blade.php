@extends('admin.main-layout')

@section('content-header')
<div class="container-fluid px-4">
    <h1 class="mt-4">Habitaciones</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Inicio</a></li>
        <li class="breadcrumb-item active">habitaciones</li>
    </ol>
</div>
@endsection

@section('body')
    <section class="content container px-4">
        <div class="row p-0 m-0">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Habitacion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('habitacions.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Numero:</strong>
                            {{ $habitacion->numero }}
                        </div>
                        <div class="form-group">
                            <strong>Piso Id:</strong>
                            {{ $habitacion->piso_id }}
                        </div>
                        <div class="form-group">
                            <strong>Tipohabitacion Id:</strong>
                            {{ $habitacion->tipohabitacion_id }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $habitacion->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
