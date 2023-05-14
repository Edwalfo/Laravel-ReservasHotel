@extends('admin.main-layout')

@section('content-header')
<div class="container-fluid px-4">
    <h1 class="mt-4">Tipodocumento</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Inicio</a></li>
        <li class="breadcrumb-item active">Tipodocumento</li>
    </ol>
</div>
@endsection

@section('body')
    <div class="container px-4">
        <div class="row p-0 m-0">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Tipodocumento</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tipodocumentos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('admin.tipodocumento.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
