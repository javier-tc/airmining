@extends('layouts.appx')
@section('content')
@include('mantenedor.submenu')

<div class="panel">
    <div class="panel-default">
        <div class="page-title clearfix">
            <h1>Registrar Nuevo Proyecto</h1>
        </div>
        <div class="panel-body">

        <div class="col-lg-7 ">

<div class="card card-info ">
   

    
    <form class="form-horizontal" action="{{ route('mproyectos.store') }}" method="POST" onsubmit="return VL_proyecto();">
    @csrf
        
    @include('mantenedor.proyectos.form')

        <div class="card-footer">
            
            <a href="/mproyectos" class="btn btn-default">Cancelar</a>
            <button type="submit" class="btn btn-info float-right" >Registrar</button>
        </div>

    </form>
</div>
</div>







        </div>
    </div>
</div>

@stop
@section('js')
    <script type="text/javascript" src="{{asset('js/consultas.js') }}"> </script>
@stop
    
    
