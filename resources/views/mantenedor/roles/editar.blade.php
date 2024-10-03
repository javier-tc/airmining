@extends('adminlte::page')

@section('content')
<br>
@include('mantenedor.submenu')

<div class="col-lg-10">
<div class="card card-info">
<div class="card-header">
<h3 class="card-title">usuarios</h3>
</div>

<div class="col-lg-10 ">
    
    <br>
    <div class="panel-group">
        <div class="panel panel-default">
            
            <div class="panel-body">
           
            <form class="form-horizontal" action="{{route('mroles.update',$proyecto) }}" method="POST">
            @csrf @method('PATCH')
            @include('mantenedor.roles.form')
               
               
            <div class="card-footer">
                <button type="submit" class="btn btn-info float-right">Actualizar</button>
                <a href="/mproyectos" class="btn btn-default">Cancelar</a>
            </div>

        </form>

            
            </div>
        </div>
    </div>
</div>


</div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop


@section('js')

    <script type="text/javascript" src="{{asset('js/consultas.js') }}"> </script>
@stop