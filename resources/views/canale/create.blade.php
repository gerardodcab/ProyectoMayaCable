@extends('layouts.admin')

@section('title', 'Create Chanell')

@section('content')
    <section class="container">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Chanell</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('canales.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('canale.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
