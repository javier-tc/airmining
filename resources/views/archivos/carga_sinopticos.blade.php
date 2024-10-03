@extends('layouts.appx')
@section('content')

<div class="panel">
    <div class="panel-default">
        <div class="page-title clearfix">
            <h1>Carga Masiva en Proyecto Chagres</h1>
        </div>
        <div class="panel-body">
            <div class="col-md-10">

                <a href="" data-target="#agregar-sinopticos" data-toggle="modal" role="button" class="btn btn-sm btn-success"> Agregar</a>
                @include('archivos.modalagregar')
            </div>
            <br>
            <hr>

            <!-- --------->
            

            <div class="col-md-12">
                <div class="table-responsive">
                <table id="table_pag" class="table table-striped table-bordered" style="width:100%; text-align: center">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>24 Hrs <br> 00:00 - 08:00</th>
                                <th>24 Hrs <br> 08:00 - 16:00</th>
                                <th>24 Hrs <br> 16:00 - 00:00</th>
                                <th>48 Hrs <br> 00:00 - 08:00</th>
                                <th>48 Hrs <br> 08:00 - 16:00</th>
                                <th>48 Hrs <br> 16:00 - 00:00</th>
                            </tr>
                        </thead>
                        <tbody id="id-mi-tabla">
                            @foreach ($sinopticos as $sin)
                            <tr>
                                <td>{{$sin->sin_fecha}}</td>
                                <td>{{$sin->sin_cma1}}</td>
                                <td>{{$sin->sin_cma2}}</td>
                                <td>{{$sin->sin_cma3}}</td>
                                <td>{{$sin->sin_cma4}}</td>
                                <td>{{$sin->sin_cma5}}</td>
                                <td>{{$sin->sin_cma6}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Fecha</th>
                                <th>24 Hrs <br> 00:00 - 08:00</th>
                                <th>24 Hrs <br> 08:00 - 16:00</th>
                                <th>24 Hrs <br> 16:00 - 00:00</th>
                                <th>48 Hrs <br> 00:00 - 08:00</th>
                                <th>48 Hrs <br> 08:00 - 16:00</th>
                                <th>48 Hrs <br> 16:00 - 00:00</th>
                            </tr>
                        </tfoot>
                    </table>
                   
                </div>

            </div>
        </div>
    </div>
</div>

    @stop