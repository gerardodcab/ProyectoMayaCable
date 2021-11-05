@extends('layouts.app')

@section('template_title')
    Paquete
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Paquete') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('paquetes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Pack</th>
										<th>Nombre</th>
										<th>Velocidad</th>
										<th>Precio</th>
										<th>Precioinstal</th>
										<th>Imagen</th>
										<th>Id Tipo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($paquetes as $paquete)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $paquete->id_pack }}</td>
											<td>{{ $paquete->nombre }}</td>
											<td>{{ $paquete->velocidad }}</td>
											<td>{{ $paquete->precio }}</td>
											<td>{{ $paquete->precioinstal }}</td>
											<td>{{ $paquete->imagen }}</td>
											<td>{{ $paquete->id_tipo }}</td>

                                            <td>
                                                <form action="{{ route('paquetes.destroy',$paquete->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('paquetes.show',$paquete->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('paquetes.edit',$paquete->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $paquetes->links() !!}
            </div>
        </div>
    </div>
@endsection
