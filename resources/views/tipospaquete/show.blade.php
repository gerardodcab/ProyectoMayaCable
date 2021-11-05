@extends('layouts.app')

@section('template_title')
    {{ $tipospaquete->name ?? 'Show Tipospaquete' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tipospaquete</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tipospaquetes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Tipo:</strong>
                            {{ $tipospaquete->id_tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tipospaquete->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
