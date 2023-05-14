@extends('admin.main-layout')

@section('content-header')
<div class="container-fluid px-4">
    <h1 class="mt-4">Huesped</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Inicio</a></li>
        <li class="breadcrumb-item active">Husped</li>
    </ol>
</div>
@endsection

@section('body')
    <div class="container px-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Huesped</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('huespeds.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $huesped->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Tipodocumento Id:</strong>
                            {{ $huesped->tipodocumento_id }}
                        </div>
                        <div class="form-group">
                            <strong>N Documento:</strong>
                            {{ $huesped->n_documento }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Nacimiento:</strong>
                            {{ $huesped->fecha_nacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $huesped->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $huesped->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $huesped->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $huesped->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
