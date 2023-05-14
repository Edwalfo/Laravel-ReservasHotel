@extends('admin.main-layout');

@section('content-header')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Usuarios</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Inicio</a></li>
            <li class="breadcrumb-item active">Usuarios</li>
        </ol>
    </div>
@endsection
@section('body')
    <div class="container-fluid px-4">
        <div class="row p-0 m-0">

            Lista Usuarios
    
        </div>
    </div>
   
@endsection