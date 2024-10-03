<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="fairsketch">
    <link rel="icon" href="https://aire.mimasoft.cl/assets/images/favicon.png" />

    <title>MIMASOFT - Plataforma de medición medioambiental</title>
    <link rel='stylesheet' type='text/css' href='https://aire.mimasoft.cl/assets/bootstrap/css/bootstrap.min.css?v=1.1' />
    <link rel='stylesheet' type='text/css' href='https://aire.mimasoft.cl/assets/css/font.css?v=1.1' />
    <link rel='stylesheet' type='text/css' href='https://aire.mimasoft.cl/assets/css/style.css?v=1.1' />



    <script type='text/javascript' src='https://aire.mimasoft.cl/assets/js/jquery-1.11.3.min.js?v=1.1'></script>
    <script type='text/javascript' src='https://aire.mimasoft.cl/assets/bootstrap/js/bootstrap.min.js?v=1.1'></script>

    <script type='text/javascript' src='https://aire.mimasoft.cl/assets/js/jquery-ui.js?v=1.1'></script>
    

    <script type='text/javascript' src='https://aire.mimasoft.cl/assets/js/general_helper.js?v=1.1'></script>

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
        <!--<a class="navbar-brand" href="https://aire.mimasoft.cl/dashboard"><img src="https://aire.mimasoft.cl/files/mimasoft_files/client_1/site-logo_1.png" /></a>-->
        <a class="navbar-brand" href="https://aire.mimasoft.cl/home"><img src="https://aire.mimasoft.cl/files/mimasoft_files/client_1/site-logo_1.png" style="max-height: 40px;" /></a>

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
                            <img alt="..." src="https://aire.mimasoft.cl/assets/images/avatar.jpg">
                        </span> <span style="color:#000000">Fidel Vallejo <span class="caret"></span> </span></a>
                    <ul class="dropdown-menu p0" role="menu">
                        <li><a href="https://aire.mimasoft.cl/clients/contact_profile/6/general"><i class='fa fa-user mr10'></i>Mi Perfil</a></li>
                        <li><a href="https://aire.mimasoft.cl/clients/contact_profile/6/account"><i class='fa fa-key mr10'></i>Cambiar Contraseña</a></li>
                        <li class="divider"></li>
                        <li><a href="https://aire.mimasoft.cl/signin/sign_out"><i class="fa fa-power-off mr10"></i> Salir</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </nav>

    <div id="content" class="box">

        <div id="sidebar" class="box-content ani-width ">
        @include('layouts.menu_admin')
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
                    </div>

                    <div class="">

                        
                     


                        @yield('content')




                    </div>
                </div>



            </div>
        </div>
    </div>
    <!-- Modal -->






</body>

</html>