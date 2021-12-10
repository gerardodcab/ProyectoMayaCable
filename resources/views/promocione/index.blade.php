@extends('layouts.plantilla')

@section('template_title')
    Promocione
@endsection

@section('content')
    <div class="container">


        <div class="cta-inner text-center rounded" >
           


     
            <div class="row" width="100%">
                
                @foreach ($promociones as $promocione)   
                <div class="card" style="width: 25%">
                  
                     
                    <div class="card-body">
                        

                        <div class="form-group, text-Black" style="text-align:center">
                            
                           
                            
                                <div>
                                    <tr> <h4>{{ $promocione->nombre }}</h4> </tr>
                                </div>

                                <div>
                                    <tr><h5>{{ $promocione->Descripcion }}</h5></tr>
                                </div>
                               
                                
                                <div>
                                    <tr><img style="width: 100%; height: 100%" src="{{ asset('storage').'/'.$promocione->imagen }}" alt="..." /></tr>
                                </div>

                                <div>
                                    <tr><h5>{{ $promocione->fechainicio }}  al {{ $promocione->fechavencimiento }}</h5></tr>
                                </div>

                              

                            
                                <td>
                                    
                                    <form action="{{ route('paquetes.show',$promocione->id_prom) }}" method="GET">
                                        <input type="submit" class="btn btn-sm btn-primary" value="Detalles">
                                        @csrf
                                  
                                    </form>

                                </td>
                            

                        </div>
                        
                    </div>
                </div>

                @endforeach
                            
            </div>

        </div>

    </div>
@endsection
