@extends('admin.main-layout')

@section('content-header')
    {{ $piso->name ?? 'Show Piso' }}
@endsection

@section('body')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Piso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pisos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Numero:</strong>
                            {{ $piso->numero }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $piso->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
