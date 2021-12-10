@extends('layouts.plantilla')

@section('template_title')
    {{ $paquete->nombre ?? 'Show Paquete' }}
@endsection

@section('content')
    <section class="content container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ $paquete->nombre }}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('paquetes.index') }}"> Back</a>
                        </div>
                    </div>

                   
                    
                    @switch(true)
                        @case($paquete->id_tipo == 2)
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                  
                                        <th>Id Canal</th>
                                        <th>Nombre</th>
                                        <th>Numero</th>
                                        <th>Imagen</th>
    
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>   
                                    @foreach ($paquetesCanales as $paquetesCanale)
              
                                        @if ($paquete->id_pack ==  $paquetesCanale->id_pack )
                                        @foreach ($canales as $canale)
                                        @if ($canale->id_canal ==  $paquetesCanale->id_canal )
                                            <tr>
                                            
                                                <td>{{ $canale->id_canal }}</td>
                                                    <td>{{ $canale->nombre }}</td>
                                                    <td>{{ $canale->numero }}</td>
                                                    <td><img style="width: 90px; height: 75px" src="{{ asset('storage').'/'.$canale->imagen }}" alt="..." /></td>
                                
                                            
                                            </tr>
                                        @endif
                                        @endforeach
                                        @endif

                                    @endforeach         
                               
                                </tbody>
                            </table>
                        </div>
                            @break
                        @case($paquete->id_tipo == 1)
                            
                        <div class="card-body" style="text-align: center" >
                        
                        
                            <div class="form-group">
                                <strong>Paquete de Internet </strong>
                                {{ $paquete->nombre }}
                            </div>
                            <div class="form-group">
                                <strong> Con Velocidad de </strong>
                                {{ $paquete->velocidad }}

                                <strong> MB </strong>
                            </div>
                            <div class="form-group">
                                <strong>Por tan solo: $</strong>
                                {{ $paquete->precio }}

                                <strong> Mensuales !!</strong>
                            </div>
                            <div class="form-group">
                                <strong>Precio de instalación: $</strong>
                                {{ $paquete->precioinstal }}
                            </div>
                            <div class="form-group">
                                
                                <img style="width: 20%; height: 20%" src="{{ asset('storage').'/'.$paquete->imagen }}" alt="..." />
                            </div>
                         
                        </div>

                            @break

                            @case($paquete->id_tipo == 3)
                            <div class="table-responsive">

                                <div class="card-body" style="text-align: center" >
                        
                        
                                    <div class="form-group">
                                        <strong>Paquete de Internet </strong>
                                        {{ $paquete->nombre }}
                                    </div>
                                    <div class="form-group">
                                        <strong> Con Velocidad de </strong>
                                        {{ $paquete->velocidad }}
        
                                        <strong> MB </strong>
                                    </div>
                                    <div class="form-group">
                                        <strong>Por tan solo: $</strong>
                                        {{ $paquete->precio }}
        
                                        <strong> Mensuales !!</strong>
                                    </div>
                                    <div class="form-group">
                                        <strong>Precio de instalación: $</strong>
                                        {{ $paquete->precioinstal }}
                                    </div>
                                    <div class="form-group">
                                        
                                        <img style="width: 20%; height: 20%" src="{{ asset('storage').'/'.$paquete->imagen }}" alt="..." />
                                    </div>
                                 
                                </div>

                                <table class="table table-striped table-hover">
                                    <thead class="thead">
                                        <tr>
                                      
                                            <th>Id Canal</th>
                                            <th>Nombre</th>
                                            <th>Numero</th>
                                            <th>Imagen</th>
        
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>   
                                        @foreach ($paquetesCanales as $paquetesCanale)
                  
                                            @if ($paquete->id_pack ==  $paquetesCanale->id_pack )
                                            @foreach ($canales as $canale)
                                            @if ($canale->id_canal ==  $paquetesCanale->id_canal )
                                                <tr>
                                                
                                                    <td>{{ $canale->id_canal }}</td>
                                                        <td>{{ $canale->nombre }}</td>
                                                        <td>{{ $canale->numero }}</td>
                                                        <td><img style="width: 90px; height: 75px" src="{{ asset('storage').'/'.$canale->imagen }}" alt="..." /></td>
                                    
                                                
                                                </tr>
                                            @endif
                                            @endforeach
                                            @endif
    
                                        @endforeach         
                                   
                                    </tbody>
                                </table>
                            </div>


                          
    


                            @break

                        @default
                            
                    @endswitch                  

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
