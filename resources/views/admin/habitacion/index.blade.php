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
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Habitacion') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('habitacions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Numero</th>
										<th>Piso</th>
										<th>Tipo habitacion</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($habitacions as $habitacion)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $habitacion->numero }}</td>
											<td>{{ $habitacion->piso->numero }}</td>
											<td>{{ $habitacion->tipohabitacion->nombre }}</td>
											<td>{{ $habitacion->estado()}}</td>

                                            <td>
                                                <form action="{{ route('habitacions.destroy',$habitacion->id) }}" method="POST">
                                                    <!--<a class="btn btn-sm btn-primary " href="{{ route('habitacions.show',$habitacion->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>-->
                                                    <a class="btn btn-sm btn-success" href="{{ route('habitacions.edit',$habitacion->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $habitacions->links() !!}
            </div>
        </div>
    </div>
@endsection
