@extends('layouts.appx')
@section('content')
@include('mantenedor.submenu')

<div class="panel">


    <div class="panel-default">

        <div class="page-title clearfix">
            <h1>Listado de Usuarios</h1> <a href="musuarios/create"> <button class="btn btn-success btn-sm"> Nuevo</button> </a></h4>
        </div>

        <div class="panel-body">

        <div class="col-lg-10 ">
                        <br>
                       

                        @if (session('message'))
                        <div class="col-8 text-center">
                            <p class="{{session('tipomsg')}}">{{session('message')}} </p>
                        </div>
                        @endif

                        <div class="panel-group">
                            <div class="panel panel-default">

                                <div class="panel-body">

                                    <div class="table-responsive">
                                    <table id="table_pag" class="table table-striped table-bordered" style="width:100%; text-align: center">
                                            <thead>
                                                <th>Nombre</th>
                                                <th>Correo</th>
                                                <th>Tipo</th>
                                                <th>Acciones</th>

                                            </thead>
                                            <tbody>
                                                @foreach ($usuarios as $usu)
                                                <tr>
                                                    <td>{{$usu->name}}</td>
                                                    <td>{{$usu->email}}</td>
                                                    <td>{{$usu->rol_descripcion}}</td>
                                                    <td>
                                                        <span class="input-group-append">
                                                            <a href="{{route('musuarios.edit',$usu->id)}}" role="button" class="btn btn-xs btn-primary"> Editar</a>

                                                            <a href="" data-target="#delete-usu-{{$usu->id}}" data-toggle="modal" role="button" class="btn btn-xs btn-danger"> Eliminar</a>

                                                            @include('mantenedor.usuarios.eliminar')


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
<script type="text/javascript" src="{{asset('js/modales.js') }}"> </script>
@stop