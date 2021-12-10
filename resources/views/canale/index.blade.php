@extends('layouts.app')

@section('template_title')
    Canale
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Canale') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('canales.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Canal</th>
										<th>Nombre</th>
										<th>Numero</th>
										<th>Imagen</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($canales as $canale)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $canale->id_canal }}</td>
											<td>{{ $canale->nombre }}</td>
											<td>{{ $canale->numero }}</td>
                                            <td><img style="width: 200px; height: 200px" src="{{ asset('storage').'/'.$canale->imagen }}" alt="..." /></td>
                         
                                            <td>
                                                <form action="{{ route('canales.destroy',$canale->id_canal) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('canales.show',$canale->id_canal) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('canales.edit',$canale->id_canal) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $canales->links() !!}
            </div>
        </div>
    </div>
@endsection
