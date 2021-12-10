@extends('layouts.app')

@section('template_title')
    {{ $canale->name ?? 'Show Canale' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Canale</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('canales.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Canal:</strong>
                            {{ $canale->id_canal }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $canale->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Numero:</strong>
                            {{ $canale->numero }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            <img style="width: 75%; height: 75%" src="{{ asset('storage').'/' $canale->imagen }}" alt="..." />
                       
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
