@extends('layouts.app')

@section('template_title')
    {{ $promocione->name ?? 'Show Promocione' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Promocione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('promociones.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Prom:</strong>
                            {{ $promocione->id_prom }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $promocione->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $promocione->Descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            <img style="width: 75%; height: 75%" src="{{ asset('storage').'/'.$promocione->imagen }}" alt="..." />
                       
                        </div>
                        <div class="form-group">
                            <strong>Fechainicio:</strong>
                            {{ $promocione->fechainicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fechavencimiento:</strong>
                            {{ $promocione->fechavencimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Activo:</strong>
                            {{ $promocione->activo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
