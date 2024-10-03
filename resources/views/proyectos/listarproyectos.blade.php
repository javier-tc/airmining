@extends('layouts.appx')


@section('content')





@if(Session::get('tipo_user')=='user')

@if($proyectos->count()>0)

@foreach ($proyectos as $pro)
<div class="row project" style="margin-bottom: 20px;">
    <div class="col-md-12 col-sm-12 widget-container"><a href="{{route('dashboard.show',$pro->id_proyecto)}}" class="white-link">
            <div class="panel panel-sky mb0 shadow-2">
                <div class="panel-body">
                    <div class="col-md-2">
                        <div class=""><span class="avatar avatar-lg border-circle"><img src="/images/refinery.png" alt="..." style="background-color:#FFF;" class="mCS_img_loaded shadow-2"></span></div>
                    </div>
                    <div class="col-md-3">
                        <h2 class="project_title">{{$pro->pro_nproyecto}}</h2>
                        <p>Inicio: {{$pro->pro_fcinicio}}</p>
                        <p>Término: {{$pro->pro_fctermino}}</p>
                        <!-- <p>Estado: <span class="label label-success">Abierto</span></p>-->
                    </div>
                    <div class="col-md-7">
                        <h3>{{$pro->pro_rubro}}</h3>
                        <p class="project_desc" style="text-align:justify;">{{$pro->pro_descripcion}} </p>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

@endforeach
@else

<div class="panel">
    <div class="panel-default">
        <div class="page-title clearfix">
            <h1>Información</h1>
        </div>
        <div class="panel-body">


            <h1>Sin proyectos asociados</h1>

        </div>
    </div>
</div>
@endif 

@else
@if(Session::get('id_proyecto')==null)
<div class="panel">
    <div class="panel-default">
        <div class="page-title clearfix">
            <h1>Información</h1>
        </div>
        <div class="panel-body">
            <h1>Sin proyectos Seleccionado</h1>

        </div>
    </div>
</div>
@foreach ($proyectos as $pro)
<div class="row project" style="margin-bottom: 20px;">
    <div class="col-md-12 col-sm-12 widget-container"><a href="{{route('dashboard.show',$pro->id_proyecto)}}" class="white-link">
            <div class="panel panel-sky mb0 shadow-2">
                <div class="panel-body">
                    <div class="col-md-2">
                        <div class=""><span class="avatar avatar-lg border-circle"><img src="/images/refinery.png" alt="..." style="background-color:#FFF;" class="mCS_img_loaded shadow-2"></span></div>
                    </div>
                    <div class="col-md-3">
                        <h2 class="project_title">{{$pro->pro_nproyecto}}</h2>
                        <p>Inicio: {{$pro->pro_fcinicio}}</p>
                        <p>Término: {{$pro->pro_fctermino}}</p>
                        <!-- <p>Estado: <span class="label label-success">Abierto</span></p>-->
                    </div>
                    <div class="col-md-7">
                        <h3>{{$pro->pro_rubro}}</h3>
                        <p class="project_desc" style="text-align:justify;">{{$pro->pro_descripcion}} </p>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
@endforeach


@else
@foreach ($proyectos as $pro)
<div class="row project" style="margin-bottom: 20px;">
    <div class="col-md-12 col-sm-12 widget-container"><a href="{{route('dashboard.show',$pro->id_proyecto)}}" class="white-link">
            <div class="panel panel-sky mb0 shadow-2">
                <div class="panel-body">
                    <div class="col-md-2">
                        <div class=""><span class="avatar avatar-lg border-circle"><img src="/images/refinery.png" alt="..." style="background-color:#FFF;" class="mCS_img_loaded shadow-2"></span></div>
                    </div>
                    <div class="col-md-3">
                        <h2 class="project_title">{{$pro->pro_nproyecto}}</h2>
                        <p>Inicio: {{$pro->pro_fcinicio}}</p>
                        <p>Término: {{$pro->pro_fctermino}}</p>
                        <!-- <p>Estado: <span class="label label-success">Abierto</span></p>-->
                    </div>
                    <div class="col-md-7">
                        <h3>{{$pro->pro_rubro}}</h3>
                        <p class="project_desc" style="text-align:justify;">{{$pro->pro_descripcion}} </p>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
@endforeach

@endif

@endif



@stop