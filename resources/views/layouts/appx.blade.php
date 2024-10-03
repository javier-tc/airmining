<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="assets/images/favicon.png" />

    <title>Airming - Plataforma de medición medioambiental</title>


    <link rel='stylesheet' type='text/css' href='/assets/bootstrap/css/bootstrap.min.css?v=1.1' />
    <link rel='stylesheet' type='text/css' href='/assets/js/font-awesome-5.3.1/css/all.css?v=1.1' />
    <link rel='stylesheet' type='text/css' href='/css/style.css' />
    <link rel="stylesheet" href="/vendor/fontawesome-free/css/all.min.css">
  

    <link rel='stylesheet' type='text/css' href='https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css' />
    
    


</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color: #ffffff;">
        <div class=" navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="fa fa-chevron-down"></span>
            </button>
            <button id="sidebar-toggle" type="button" class="navbar-toggle" data-target="#sidebar" style="background-color:#FFF;">
                <span class="sr-only">Toggle navigation</span>
                <span class="fa fa-bars"></span>
            </button>

            <a class="navbar-brand" href="/proyectos">
                <img src="" style="max-height: 40px;" />AirMining</a>

        </div>

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
                <li class="hidden-xs pl15 pr15  b-l">
                    <button class="hidden-xs" id="sidebar-toggle-md">
                        <span class="fa fa-dedent"></span>
                    </button>
                </li>


            </ul>
            <ul class="nav navbar-nav navbar-right">




                <li class="dropdown pr15 dropdown-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <span class="avatar-xs avatar pull-left mt-5 mr10">
                            <img alt="..." src="/assets/images/avatar.jpg">
                        </span> <span style="color:#000000">{{ Session::get('nom_user')}} <span class="caret"></span> </span></a>
                    <ul class="dropdown-menu p0" role="menu">
                        <li><a href="#"><i class='fa fa-user mr10'></i>Mi Perfil</a></li>
                        <li><a href="#"><i class='fa fa-key mr10'></i>Cambiar Contraseña</a></li>
                        <li class="divider"></li>

                        <li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf

                                <button type="submit" class="">Salir</button>
                            </form>

                        </li>





                    </ul>
                </li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </nav>


    <div id="content" class="box">

        <div id="sidebar" class="box-content ani-width ">

@if (Session::get('tipo_user')=='admin')
    @include('layouts.menu_admin')
@endif

@if (Session::get('tipo_rol_proyecto')=='Supervisor')
    @include('layouts.menu_supervisor')
@endif

@if (Session::get('tipo_rol_proyecto')=='Operador')
    @include('layouts.menu_operador')
@endif

@if (Session::get('tipo_rol_proyecto')=='Comunidad')
	@include('layouts.menu_comunidad')
@endif



        </div><!-- sidebar menu end -->
        <div id="page-container" class="box-content">
            <div id="pre-loader">
                <div id="pre-loade" class="app-loader">
                    <div class="loading"></div>
                </div>
            </div>
            <div class="scrollable-page">
                <div id="page-content" class="p20 clearfix">
                    <div class="row">








                        @yield('content')




                    </div>
                </div>



            </div>
        </div>

    </div>


<!--

    <script type='text/javascript' src='/assets/js/datatable/js/jquery.dataTables.js?v=1.1'></script>
    <script type='text/javascript' src='/assets/js/datatable/js/accent-neutralise.js?v=1.1'></script>
    <script type='text/javascript' src='/assets/js/datatable/js/dataTables.checkboxes.js?v=1.1'></script>

-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


    <script type='text/javascript' src='/assets/js/general_helper.js?v=1.1'></script>
    <script type="text/javascript" src="/js/consultas.js"> </script>
    <script type="text/javascript" src="http://aire.test/js/dropdowns.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" ></script>


    <script type='text/javascript' src='https://code.jquery.com/jquery-3.5.1.js'></script>
    <script type='text/javascript' src='https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js'></script>
    <script type='text/javascript' src='https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js'></script>
    <script>
                $(document).ready(function() {
                    $('#table_pag').DataTable();
                });
            </script>
</body>

</html>