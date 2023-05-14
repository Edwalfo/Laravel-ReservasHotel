@extends('admin.main-layout')

@section('content-header')
<div class="container-fluid px-4">
    <h1 class="mt-4">Habitaciones</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Inicio</a></li>
        <li class="breadcrumb-item active">Habitaciones</li>
    </ol>
</div>
@endsection

@section('body')
    <div class="container px-4">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Huesped</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('huespeds.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('admin.huesped.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
