<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="#" />

    <title>MIMASOFT - Plataforma de medición medioambiental</title>


    
    


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>


    
    <script type="text/javascript" src="http://aire.test/js/bootstrap.mins"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="http://aire.test/js/consultas.js"> </script>
    <script type="text/javascript" src="http://aire.test/js/dropdowns.js"> </script>
    
    










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
      
      
        </div>
        
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
                <li class="hidden-xs pl15 pr15  b-l">
                    <button class="hidden-xs" id="sidebar-toggle-md">
                        <span class="fa fa-dedent"></span>
                    </button>
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
    <!-- Modal -->






</body>

</html>