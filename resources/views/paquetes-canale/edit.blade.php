@extends('layouts.app')

@section('template_title')
    Update Paquetes Canale
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Paquetes Canale</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('paquetes-canales.update', $paquetesCanale->id_pack_canal) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('paquetes-canale.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
