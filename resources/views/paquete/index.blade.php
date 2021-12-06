@extends('layouts.plantilla')

@section('template_title')
    Paquete
@endsection

@section('content')
    <div class="container">

        
        <div class="cta-inner text-center rounded" >
            <div class="row cta navbar rounded">
                <h2>Paquetes de Televisión</h2>
            </div>
            <div class="row" width="100%">
                
                @foreach ($paquetes as $paquete)
                @if($paquete->id_tipo == 2)
                <div class="card" style="width: 25%">
                  
                     
                    <div class="card-body">
                        

                        <div class="form-group, text-Black" style="text-align:center">
                            
                            <div>
                                <tr><h4 >Paquete {{ $paquete->nombre }} </h4></tr>
                            </div>
                            <br>
                            
                            <div>
                                <tr><h4>${{ $paquete->precio }}.00 Mensual</h4></tr>
                            </div>

                            
                            <div>
                                <tr><h4> $ {{ $paquete->precioinstal }}.00 </h4></tr>
                            </div>
                            <div>
                                <tr><h5> Por instalación </h5></tr>
                            </div>
                            <div>
                            <tr><img style="width: 100%; height: 100%" src="{{ asset('storage').'/'.$paquete->imagen }}" alt="..." /></td>
                            </div>
                            
                        </div>
                        <form action="{{ route('paquetes.destroy',$paquete->id_pack) }}" method="POST">
                            <a class="btn btn-sm btn-primary " href="{{ route('paquetes.show',$paquete->id_pack) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                           
                            @csrf
                            @method('DELETE')
                        </form>
                        
                    </div>
                </div>
                @endif
                @endforeach
                
            </div>

            <div class="row cta navbar rounded">
                <h2>Paquetes de Internet</h2>
            </div>
            <div class="row" width="100%">
                
                @foreach ($paquetes as $paquete)
                @if($paquete->id_tipo == 1)
                <div class="card" style="width: 25%">
                  
                     
                    <div class="card-body">
                        

                        <div class="form-group, text-Black" style="text-align:center">
                            
                            <div>
                                <tr><h4 >Paquete {{ $paquete->nombre }} </h4></tr>
                            </div>
                            <br>
                            
                            <div>
                                <tr><h4>${{ $paquete->precio }}.00 Mensual</h4></tr>
                            </div>

                            
                            <div>
                                <tr><h4> $ {{ $paquete->precioinstal }}.00 </h4></tr>
                            </div>
                            <div>
                                <tr><h5> Por instalación </h5></tr>
                            </div>
                            <div>
                            <tr><img style="width: 100%; height: 100%" src="{{ asset('storage').'/'.$paquete->imagen }}" alt="..." /></td>
                            </div>
                            
                        </div>
                        <form action="{{ route('paquetes.destroy',$paquete->id_pack) }}" method="POST">
                            <a class="btn btn-sm btn-primary " href="{{ route('paquetes.show',$paquete->id_pack) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                           
                            @csrf
                            @method('DELETE')
                        </form>
                        
                    </div>
                </div>
                @endif
                @endforeach
                
            </div>



            <div class="row cta navbar rounded">
                <h2>Paquetes MIXTOS !!</h2>
            </div>
            <div class="row" width="100%">
                
                @foreach ($paquetes as $paquete)
                @if($paquete->id_tipo == 3)
                <div class="card" style="width: 25%">
                  
                     
                    <div class="card-body">
                        

                        <div class="form-group, text-Black" style="text-align:center">
                            
                            <div>
                                <tr><h4 >Paquete {{ $paquete->nombre }} </h4></tr>
                            </div>
                            <br>
                            
                            <div>
                                <tr><h4>${{ $paquete->precio }}.00 Mensual</h4></tr>
                            </div>

                            
                            <div>
                                <tr><h4> $ {{ $paquete->precioinstal }}.00 </h4></tr>
                            </div>
                            <div>
                                <tr><h5> Por instalación </h5></tr>
                            </div>
                            <div>
                            <tr><img style="width: 100%; height: 100%" src="{{ asset('storage').'/'.$paquete->imagen }}" alt="..." /></td>
                            </div>
                            
                        </div>
                        <form action="{{ route('paquetes.destroy',$paquete->id_pack) }}" method="POST">
                            <a class="btn btn-sm btn-primary " href="{{ route('paquetes.show',$paquete->id_pack) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                           
                            @csrf
                            @method('DELETE')
                        </form>
                        
                    </div>
                </div>
                @endif
                @endforeach

                
            </div>

        </div>
    </div>
@endsection
