@extends('layouts.app')

@section('template_title')
    {{ $paquetesCanale->name ?? 'Show Paquetes Canale' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Paquetes Canale</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('paquetes-canales.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Pack Canal:</strong>
                            {{ $paquetesCanale->id_pack_canal }}
                        </div>
                        <div class="form-group">
                            <strong>Id Pack:</strong>
                            {{ $paquetesCanale->id_pack }}
                        </div>
                        <div class="form-group">
                            <strong>Id Canal:</strong>
                            {{ $paquetesCanale->id_canal }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
