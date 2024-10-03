@extends('layouts.appx')
@section('content')
@include('mantenedor.submenu')

<div class="panel">
    <div class="panel-default">
        <div class="page-title clearfix">
            <h1>Carga Masiva</h1>
        </div>
        <div class="panel-body">

        <div class="col-lg-6 ">
    
    <br>
    <div class="panel-group">
        <div class="panel panel-default">
            
            <div class="panel-body">
           
            <form class="form-horizontal" action="{{route('mestaciones.update',$estacion) }}" method="POST" onsubmit="return VL_edit_estacion();">
            @csrf @method('PATCH')
            @include('mantenedor.estaciones.form')
               
               
            <div class="card-footer">
                
                <a href="/mestaciones" class="btn btn-default">Cancelar</a>
                <button type="submit" class="btn btn-info float-right">Actualizar</button>
            </div>

        </form>

            
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
    
    
