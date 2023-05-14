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
    <div class="container px-4">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Piso') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pisos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo') }}
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
										<th>Estado</th>

                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pisos as $piso)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $piso->numero }}</td>
											<td>{{ $piso->estado }}</td>

                                            <td>
                                                <form action="{{ route('pisos.destroy',$piso->id) }}" method="POST">
                                                    <!--<a class="btn btn-sm btn-primary " href="{{ route('pisos.show',$piso->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>-->
                                                    <a class="btn btn-sm btn-success" href="{{ route('pisos.edit',$piso->id) }}"><i class="fa fa-fw fa-edit"></i>Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $pisos->links() !!}
            </div>
        </div>
    </div>
@endsection
