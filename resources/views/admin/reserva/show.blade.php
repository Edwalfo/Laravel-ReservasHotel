@extends('layouts.app')

@section('template_title')
    {{ $reserva->name ?? 'Show Reserva' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Reserva</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('reservas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Entrada:</strong>
                            {{ $reserva->entrada }}
                        </div>
                        <div class="form-group">
                            <strong>Salida:</strong>
                            {{ $reserva->salida }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $reserva->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $reserva->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Huesped Id:</strong>
                            {{ $reserva->huesped_id }}
                        </div>
                        <div class="form-group">
                            <strong>Habitacion Id:</strong>
                            {{ $reserva->habitacion_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
