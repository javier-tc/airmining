@extends('layouts.appx')
@section('content')
@include('mantenedor.submenu')

<div class="panel">
    <div class="panel-default">
        <div class="page-title clearfix">
            <h1>Listado de Estaciones</h1> <a href="mestaciones/create"> <button class="btn btn-success btn-sm"> Nuevo</button> </a></h4>
        </div>
        <div class="panel-body">

        <div class="col-lg-10 ">
   
    <br>

    <div class="panel-group">
        <div class="panel panel-default">
            
            <div class="panel-body">
               
                <div class="table-responsive">
                <table id="table_pag" class="table table-striped table-bordered" style="width:100%; text-align: center">
                        <thead>
                            <th>Proyecto</th>
                            <th>Nombre</th>
                            <th>Latitud</th>
                            <th>Longitud</th>
                            <th>Tipo</th>
                            <th>Visible</th>
                            <th>-</th>


                        </thead>
                        <tbody>
                          @foreach ($estaciones as $est)
                            <tr>
                                <td>{{$est->pro_nproyecto}}</td>
                                <td>{{$est->est_nombre}}</td>
                                <td>{{$est->est_latitud}}</td>
                                <td>{{$est->est_longitud}}</td>
                                <td>{{$est->est_tipo}}</td>
                               @if ($est->est_visible==1)
                                <td>SI</td>
                                @else
                                <td>NO</td>
                                @endif
                          
                              <td>
                <span class="input-group-append">                        
                <a href="{{route('mestaciones.edit',$est->id_estacion)}}" role="button" class="btn btn-xs btn-primary"> Editar</a>
               
                <a href="" data-target="#delete-est-{{$est->id_estacion}}" data-toggle="modal" role="button" class="btn btn-xs btn-danger"> Eliminar</a>

                @include('mantenedor.estaciones.eliminar')

              
                </span>
                            </td>
                          </tr>
                          @endforeach
                        
                      </tbody>
                  </table>
                
              </div>
              <div class="pull-left">
               
            </div>

            
            </div>
        </div>
    </div>
</div>








        </div>
    </div>
</div>

@stop
@section('js')
    <script type="text/javascript" src="{{asset('js/consultas.js') }}"> </script>
@stop
    
    
