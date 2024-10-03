@extends('layouts.appx')
@section('content')
@include('mantenedor.submenu')

<div class="panel">
    <div class="panel-default">
        <div class="page-title clearfix">
            <h1>Registrar Nueva Estación</h1>
        </div>
        <div class="panel-body">

        <div class="col-lg-6 ">

        <form class="form-horizontal" action="{{ route('mestaciones.store') }}" method="POST" onsubmit="return VL_estacion();">
		@csrf
			
		@include('mantenedor.estaciones.form')

            <div class="card-footer">
                
                <a href="/mestaciones" class="btn btn-default">Cancelar</a>
                <button type="submit" class="btn btn-info float-right" >Registrar</button>
            </div>

        </form>



        </div>

        </div>
    </div>
</div>

@stop
@section('js')
    <script type="text/javascript" src="{{asset('js/consultas.js') }}"> </script>
@stop
    
    
