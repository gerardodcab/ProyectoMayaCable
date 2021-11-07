@extends('layouts.admin')

@section('title', 'Tipos Paquetes')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Tipos de paquetes</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tipospaquetes.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('tipospaquete.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
