@extends('layouts.app')

@section('template_title')
    {{ $paquete->name ?? 'Show Paquete' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Paquete</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('paquetes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Pack:</strong>
                            {{ $paquete->id_pack }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $paquete->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Velocidad:</strong>
                            {{ $paquete->velocidad }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $paquete->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Precioinstal:</strong>
                            {{ $paquete->precioinstal }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            <img style="width: 75%; height: 75%" src="{{ asset('storage').'/'.$paquete->imagen }}" alt="..." />
                        </div>
                        <div class="form-group">
                            <strong>Id Tipo:</strong>
                            {{ $paquete->id_tipo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
