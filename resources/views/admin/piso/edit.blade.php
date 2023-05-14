@extends('admin.main-layout')

@section('content-header')
<div class="container-fluid px-4">
    <h1 class="mt-4">Pisos</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Inicio</a></li>
        <li class="breadcrumb-item active">Pisos</li>
    </ol>
</div>
@endsection

@section('body')
    <section class="content container px-4">
        <div class="row p-0 m-0">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar Piso</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('pisos.update', $piso->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('admin.piso.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
