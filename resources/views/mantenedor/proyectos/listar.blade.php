@extends('layouts.appx')
@section('content')
@include('mantenedor.submenu')

<div class="panel">
    <div class="panel-default">
        <div class="page-title clearfix">
            <h1>Listado de Proyectos</h1><a href="mproyectos/create"> <button class="btn btn-success btn-sm"> Nuevo</button> </a></h4>
        </div>
        <div class="panel-body">

        <div class="col-lg-10 ">
  
    <br>

    <div class="panel-group">
        <div class="panel panel-default">
            
            <div class="panel-body">
               
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <th>Proyecto</th>
                            <th>Fecha Inicio</th>
                            <th>Fecha Termino</th>
                            <th>Responsable</th>
                            <th>Contacto</th>
                            <th>Email</th>

                        </thead>
                        <tbody>
                          @foreach ($proyectos as $pro)
                            <tr>
                                <td>{{$pro->pro_nproyecto}}</td>
                                <td>{{$pro->pro_fcinicio}}</td>
                                <td>{{$pro->pro_fctermino}}</td>
                                <td>{{$pro->pro_nresponsable}}</td>
                                <td>{{$pro->pro_fonoresponsable}}</td>      
                                <td>{{$pro->pro_eresponsable}}</td>                           
                              <td>
                <span class="input-group-append">                        
                <a href="{{route('mproyectos.edit',$pro->id_proyecto)}}" role="button" class="btn btn-xs btn-primary"> Editar</a>
               
                <a href="" data-target="#delete-pro-{{$pro->id_proyecto}}" data-toggle="modal" role="button" class="btn btn-xs btn-danger"> Eliminar</a>

                @include('mantenedor.proyectos.eliminar')

              
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
    
    
