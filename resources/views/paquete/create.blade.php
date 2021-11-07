@extends('layouts.admin')

@section('title', 'Add  Chanells to Packs')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Add  Chanells to Packs</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('paquetes.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('paquete.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
