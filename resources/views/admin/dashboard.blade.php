@extends('admin.main-layout');

@section('content-header')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Inicio</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </div>
@endsection
@section('body')
    <div class="container-fluid px-4">
        <div class="row p-0 m-0">

            Dashboard
    
        </div>
    </div>
   
@endsection
