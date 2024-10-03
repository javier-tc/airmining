@extends('layouts.appx')
@section('content')
@include('mantenedor.submenu')

<div class="panel">
    <div class="panel-default">
        <div class="page-title clearfix">
            <h1>Usuarios</h1>
        </div>
        <div class="panel-body">



        <div class="col-lg-6">
    
    <br>
    <div class="panel-group">
        <div class="panel panel-default">
            
            <div class="panel-body">
           
            <form class="form-horizontal" action="{{route('musuarios.update',$usuario) }}" method="POST" onsubmit="return VL_edit_usuario();">
            @csrf @method('PATCH')
            @include('mantenedor.usuarios.form')
               
               
            <div class="card-footer">
                <button type="submit" class="btn btn-info float-right">Actualizar</button>
                <a href="/musuarios" class="btn btn-default">Cancelar</a>
                
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
    