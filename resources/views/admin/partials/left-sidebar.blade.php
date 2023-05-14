@php
    $current_route=request()->route()->getName();
@endphp
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link {{$current_route=='dashboard'?'active':''}}" href="{{ route('dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>

                <a class="nav-link {{$current_route=='reservas.index'?'active':''}}" href="{{ route('reservas.index') }}"
                    data-bs-target="#collapseReservas" aria-expanded="false" aria-controls="collapseReservas">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Reservas
                </a>
                <a class="nav-link {{$current_route=='huespeds.index'?'active':''}}" href="{{ route('huespeds.index') }}"
                    data-bs-target="#collapseHuespedes" aria-expanded="false" aria-controls="collapseHuesped">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-address-book"></i></div>
                    Huespedes
                </a>
               <!-- <a class="nav-link {{$current_route=='users.index'?'active':''}}" href="{{ route('users.index') }}"
                    data-bs-target="#collapseUsuarios" aria-expanded="false" aria-controls="collapseUsuarios">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                    Usuarios
                </a>-->
                <!--<a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                    data-bs-target="#collapseFacturas" aria-expanded="false" aria-controls="collapseFacturas">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-file-invoice-dollar"></i></div>
                    Facturas
                </a>-->
                <div class="collapse" id="collapsFacturas" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="layout-static.html">Gestionar Usuarios</a>

                    </nav>
                </div>
                <a class="nav-link {{$current_route=='tipohabitaciones.index'?'active':''}} collapsed" href="{{$current_route=='tipohabitaciones.index'?'active':''}}" data-bs-toggle="collapse"
                    data-bs-target="#collapseconfiguraciones" aria-expanded="false"
                    aria-controls="collapseconfiguraciones">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-gear"></i></div>
                    Configuraciónes
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseconfiguraciones" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{$current_route=='tipodocumentos.index'?'active':''}}" href="{{ route('tipodocumentos.index') }}">Tipos de documento</a>
                        <a class="nav-link {{$current_route=='habitacions.index'?'active':''}}" href="{{ route('habitacions.index') }}">Habitaciones</a>
                        <a class="nav-link {{$current_route=='tipohabitacions.index'?'active':''}}" href="{{ route('tipohabitacions.index') }}">Tipo habitaciones</a>
                        <a class="nav-link {{$current_route=='pisos.index'?'active':''}}" href="{{ route('pisos.index') }}">Pisos Habitaciones</a>
                    </nav>
                </div>

                <div class="sb-sidenav-menu-heading">Addons</div>
                <a class="nav-link" href="charts.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Charts
                </a>
                <a class="nav-link" href="tables.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Tables
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small text-light">Logged in as:</div>
            {{ auth()->user()->name }}
        </div>
    </nav>
</div>