@extends('layouts.appx')


@section('content')
<br>
@include('mantenedor.submenu')

<div class="col-lg-10">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Roles</h3>
        </div>

        <div class="status">
            {{session('status')}}

        </div>

        <div class="col-lg-10 ">
            <br>


            <div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('mroles.store') }}" method="POST" onsubmit="return VL_rol();">
                        @csrf
                        <div class="form-group row">
                            <label for="user_id" class="col-sm-2 col-form-label">Nombre Usuario</label>
                            <div class="col-sm-6">
                                <select class="form-control " id="user_id" name="user_id">
                                    <option selected value="">Usuario</option>
                                    @foreach ($usuarios as $usu)
                                    <option value="{{$usu->id}}">{{$usu->name}}  -  {{$usu->email}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="id_proyecto" class="col-sm-2 col-form-label">Proyecto</label>
                            <div class="col-sm-6">
                                <select class="form-control " id="id_proyecto" name="id_proyecto">
                                    <option selected value="">Seleccione Proyecto</option>
                                    @foreach ($proyectos as $pro)
                                    <option value="{{$pro->id_proyecto}}">{{$pro->pro_nproyecto}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="id_rol" class="col-sm-2 col-form-label">Rol</label>
                            <div class="col-sm-6">
                                <select class="form-control " id="id_rol" name="id_rol">
                                    <option selected value="">Seleccione Rol</option>
                                    @foreach ($roles_proyectos as $rol)
                                    <option value="{{$rol->id_rol}}">{{$rol->rolp_nombre}} </option>
                                    @endforeach

                                </select>
                            </div>


                        </div>
                        <div class="form-group row">
                            <div class="col-sm-8 card-footer float-right">
                                <button type="submit" class="btn btn-info float-right">Registrar</button>
                                <a href="/mroles" class="btn btn-default">Cancelar</a>
                            </div>

                        </div>
                </div>
                </form>

                
            </div>

            
            
            @if (session('message'))
            <div class="col-8 text-center">
                <p class="{{session('tipomsg')}}">{{session('message')}} </p>
           </div>
           @endif 



            <hr>

            <div class="panel-group">
                <div class="panel panel-default">

                    <div class="panel-body">

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <th>Nombre Usuario</th>
                                    <th>Email</th>
                                    <th>Proyecto</th>
                                    <th>Rol En Proyecto</th>

                                </thead>
                                <tbody>
                                    @foreach ($usuarios_proyectos as $ur)
                                    <tr>
                                        <td>{{$ur->name}}</td>
                                        <td>{{$ur->email}}</td>
                                        <td>{{$ur->pro_nproyecto}}</td>
                                        <td>{{$ur->rolp_nombre}}</td>
                                        <td>
                                            <span class="input-group-append">
                                              <a href="" data-target="#delete-pro-{{$ur->id_up}}" data-toggle="modal" role="button" class="btn btn-xs btn-danger"> Eliminar</a>

                                                @include('mantenedor.roles.eliminar')


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
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="/css/admin.css">
@stop

@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript" src="{{asset('js/consultas.js') }}"> </script>
@stop