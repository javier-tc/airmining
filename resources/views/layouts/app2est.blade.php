<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="assets/images/favicon.png" />

    <title>Airming - Plataforma de medición medioambiental</title>
    <script type="text/javascript">
    AppHelper = {};
    AppHelper.baseUrl = "aire.test";
    AppHelper.assetsDirectory = "/assets/";
    AppHelper.settings = {};
    AppHelper.settings.firstDayOfWeek = 1 || 0;
    AppHelper.settings.currencySymbol = "$";
    AppHelper.settings.currencyPosition = "left" || "left";
	
	AppHelper.settings.decimalSeparator = ",";
	AppHelper.settings.thousandSeparator = ".";
	AppHelper.settings.decimalNumbers = "2";
    
	AppHelper.settings.decimalSeparatorClient = ",";
	AppHelper.settings.thousandSeparatorClient = ".";
	AppHelper.settings.decimalNumbersClient = "2";
	
	AppHelper.settings.displayLength = "10";

	AppHelper.settings.timeFormat = "24_hours";
	AppHelper.settings.dateFormat = "d/m/Y";
    AppHelper.settings.scrollbar = "jquery";
    AppHelper.userId = "6";
	
	AppHelper.context = "project";
	AppHelper.settings.dateFormatClient = "d/m/Y";

	AppHelper.highchartsExportUrl = "#";
	AppHelper.highchartsExportUrlQuery = "assets/index.html";
</script>    <script type="text/javascript">
    AppLanugage = {};
    AppLanugage.locale = "es";

    AppLanugage.days = ["Domingo","Lunes","Martes","Mi\u00e9rcoles","Jueves","Viernes","S\u00e1bado"];
    AppLanugage.daysShort = ["Dom","Lun","Mar","Mi\u00e9","Jue","Vie","S\u00e1b"];
    AppLanugage.daysMin = ["Do","Lu","Ma","Mi","Ju","Vi","Sa"];

    AppLanugage.months = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
    AppLanugage.monthsShort = ["Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic"];

    AppLanugage.today = "Hoy";
    AppLanugage.yesterday = "Ayer";
    AppLanugage.tomorrow = "Mañana";

    AppLanugage.search = "Buscar";
    AppLanugage.noRecordFound = "No hay entradas.";
    AppLanugage.print = "Imprimir";
    AppLanugage.excel = "Excel";
    AppLanugage.printButtonTooltip = "Precione Escapar al terminar.";

    AppLanugage.fileUploadInstruction = "Arrastre y Suelte los documentos aquí <br /> (or click to browse...)";
    AppLanugage.fileNameTooLong = "El nombre del archivo es muy largo.";
    
    AppLanugage.custom = "Personalizado";
    AppLanugage.clear = "Eliminar";
	
	AppLanugage.resetZoom = "Vista inicial";
	AppLanugage.resetZoomTitle = "Cambia a la vista inicial del gráfico";
	AppLanugage.contextButtonTitle = "Menú de gráfico";
	
	AppLanugage.loading = "Cargando...";
	AppLanugage.formatNoMatches = "No se encontraron resultados";

</script>


<link rel="stylesheet" href="/vendor/fontawesome-free/css/all.min.css">
<script type="text/javascript" src="/js/consultas.js"> </script>
<link rel='stylesheet' type='text/css' href='/css/style.css' />
<link rel='stylesheet' type='text/css' href='/assets/bootstrap/css/bootstrap.min.css?v=1.1' />
<link rel='stylesheet' type='text/css' href='/assets/js/font-awesome-5.3.1/css/all.css?v=1.1' />
<link rel='stylesheet' type='text/css' href='/assets/js/font-awesome-5.3.1/css/v4-shims.css?v=1.1' />
<link rel='stylesheet' type='text/css' href='/assets/js/datatable/css/jquery.dataTables.min.css?v=1.1' />
<link rel='stylesheet' type='text/css' href='/assets/js/datatable/TableTools/css/dataTables.tableTools.min.css?v=1.1' />
<link rel='stylesheet' type='text/css' href='/assets/js/datatable/css/dataTables.checkboxes.css?v=1.1' />
<link rel='stylesheet' type='text/css' href='/assets/js/select2/select2.css?v=1.1' />
<link rel='stylesheet' type='text/css' href='/assets/js/select2/select2-bootstrap.min.css?v=1.1' />
<link rel='stylesheet' type='text/css' href='/assets/js/bootstrap-datepicker/css/datepicker3.css?v=1.1' />
<link rel='stylesheet' type='text/css' href='/assets/js/bootstrap-timepicker/css/bootstrap-timepicker.min.css?v=1.1' />
<link rel='stylesheet' type='text/css' href='/assets/js/bootstrap-colorpicker/css/colorpicker.css?v=1.1' />
<link rel='stylesheet' type='text/css' href='/assets/js/x-editable/css/bootstrap-editable.css?v=1.1' />
<link rel='stylesheet' type='text/css' href='/assets/js/dropzone/dropzone.min.css?v=1.1' />
<link rel='stylesheet' type='text/css' href='/assets/js/magnific-popup/magnific-popup.css?v=1.1' />
<link rel='stylesheet' type='text/css' href='/assets/js/malihu-custom-scrollbar/jquery.mCustomScrollbar.css?v=1.1' />
<link rel='stylesheet' type='text/css' href='/assets/js/loudev-multi-select/css/multi-select.css?v=1.1' />
<link rel='stylesheet' type='text/css' href='/assets/js/jquery-ui.css?v=1.1' />
<link rel='stylesheet' type='text/css' href='/assets/js/awesomplete/awesomplete.css?v=1.1' />
<link rel='stylesheet' type='text/css' href='/assets/css/font.css?v=1.1' />
<link rel='stylesheet' type='text/css' href='/assets/css/style.css?v=1.1' />

<link rel='stylesheet' type='text/css' href='/assets/js/leaflet/leaflet.css?v=1.1' />
<link rel='stylesheet' type='text/css' href='/assets/js/velocity/leaflet-velocity.css?v=1.1' />
<link rel='stylesheet' type='text/css' href='/assets/js/timedimension/leaflet.timedimension.control.min.css?v=1.1' />
<link rel='stylesheet' type='text/css' href='/assets/js/calheatmap/cal-heatmap.css?v=1.1' />

<script type='text/javascript' src='/assets/js/jquery-1.11.3.min.js?v=1.1'></script>
<script type='text/javascript' src='/assets/bootstrap/js/bootstrap.min.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/jquery-validation/jquery.validate.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/jquery-validation/jquery.form.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/malihu-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/datatable/js/jquery.dataTables.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/datatable/js/accent-neutralise.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/datatable/js/dataTables.checkboxes.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/select2/select2.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/rut/jquery.rut.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/fullcalendar/moment.min.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/loudev-multi-select/js/jquery.multi-select.2.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/datatable/TableTools/js/dataTables.tableTools.min.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/bootstrap-timepicker/js/bootstrap-timepicker.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/bootstrap-colorpicker/js/bootstrap-colorpicker.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/x-editable/js/bootstrap-editable.min.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/dropzone/dropzone.min.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/highcharts/highstock.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/highcharts/highcharts-more.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/highcharts/variable-pie.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/highcharts/windbarb.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/highcharts/pattern-fill.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/highcharts/exporting.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/highcharts/accessibility.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/magnific-popup/jquery.magnific-popup.min.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/sortable/sortable.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/jquery-ui.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/bootstrap-maxlength/src/bootstrap-maxlength.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/lookingfor/jquery.lookingfor.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/ayn_handler.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/general_helper.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/app.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/leaflet/leaflet.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/heatmap/heatmap.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/heatmap/leaflet-heatmap.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/leaflet-arrows/leaflet-arrows.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/leaflet-arrows/WindScale.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/velocity/leaflet-velocity.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/timedimension/iso8601.min.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/timedimension/leaflet.timedimension.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/timedimension/leaflet.timedimension.util.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/timedimension/leaflet.timedimension.layer.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/timedimension/leaflet.timedimension.player.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/timedimension/leaflet.timedimension.control.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/timedimension/leaflet.timedimension.layer.geojson.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/turf/turf.min.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/calheatmap/d3.min.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/calheatmap/d3.v3.min.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/calheatmap/cal-heatmap.min.js?v=1.1'></script>

</head>

<body>
           

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation"  style="background-color: #ffffff;">
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
                                   
                                        <button type="submit" class="" >Salir</button>
                        </form>

                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </nav>

    <script type="text/javascript">
    $(document).ready(function () {
		
        			
			var	notificationOptions = {},
				$notificationIcon = $("#web-notification-icon"),
				alertOptions = {},
				$alertIcon = $("#web-alert-icon"),
				cronOptions = {};
			
			// Notificaciones
			notificationOptions.notificationUrl = "#";
			notificationOptions.notificationStatusUpdateUrl = "#";
			notificationOptions.checkNotificationAfterEvery = "5";
			notificationOptions.icon = "fa-bell-o";
			notificationOptions.notificationSelector = $notificationIcon;
	
			checkNotifications(notificationOptions);
	
			$notificationIcon.click(function () {
				notificationOptions.notificationUrl = "#";
				checkNotifications(notificationOptions, true);
				notificationOptions.notificationUrl = "#";
			});
			

			// Alertas
			alertOptions.alertUrl = "";
			alertOptions.alertStatusUpdateUrl = "";
			alertOptions.checkAlertAfterEvery = "5";
			alertOptions.icon = "fa fa-exclamation-triangle";
			alertOptions.alertSelector = $alertIcon;
						
			checkAlerts(alertOptions);
			
			$alertIcon.click(function () {
				alertOptions.alertUrl = "#";
				checkAlerts(alertOptions, true);
				alertOptions.alertUrl = "";
			});
			
			// Cron
			cronOptions.executeCronAfterEvery = "5";
			executeCron(cronOptions);
			
				
    });
</script>



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




<script>
	$(document).ready(function() {
		// Posicionar scroll cuando la página recarga
		$('#sidebar-scroll').mCustomScrollbar('scrollTo', $('#sidebar-scroll').find('.mCSB_container').find('.active'));
		// Posicionar scroll cuando hacen clic
		$('#sidebar-scroll li').on('click', function() {
			$('#sidebar-scroll').mCustomScrollbar('scrollTo', $('#sidebar-scroll').find('.mCSB_container').find('.active'));
		})
	})
</script> 


<div id="page-container" class="box-content">
                <div id="pre-loader">
                    <div id="pre-loade" class="app-loader"><div class="loading"></div></div>
                </div>
                <div class="scrollable-page">
                    <div id="page-content" class="p20 clearfix">

<div id="models_group">

	@include('layouts.menu_mapas')
		
			<div class="panel panel-default mb15">
                
				<div class="page-title clearfix p15">
					
					<div class="col-md-12 " style="display: none">
						<div class="form-group col-md-6">
							<label for="air_quality_variable" class="col-md-3">Variable de Calidad del aire</label>
							<div class="col-md-9">
								<select name="air_quality_variable_map" id='air_quality_variable_map' class='select2 validate-hidden col-md-12' data-rule-required='true' data-msg-required='Este campo es requerido.'>
<option value="" selected="selected"  >-</option>
<option value="8"  >Dióxido de azufre</option>
<option value="9"  >Material particulado respirable</option>
</select>
							</div>
						</div>

						<div class="form-group col-md-6">
							<label for="meteorological_variable" class="col-md-3">Variable Meteorológica</label>
							<div class="col-md-9">
								<select name="meteorological_variable_map" id='meteorological_variable_map' class='select2 validate-hidden col-md-12' data-rule-required='true' data-msg-required='Este campo es requerido.'>
<option value="" selected="selected"  >-</option>
<option value="1"  >Velocidad del viento</option>
<option value="2"  >Dirección del viento</option>
<option value="3"  >Temperatura</option>
<option value="7"  >Presión barométrica</option>
</select>
							</div>
						</div>
					</div>

				</div>

<!-- <div id="div_numerical_map" class="panel-body" style="display: none">-->
				<div id="div_numerical_map" class="panel-body" style="display: none" style="display: none" >
					<div id="mapa" style="height: 450px; position: relative; outline: none;"></div>
				</div>

			</div>

		

					<div id="div_neur_model" class="panel panel-default mb15" style="display: none">

				<div class="page-title clearfix">
					<h1><img src="assets/images/air_models/air_model_neuron.png" alt="..." heigth='30' width='30'> Modelo Neuronal</h1>
				</div>

				<div class="panel-body">

					<div class="col-md-12">
						
						<div class="form-group col-md-4">
							<label for="air_quality_variable_neur_model" class="col-md-3">Variable de Calidad del aire</label>
							<div class="col-md-9">
								<select name="air_quality_variable_neur_model" id='air_quality_variable_neur_model' class='select2 validate-hidden col-md-12' data-rule-required='true' data-msg-required='Este campo es requerido.'>
<option value="" selected="selected"  >-</option>
<option value="8"  >Dióxido de azufre</option>
<option value="9"  >Material particulado respirable</option>
</select>
							</div>
						</div>
						<div class="form-group col-md-4">
							<label for="receptor" class="col-md-3">Receptor</label>
							<div class="col-md-9">
								<select name="receptor_neur_model" id='receptor_neur_model' class='select2 validate-hidden col-md-12' data-rule-required='true' data-msg-required='Este campo es requerido.'>
                                <option value="" selected="selected"  >-</option>
                                @foreach ($estaciones_list as $est)
                                <option value="{{$est->id_estacion}}"  >{{$est->est_nombre}}</option>
                                @endforeach
                                </select>
							</div>
						</div>

					</div>

					<div class="col-md-12 mb15">
						<div id="chart_qual_neur_model" style="margin: 0 auto;">
							<div style="margin-top: 100px; text-align: center">
								<strong>Sin información disponible</strong>
							</div>
						</div>
					</div>

					<div class="col-md-12 mb15">
						<div id="calheatmap_qual_neur_model"></div>
					</div>
 
					<div class="col-md-12 mb15">
						<div class="table-responsive">
							<table id="qual_receptor_neur_model-table1" class="display" cellspacing="0" width="100%">            
							</table>
						</div>
					</div>

				</div>

			</div>						
		
					<div id="div_stat_model" class="panel panel-default mb15">

				<div class="page-title clearfix">
					<h1 id="h1_stat"><img src="assets/images/air_models/air_model_statics.png" alt="..." heigth='30' width='30'> Modelo Estadístico</h1>
				</div>

				<div class="panel-body">

					<div class="col-md-12">
						
						<div class="form-group col-md-4">
							<label for="air_quality_variable_stat_model" class="col-md-3">Variable de Calidad del aire</label>
							<div class="col-md-9">
								<select name="air_quality_variable_stat_model" id='air_quality_variable_stat_model' class='select2 validate-hidden col-md-12' data-rule-required='true' data-msg-required='Este campo es requerido.'>

<option value="8" selected="selected" >Dióxido de azufre</option>
<option value="9"  >Material particulado respirable</option>

</select>
							</div>
						</div>
						<div class="form-group col-md-4">
							<label for="receptor" class="col-md-3">Receptor</label>
							<div class="col-md-9">
								<select name="receptor_stat_model" id='receptor_stat_model' class='select2 validate-hidden col-md-12' data-rule-required='true' data-msg-required='Este campo es requerido.'>
@foreach ($estaciones_list as $est)
<option value="{{$est->id_estacion}}"  >{{$est->est_nombre}}</option>
@endforeach
</select>
							</div>
						</div>

					</div>

					<div class="col-md-12 mb15">
						<div id="chart_qual_stat_model" style="margin: 0 auto;">
							<div style="margin-top: 100px; text-align: center">
								<strong>Sin información disponible</strong>
							</div>
						</div>
					</div>

					<div class="col-md-12 mb15">
						<div id="calheatmap_qual_stat_model"></div>
					</div>

					<div class="col-md-12 mb15">
						<div class="table-responsive">
							<table id="qual_receptor_stat_model-table1" class="display" cellspacing="0" width="100%">            
							</table>
						</div>
					</div>

				</div>

			</div>
		
		
			<div id="div_numerical_model" class="panel panel-default mb15" style="display: none">
				<div class="page-title clearfix">
					<h1><img src="assets/images/air_models/air_model_numeric.png" alt="..." heigth='30' width='30'> Modelo Numérico</h1>
				</div>
				<div class="panel-body">
					<div class="col-md-12">
						
						<div class="col-md-4">
							<label for="air_quality_variable" class="col-md-3">Variable de Calidad del aire</label>
							<div class="col-md-9">
								<select name="air_quality_variable" id='air_quality_variable' class='select2 validate-hidden col-md-12' data-rule-required='true' data-msg-required='Este campo es requerido.'>
<option value="" selected="selected"  >-</option>
<option value="8"  >Dióxido de azufre</option>
<option value="9"  >Material particulado respirable</option>
</select>
							</div>
						</div>

						<div class="col-md-4">
							<label for="meteorological_variable" class="col-md-3">Variable Meteorológica</label>
							<div class="col-md-9">
								<select name="meteorological_variable" id='meteorological_variable' class='select2 validate-hidden col-md-12' data-rule-required='true' data-msg-required='Este campo es requerido.'>
<option value="" selected="selected"  >-</option>
<option value="1"  >Velocidad del viento</option>
<option value="2"  >Dirección del viento</option>
<option value="3"  >Temperatura</option>
<option value="7"  >Presión barométrica</option>
</select>
							</div>
						</div>

						<div class="col-md-4">
							<label for="receptor" class="col-md-3">Receptor</label>
							<div class="col-md-9">
								<select name="receptor" id='receptor' class='select2 validate-hidden col-md-12' data-rule-required='true' data-msg-required='Este campo es requerido.'>
<option value="" selected="selected"  >-</option>
<option value="1"  >Catemu</option>
<option value="2"  >Lo Campo</option>
<option value="3"  >Romeral</option>
<option value="4"  >Sta. Margarita</option>
<option value="5"  >Estación Meteorológica</option>
<option value="6"  >Receptor n°6</option>
<option value="7"  >Receptor n°7</option>
<option value="8"  >Receptor n°8</option>
<option value="9"  >Receptor n°9</option>
<option value="10"  >Receptor n°10</option>
</select>
							</div>
						</div>

					</div>

				</div>

				<!--
				<div id="div_numerical_map" class="panel-body" style="display:none;">
					<div id="mapa" style="height: 450px; position: relative; outline: none;"></div>
				</div>
				-->

				<div class="panel-body">
					
					<div class="col-md-12 mb15">
						<div id="chart_qual" style="margin: 0 auto;">
							<div style="margin-top: 100px; text-align: center">
								<strong>Sin información disponible</strong>
							</div>
						</div>
					</div>

					<div class="col-md-12 mb15">
						<div id="calheatmap_qual"></div>
					</div>

					<div class="col-md-12 mb15">
						<div class="table-responsive">
							<table id="qual_receptor-table1" class="display" cellspacing="0" width="100%">            
							</table>
						</div>
					</div>

					<div class="col-md-12 mb15">
						<div id="chart_meteo" style="margin: 0 auto;" class="">
							<div style="margin-top: 100px; text-align: center">
								<strong>Sin información disponible</strong>
							</div>
						</div>
					</div>

					<div class="col-md-12 mb15">
						<div id="calheatmap_meteo"></div>
					</div>

					<div class="col-md-12 mb15">
						<div class="table-responsive">
							<table id="meteo_receptor-table1" class="display" cellspacing="0" width="100%">            
							</table>
						</div>
					</div>

				</div>

			</div>

		
		

</div>



<style>
	/* Estilos para CalHeatMap */
	.cal-heatmap-container .subdomain-text {
		font-size: 12px;
		fill: #FFF;
	}


	html, body {
		height: auto !important;
		min-height: 100% !important;
	}


	/* Estilos para las leyendas del mapa */

	.info {
		padding: 6px 8px;
		font: 14px/16px Arial, Helvetica, sans-serif;
		background: white;
		background: rgba(255,255,255,0.8);
		box-shadow: 0 0 15px rgba(0,0,0,0.2);
		border-radius: 5px;
	}
	.info h4 {
		margin: 0 0 5px;
		color: #777;
	}

	.legend {
		line-height: 18px;
		color: #555;
	}
	.legend i {
		width: 18px;
		height: 18px;
		float: left;
		margin-right: 8px;
		opacity: 0.7;
	}
	.fixed_width{
		width: 150px;
	}

	/* if existe child 2, ejecutar el css */
	/*.leaflet-top.leaflet-right .leaflet-control:nth-child(1) {*/
	.legend_heatmap {
		float: left !important;
	}
	/*.leaflet-top.leaflet-right .leaflet-control:nth-child(2) {*/
	.legend_isoline, .leaflet-top.leaflet-right .leaflet-control:nth-child(2){
		clear: none;
	}


	/* Esconder botón "play" del timedimension 
	#mapa > div.leaflet-control-container > div.leaflet-bottom.leaflet-left > div > a.leaflet-control-timecontrol.timecontrol-play.play{
		display: none;
	} */

</style>

<script type="text/javascript">
    $(document).ready(function () {

		var min_heatmap = 15.1;

		$('.select2').select2();

		//General Settings
		var decimals_separator = AppHelper.settings.decimalSeparator;
		var thousands_separator = AppHelper.settings.thousandSeparator;
		var decimal_numbers = AppHelper.settings.decimalNumbers;

		let array_days_name = [
			'Domingo', 
			'Lunes', 
			'Martes', 
			'Miércoles', 
			'Jueves', 
			'Viernes', 
			'Sábado', 
		];

		let array_days_short_name = [
			'Dom', 
			'Lun', 
			'Mar', 
			'Mie', 
			'Jue', 
			'Vie', 
			'Sáb', 
		];

		// Array para setear formato de fechas en los calhetamap
		let array_format_date_calheatmap = [];
		array_format_date_calheatmap["d-m-Y"] = "%d-%m-%Y";
		array_format_date_calheatmap["m-d-Y"] = "%m-%d-%Y";
		array_format_date_calheatmap["Y-m-d"] = "%Y-%m-%d";
		array_format_date_calheatmap["d/m/Y"] = "%d/%m/%Y";
		array_format_date_calheatmap["m/d/Y"] = "%m/%d/%Y";
		array_format_date_calheatmap["Y/m/d"] = "%Y/%m/%d";
		array_format_date_calheatmap["d.m.Y"] = "%d.%m.%Y";
		array_format_date_calheatmap["m.d.Y"] = "%m.%d.%Y";
		array_format_date_calheatmap["Y.m.d"] = "%Y.%m.%d";


		/* Sección Modelo Numérico */

		// Si el Sector tiene el modelo Numérico (id 3)
					
																$('#air_quality_variable').val(8).trigger('change');
					$('#air_quality_variable_map').val(8).trigger('change');
							
							$('#meteorological_variable').find('option:eq(1)').prop('selected', true).trigger('change');
				$('#meteorological_variable_map').find('option:eq(1)').prop('selected', true).trigger('change');
						
			// Objetos variable Calidad del aire y variable Meteorológica inicial
			var air_quality_variable = {"id":"8","id_air_variable_type":"2","id_unit_type":"15","name":"Di\u00f3xido de azufre","sigla":"SO2","icono":"air_sulfur_dioxide.png","alias":"Diox azufre","deleted":"0","name_variable_type":"air_quality","name_unit_type":"Concentraci\u00f3n"};
			var meteorological_variable = {"id":"1","id_air_variable_type":"1","id_unit_type":"10","name":"Velocidad del viento","sigla":"WS","icono":"air_wind_speed.png","alias":"Vel viento","deleted":"0","name_variable_type":"meteorological","name_unit_type":"Velocidad"};

			// Unidades de variables según configuración Unidades de Reporte
			var unit_qual = {"id":"40","id_tipo_unidad":"15","nombre":"\u00b5g\/m3","nombre_real":"Microgramo por metro c\u00fabico","indicador":null,"deleted":"0"};
			var unit_type_qual = "Concentraci\u00f3n";
			var unit_meteo = {"id":"26","id_tipo_unidad":"10","nombre":"m\/s","nombre_real":"Metros por segundo","indicador":null,"deleted":"0"};
			var unit_type_meteo = "Velocidad";

			var unit_meteo_vel = {"id":"26","id_tipo_unidad":"10","nombre":"m\/s","nombre_real":"Metros por segundo","indicador":null,"deleted":"0"};
			var unit_meteo_dir = {"id":"30","id_tipo_unidad":"11","nombre":"\u00b0","nombre_real":"Grados","indicador":null,"deleted":"0"};

			var id_sector = 1;

			/* Mapa */

			// Inicia Mapa Leaflet
			//var map = L.map('map').setView([-32.8061616, -70.9586498], 300);
			var map = new L.Map('mapa', {
				center : new L.LatLng(-32.8061616, -70.9586498), // Posicionamiento del mapa
				zoom: 12,
				timeDimension: true,
				timeDimensionControl: true,
				timeDimensionControlOptions: {
					playButton: false,
					speedSlider: false,
				},
				timeDimensionOptions:{
					timeInterval: "{!!$timeInterval!!}",
					period: "PT1H",
					currentTime: "1663297200" // Slot posicionado al principio del slide al mostrar el mapa
				},
				scrollWheelZoom: false,
				attributionControl:false
			});
			
			// Layer de tipo de mapa para Leaflet
			var baseLayer_openstreetmap = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
				//minZoom: 10,
				minZoom: 10,
				maxZoom: 18,
			});
			var baseLayer_google = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{ 
				//attribution: '...',
				minZoom: 10,
				maxZoom: 18,
				subdomains:['mt0','mt1','mt2','mt3']
			});

			baseLayer_openstreetmap.addTo(map); // Agrega capa base al Mapa

			
				var receptorIcon = new L.Icon({
					iconUrl: '/assets/js/leaflet/images/marker-icon-2x-green.png',
					shadowUrl: '/assets/js/leaflet/images/marker-shadow.png',
					iconSize: [25, 41],
					iconAnchor: [12, 41],
					popupAnchor: [1, -34],
					shadowSize: [41, 41]
				});

				var stationIcon = new L.Icon({
					iconUrl: '/assets/js/leaflet/images/marker-icon-2x-blue.png',
					shadowUrl: '/assets/js/leaflet/images/marker-shadow.png',
					iconSize: [25, 41],
					iconAnchor: [12, 41],
					popupAnchor: [1, -34],
					shadowSize: [41, 41]
				});

			{!!$estaciones_map !!}
						
				
			
			var array_alerts_qual = [{"color":"#6df257","value":"0"},{"color":"#f6fa3a","value":"100"},{"color":"#faa500","value":"200"},{"color":"#ed1515","value":"300"},{"color":"#8027f2","value":"400"}];
			var array_alerts_qual_heatmap_map_ranges = [{"color":"#6df257","range":0},{"color":"#f6fa3a","range":"100"},{"color":"#faa500","range":"200"},{"color":"#ed1515","range":"300"},{"color":"#8027f2","range":"194.20"}];
			var array_alerts_qual_heatmap_map_ranges_percent = {"0":"#6df257","0.51493305870237":"#f6fa3a"};
			var array_no_alerts_gradients = null;

			// Layer Heatmap (Calidad del Aire)
			var heatmapLayer = new HeatmapOverlay({
				radius: 0.005,
				opacity: 0.5,
				maxOpacity: 1,
				minOpacity: 0.5,
				blur: 0.85,
				scaleRadius: true,
				useLocalExtrema: false,
				latField: 'lat',
				lngField: 'lon',
				valueField: 'cont',
				onExtremaChange: function(extremaData) {
					// extremaData contains 
					// { min: <number>, max: <number>, gradient: <current gradient cfg> }
				},

				gradient : array_alerts_qual_heatmap_map_ranges_percent,
				
			});

			// Variable para la leyenda de Layer Heatmap
			var legend_heatmap;

			// Rangos y colores para la leyenda de Layer Heatmap
			var legend_ranges_heatmap = {

											'0' : '#6df257',
											'100' : '#f6fa3a',
											'200' : '#faa500',
											'300' : '#ed1515',
											'400' : '#8027f2',
									
			};


			// Variable para la leyenda de Layer Isoline
			var legend_isoline;

			// Rangos y colores para la leyenda de Layer Heatmap
			var legend_ranges_isoline = {

				
					'5' : 'rgb(30,101,78)', // 10 VERDE
					'6' : 'rgb(36,137,59)', // 50
					'7' : 'rgb(51,170,41)', // 70
					'8' : 'rgb(80,192,27)', // 90
					'9' : 'rgb(114,205,16)', // 100
					'10' : 'rgb(151,207,8)', // 200 
					'11' : 'rgb(184,189,3)', // 400 AMARILLO
					'12' : 'rgb(212,156,1)', // 500 NARANJO
					'13' : 'rgb(230,110,0)', // 800
					'14' : 'rgb(244,58,0)', // 1000 
					'15' : 'rgb(255,0,0)', // 2000 ROJO
					'16' : 'rgb(201,0,100)', // 300
					'17' : 'rgb(145,0,127)', // 400
					'18' : 'rgb(64,0,138)', // 5000 MORADO

				
			};

			// Funcion que retorna el color de un rango para la capa de isolineas de variable meteorológica
			var array_alerts_meteo_legend_map_ranges = null;
			function get_isoline_colors(value, array_alerts_meteo_legend_map_ranges) {

				if(Object.keys(array_alerts_meteo_legend_map_ranges).length !== 0){

					var colors = Object.keys(array_alerts_meteo_legend_map_ranges);
					var ranges = Object.values(array_alerts_meteo_legend_map_ranges);

					for(var i = Object.keys(array_alerts_meteo_legend_map_ranges).length - 1; i >= 0 ; i--){
						var color = colors[i];
						var range = ranges[i];
						if(parseFloat(value) >= parseFloat(range)){
							return color;
						}
					}

				} else {

					var array_colors = [
						'rgb(30,101,78)', // 10 VERDE
						'rgb(36,137,59)', // 50
						'rgb(51,170,41)', // 70
						'rgb(80,192,27)', // 90
						'rgb(114,205,16)', // 100
						'rgb(151,207,8)', // 200 
						'rgb(184,189,3)', // 400 AMARILLO
						'rgb(212,156,1)', // 500 NARANJO
						'rgb(230,110,0)', // 800
						'rgb(244,58,0)', // 1000 
						'rgb(255,0,0)', // 2000 ROJO
						'rgb(201,0,100)', // 300
						'rgb(145,0,127)', // 400
						'rgb(64,0,138)', // 5000 MORADO
					]

					return value >= 18
						? array_colors[13]
						: value >= 17
						? array_colors[12]
						: value >= 16
						? array_colors[11]
						: value >= 15
						? array_colors[10]
						: value >= 14
						? array_colors[9]
						: value >= 13
						? array_colors[8]
						: value >= 12
						? array_colors[7]
						: value >= 11
						? array_colors[6]
						: value >= 10
						? array_colors[5]
						: value >= 9
						? array_colors[4]
						: value >= 8
						? array_colors[3]
						: value >= 7
						? array_colors[2]
						: value >= 6
						? array_colors[1]
						: array_colors[0];

				}
				
			}


			// Layer Timedimension
			var timedimension = new L.TimeDimension.Layer(heatmapLayer, {
				updateTimeDimension: true,
				updateTimeDimensionMode: 'replace',
				addlastPoint: true
			});

			// Variable para el layer Isoline de variables meteorológicas
			var layerIsoline;

			// Variable para el LayerGroup de la capa Arrow
			var flechas;

			// Datos variable inicial de tipo "Calidad del Aire" (para el layer de HeatMap)
            var array_qual_data_values_p = {};
// Datos variable inicial de tipo "Meteorológica" (para el layer de Arrow)
var array_meteo_data_values_p = {};


			// Si hay variable de tipo "Calidad del aire" seleccionada al ingresar al Sector y esta tiene datos y 
			// si hay variable de tipo "Meteorológica" seleccionada al ingresar al Sector y esta tiene datos:
			
				var fecha = "{!!$ayer!!}"; 	// Ej: 2020-01-01
				var hora = "00"; 	// Ej: 00
				var time_hora = "time_" + hora; 			// Ej: time_00

				// Agrega layer Heatmap y Timedimension al mapa
				//if(max_heatmap != undefined){
				heatmapLayer.addTo(map);
				//}
				timedimension.addTo(map);

				// Si hay datos para la variable de tipo "Calidad del aire" seleccionada al ingresar al Sector
				// en la primera fecha de consulta, muestra sus datos en el mapa
				if(array_qual_data_values_p[fecha]){

					map.removeLayer(heatmapLayer);
					var array_data_qual = [];

					var array_cont = [];
					$.each(array_qual_data_values_p[fecha], function(key, value) {
						var array_latlon = key.split(":");
						var lat = array_latlon[0];
						var lon = array_latlon[1];
						var cont = value[time_hora];

						array_cont.push(value[time_hora]);

						if(cont >= min_heatmap /*&& cont <= max_heatmap*/){
							array_data_qual.push({lat: lat, lon: lon, cont: cont});
						}
					});

					var max_heatmap = Math.max.apply(Math, array_cont);


					heatmapLayer.setData({
						min: min_heatmap,
						max: max_heatmap,
						data: array_data_qual
					})

					heatmapLayer.addTo(map);

					// Leyenda para capa Heatmap
					legend_heatmap = L.control({position: 'topright'});
					legend_heatmap.onAdd = function (map) {
						var div = L.DomUtil.create('div', 'info legend legend_heatmap fixed_width');
						div.innerHTML += '<strong>'+air_quality_variable.name+'</strong><br><br>';				
						Object.keys(legend_ranges_heatmap).reverse().forEach(function(index){
							div.innerHTML += '<div class=""><i style="background:' + legend_ranges_heatmap[index] + '"></i> ' + index + ' (' + unit_qual.nombre + ')' + '</div>';
						});
						div.innerHTML += '</div>';
						return div;
					};
					legend_heatmap.addTo(map);
					
				}

				if(map.hasLayer(flechas)){
					map.removeLayer(flechas);
				}

				if(map.hasLayer(layerIsoline)){
					map.removeLayer(layerIsoline);
				}

				// Creación de objetos para cada flecha del layer de Arrow		
				var arrayLayers = [];
				var array_data_meteo = [];

				// Si hay datos para la variable de tipo "Meteorológica" seleccionada al ingresar al Sector
				// en la primera fecha de consulta, muestra sus datos en el mapa
				if(array_meteo_data_values_p["{!!$ayer !!}"]){

					// Si la variable meteorológica inicial es de tipo Velocidad del viento (id 1) o Dirección del viento (id 2)
					if(meteorological_variable.id == 1 || meteorological_variable.id == 2){

						$.each(array_meteo_data_values_p["{!!$ayer !!}"], function(key, value) {
							var array_latlon = key.split(":");
							var lat = array_latlon[0];
							var lon = array_latlon[1];

							if(value[time_hora]["velocity"] != null && value[time_hora]["direction"] != null){
								var velocity = value[time_hora]["velocity"] * 10;
								var direction = value[time_hora]["direction"];

								var points = map.latLngToContainerPoint(L.latLng(lat, lon));

								array_data_meteo.push({
									latlng: L.latLng(lat, lon),
									degree: (direction > 0.5) ? Math.round(direction) : direction,
									distance: velocity,
									points: points,
									title: "Demo"
								});
							} else {
								var points = map.latLngToContainerPoint(L.latLng("0", "0"));

								array_data_meteo.push({
									latlng: L.latLng("0", "0"),
									degree: 0,
									distance: 0,
									points: points,
									title: "Demo"
								});
							}
						});

						// Crea los layers y el layer group para la capa Arrow
						array_data_meteo.forEach(function(obj, index){

							var windlayer = new L.Arrow(obj, {
								distanceUnit: 'px',
								arrowheadLength: 6,
								//arrowheadClosingLine: false,
								//stretchFactor: 0.8,
								weight: 1,
								color: '#000',
								popupContent: function(data) {
									var point = map.latLngToContainerPoint(data.latlng);
									var html_popup = '<table style="width: 100%; font-size:15px;">';
									if(map.hasLayer(heatmapLayer) && !$.isEmptyObject(array_qual_data_values_p)){
										var value = heatmapLayer._heatmap.getValueAt({
											x: point.x,
											y: point.y
										});
										html_popup += '<tr><td><img heigth="25" width="25" src="/assets/images/air_variables/'+air_quality_variable.icono+'"></td><td><strong> &nbsp; '+air_quality_variable.name+':</strong> '+value.toFixed(4)+' ('+ unit_qual.nombre +')</td></tr>';
									}
									html_popup += '<tr><td><img heigth="25" width="25" src="/assets/images/air_variables/air_wind_speed.png"></td><td><strong> &nbsp; ' + 'Velocidad del viento' + ':</strong> '+data.distance.toFixed(4)+' ('+ unit_meteo_vel.nombre +')</td></tr>';
									html_popup += '<tr><td><img heigth="25" width="25" src="/assets/images/air_variables/air_wind_direction.png"></td><td><strong> &nbsp; ' + 'Dirección del viento' + ':</strong> '+data.degree+' ('+ unit_meteo_dir.nombre +')</td></tr></table>';
									return html_popup;
								}
							});

							arrayLayers.push(windlayer);

						});

						flechas = L.layerGroup(arrayLayers);
						map.addLayer(flechas, true);

					} else {

						var features = [];

						var meteo_data_cont = 0;
						var first_lat = 0;
						var first_lon = 0;
						var last_lat = 0;
						var last_lon = 0;

						$.each(array_meteo_data_values_p["{!!$ayer !!}"], function(key, value) {

							var array_latlon = key.split(":");
							var lat = array_latlon[0];
							var lon = array_latlon[1];
							var cont = value[time_hora];
							features.push({
								type: 'Feature',
								geometry: {
									type: 'Point',
									coordinates: [parseFloat(lon), parseFloat(lat)]
								},
								properties:{
									z: parseFloat(cont)
								}
							});
						
							meteo_data_cont++;

							if(meteo_data_cont == 1){
								first_lat = parseFloat(lat);
								first_lon = parseFloat(lon);
							} else if(meteo_data_cont == Object.keys(array_meteo_data_values_p["{!!$ayer!!}"]).length){
								last_lat = parseFloat(lat);
								last_lon = parseFloat(lon);
							}

						});

						var points = {
							type: 'FeatureCollection',
							features: features
						}

						var crimeGridStyle = {
							style: function style(feature) {
								return {
									//fillColor: getColor(feature.properties.z),
									fillColor: "#FFF",
									weight: 2,
									opacity: 1,
									color: get_isoline_colors(feature.properties.z, array_alerts_meteo_legend_map_ranges),
									//dashArray: "3",
									fillOpacity: 0.4,
								};
							},
							onEachFeature: function (feature, layer) {
								layer.on('click', function (e) {
									var point = map.latLngToContainerPoint(e.latlng);
									var html_popup = '<table style="width: 100%; font-size:15px;">';
									if(map.hasLayer(heatmapLayer) && !$.isEmptyObject(array_qual_data_values_p)){
										var value = heatmapLayer._heatmap.getValueAt({
											x: point.x,
											y: point.y
										});
										html_popup += '<tr><td><img heigth="25" width="25" src="/assets/images/air_variables/'+air_quality_variable.icono+'"></td><td><strong> &nbsp; '+air_quality_variable.name+':</strong> '+value.toFixed(4)+' ('+ unit_qual.nombre +')</td></tr>';
									}
									html_popup += '<tr><td><img heigth="25" width="25" src="/assets/images/air_variables/'+meteorological_variable.icono+'"></td><td><strong> &nbsp; ' + meteorological_variable.name + ':</strong> '+feature.properties.z.toFixed(4)+' ('+ unit_meteo.nombre +')</td></tr>';
									layer.bindPopup(html_popup);
								});
							}
						};
					
						var breaks = [];
						for(i = 0; i <= 100; i = i + 1){
							breaks.push(i);
						}
						var isolined = turf.isolines(points, 'z', 100, breaks); // https://github.com/turf-junkyard/turf-isolines
						layerIsoline = new L.geoJson(isolined, crimeGridStyle).addTo(map);

						// Leyenda para capa isoline
						legend_isoline = L.control({position: 'topright'});
						legend_isoline.onAdd = function (map) {
							var div = L.DomUtil.create('div', 'info legend legend_isoline fixed_width');
							div.innerHTML += '<strong>'+meteorological_variable.name+'</strong><br><br>';				
							Object.keys(legend_ranges_isoline).reverse().forEach(function(index){
								div.innerHTML += '<div class=""><i style="background:' + legend_ranges_isoline[index] + '"></i> ' + index + ' (' + unit_meteo.nombre + ')' + '</div>';
							});
							div.innerHTML += '</div>';
							return div;
						};
						legend_isoline.addTo(map);


					}	

				}

				// Handler Timedimension timeload
				timedimension.on('timeload', function(time){

					if(map.hasLayer(flechas)){
						map.removeLayer(flechas);
					}
					if(map.hasLayer(heatmapLayer)){
						map.removeLayer(heatmapLayer);
					}
					if(map.hasLayer(layerIsoline)){
						map.removeLayer(layerIsoline);
					}

					var date = new Date(map.timeDimension.getCurrentTime()).toISOString();
					var fecha = date.substring(0, 10); 			// Ej: 2020-01-01
					var hora = date.substring(11, 16); 			// Ej: 00:00
					var time_hora = "time_" + hora.substr(0,2); // Ej: time_00
					var array_data_qual = [];

					var array_cont = [];

					// Si array_qual_data_values_p tiene datos asociados a la fecha consultada, muestra sus datos en el mapa
					if(array_qual_data_values_p != null && array_qual_data_values_p[fecha]){

						$.each(array_qual_data_values_p[fecha], function(key, value) {
							var array_latlon = key.split(":");
							var lat = array_latlon[0];
							var lon = array_latlon[1];
							var cont = value[time_hora];

							array_cont.push(value[time_hora]);

							if(cont >= min_heatmap /*&& cont <= max_heatmap*/){
								array_data_qual.push({lat: lat, lon: lon, cont: cont});
							}
						});

						var max_heatmap = Math.max.apply(Math, array_cont);

						if(!$.isEmptyObject(array_alerts_qual)){

							// configurar gradiente con: 
							var array_alerts_qual_heatmap_map_ranges = [];

							$.each(array_alerts_qual, function(key, value) {

								var valueToPush = [];

								if(key == 0){ // primer loop
									valueToPush["color"] = value.color;
									valueToPush["range"] = 0;
									array_alerts_qual_heatmap_map_ranges.push(valueToPush);
								} else if(key === array_alerts_qual.length - 1){ // último loop
									if(value.value < max_heatmap){
										valueToPush["color"] = value.color;
										valueToPush["range"] = value.value;
										array_alerts_qual_heatmap_map_ranges.push(valueToPush);
										var valueToPush = [];
										valueToPush["color"] = value.color;
										valueToPush["range"] = max_heatmap;
										array_alerts_qual_heatmap_map_ranges.push(valueToPush);
									} else {
										valueToPush["color"] = value.color;
										valueToPush["range"] = max_heatmap;
										array_alerts_qual_heatmap_map_ranges.push(valueToPush);
									}
								} else {
									valueToPush["color"] = value.color;
									valueToPush["range"] = value.value;
									array_alerts_qual_heatmap_map_ranges.push(valueToPush);
								}

							});

							// Pasar los rangos a porcentajes para la gradiente de heatmapLayer
							var array_alerts_qual_heatmap_map_ranges_percent = [];
							$.each(array_alerts_qual_heatmap_map_ranges, function(key, value) {
								if(value.range < array_alerts_qual_heatmap_map_ranges[array_alerts_qual_heatmap_map_ranges.length - 1].range){
									var percent = ( (value.range * 100) / array_alerts_qual_heatmap_map_ranges[array_alerts_qual_heatmap_map_ranges.length - 1].range ) / 100;
									percent = (percent > 1) ? 1.0 : percent;
									array_alerts_qual_heatmap_map_ranges_percent[percent] = value.color;
								}
							});
							
							// Actualizar la gradiente de heatmapLayer
							var update_array_alerts_qual_heatmap_map_ranges = heatmapLayer._heatmap.configure({
								gradient: array_alerts_qual_heatmap_map_ranges_percent
							});

						} else {

							// configurar gradiente con: 
							var array_alerts_qual_heatmap_map_ranges = [];

							$.each(array_no_alerts_gradients, function(key, value) {

								var valueToPush = [];

								if(key == 0){ // primer loop
									valueToPush["color"] = value.color;
									valueToPush["range"] = 0;
									array_alerts_qual_heatmap_map_ranges.push(valueToPush);
								} else if(key === array_no_alerts_gradients.length - 1){ // último loop
									if(value.value < max_heatmap){
										valueToPush["color"] = value.color;
										valueToPush["range"] = value.value;
										array_alerts_qual_heatmap_map_ranges.push(valueToPush);
										var valueToPush = [];
										valueToPush["color"] = value.color;
										valueToPush["range"] = max_heatmap;
										array_alerts_qual_heatmap_map_ranges.push(valueToPush);
									} else {
										valueToPush["color"] = value.color;
										valueToPush["range"] = max_heatmap;
										array_alerts_qual_heatmap_map_ranges.push(valueToPush);
									}
								} else {
									valueToPush["color"] = value.color;
									valueToPush["range"] = value.value;
									array_alerts_qual_heatmap_map_ranges.push(valueToPush);
								}

							});

							// Pasar los rangos a porcentajes para la gradiente de heatmapLayer
							var array_alerts_qual_heatmap_map_ranges_percent = [];
							$.each(array_alerts_qual_heatmap_map_ranges, function(key, value) {
								
								if(value.range < array_alerts_qual_heatmap_map_ranges[array_alerts_qual_heatmap_map_ranges.length - 1].range){
									var percent = ( (value.range * 100) / array_alerts_qual_heatmap_map_ranges[array_alerts_qual_heatmap_map_ranges.length - 1].range ) / 100;
									percent = (percent > 1) ? 1.0 : percent;
									array_alerts_qual_heatmap_map_ranges_percent[percent] = value.color;
								}

							});
							
							// Actualizar la gradiente de heatmapLayer
							var update_array_alerts_qual_heatmap_map_ranges = heatmapLayer._heatmap.configure({
								gradient: array_alerts_qual_heatmap_map_ranges_percent
							});
							
						}


					} else {
						// Si array_qual_data_values_p no tiene datos asociados a la fecha consultada,
						// llena con datos seteados en "0" array_data_qual, que es el arreglo de datos
						// para la capa HeatmapLayer.
						array_data_qual.push({lat: "0", lon: "0", cont: "0"});
					}

					heatmapLayer.setData({
						min: min_heatmap,
						max: max_heatmap,
						data: array_data_qual
					})

					heatmapLayer.addTo(map);


					if(array_qual_data_values_p != null && array_qual_data_values_p[fecha]){

						// Leyenda para capa Heatmap
						if(legend_heatmap != undefined){
							legend_heatmap.remove();
						}
						
						// Leyenda para capa Heatmap
						legend_heatmap = L.control({position: 'topright'});
						legend_heatmap.onAdd = function (map) {
							var div = L.DomUtil.create('div', 'info legend legend_heatmap fixed_width');
							div.innerHTML += '<strong>'+air_quality_variable.name+'</strong><br><br>';				
							Object.keys(legend_ranges_heatmap).reverse().forEach(function(index){
								div.innerHTML += '<div class=""><i style="background:' + legend_ranges_heatmap[index] + '"></i> ' + index + ' (' + unit_qual.nombre + ')' + '</div>';
							});
							return div;
						};

						// Si checkbox "Leyenda de Calidad del aire" está checkeado, agregar legend
						if($('#mapa > div.leaflet-control-container > div.leaflet-top.leaflet-left > div.leaflet-control-layers.leaflet-control > form > div.leaflet-control-layers-overlays > label:nth-child(1) > div > input').is(':checked')){
							legend_heatmap.addTo(map);
						}
						
					}

					// Creación de objetos para cada flecha del layer de Leaflet Arrow		
					var arrayLayers = [];
					var array_data_meteo = [];

					// Si array_meteo_data_values_p tiene datos asociados a la fecha consultada, muestra sus datos en el mapa
					if(array_meteo_data_values_p != null && array_meteo_data_values_p[fecha]){

						// Si la variable meteorológica inicial es de tipo Velocidad del viento (1) o Dirección del viento (2)
						if(meteorological_variable.id == 1 || meteorological_variable.id == 2){
							
							$.each(array_meteo_data_values_p[fecha], function(key, value) {
								var array_latlon = key.split(":");
								var lat = array_latlon[0];
								var lon = array_latlon[1];

								if(value[time_hora]["velocity"] != null && value[time_hora]["direction"] != null){
									var velocity = value[time_hora]["velocity"] * 10;
									var direction = value[time_hora]["direction"];
									array_data_meteo.push({
										latlng: L.latLng(lat, lon),
										degree: (direction > 0.5) ? Math.round(direction) : direction,
										distance: velocity,
										title: "Demo"
									});
								} else {
									array_data_meteo.push({
										latlng: L.latLng("0", "0"),
										degree: 0,
										distance: 0,
										title: "Demo"
									});
								}
							});

							array_data_meteo.forEach(function(obj, index){

								var windlayer = new L.Arrow(obj, {
									distanceUnit: 'px', 
									arrowheadLength: 6,
									arrowheadClosingLine: false,
									//stretchFactor: 0.8,
									weight: 1,
									color: '#000',
									popupContent: function(data) {
										var point = map.latLngToContainerPoint(data.latlng);
										var html_popup = '<table style="width: 100%; font-size:15px;">';
										if(map.hasLayer(heatmapLayer) && !$.isEmptyObject(array_qual_data_values_p)){
											var value = heatmapLayer._heatmap.getValueAt({
												x: point.x,
												y: point.y
											});
											html_popup += '<tr><td><img heigth="25" width="25" src="/assets/images/air_variables/'+air_quality_variable.icono+'"></td><td><strong> &nbsp; '+air_quality_variable.name+':</strong> '+value.toFixed(4)+' ('+ unit_qual.nombre +')</td></tr>';
										}
										html_popup += '<tr><td><img heigth="25" width="25" src="/assets/images/air_variables/air_wind_speed.png"></td><td><strong> &nbsp; ' + 'Velocidad del viento' + ':</strong> '+data.distance.toFixed(4)+' ('+ unit_meteo_vel.nombre +')</td></tr>';
										html_popup += '<tr><td><img heigth="25" width="25" src="/assets/images/air_variables/air_wind_direction.png"></td><td><strong> &nbsp; ' + 'Dirección del viento' + ':</strong> '+data.degree+' ('+ unit_meteo_dir.nombre +')</td></tr></table>';
										return html_popup;
									},
								});

								arrayLayers.push(windlayer);

							});

							flechas = L.layerGroup(arrayLayers);
							map.addLayer(flechas, true);

						} else {

							var features = [];

							var meteo_data_cont = 0;
							var first_lat = 0;
							var first_lon = 0;
							var last_lat = 0;
							var last_lon = 0;

							$.each(array_meteo_data_values_p[fecha], function(key, value) {

								var array_latlon = key.split(":");
								var lat = array_latlon[0];
								var lon = array_latlon[1];
								var cont = value[time_hora];
								features.push({
									type: 'Feature',
									geometry: {
										type: 'Point',
										coordinates: [parseFloat(lon), parseFloat(lat)]
									},
									properties:{
										z: parseFloat(cont)
									}
								});

								meteo_data_cont++;

								if(meteo_data_cont == 1){
									first_lat = parseFloat(lat);
									first_lon = parseFloat(lon);
								} else if(meteo_data_cont == Object.keys(array_meteo_data_values_p[fecha]).length){
									last_lat = parseFloat(lat);
									last_lon = parseFloat(lon);
								}

							});

							var points = {
								type: 'FeatureCollection',
								features: features
							}

							var crimeGridStyle = {
								style: function style(feature) {
									return {
										//fillColor: getColor(feature.properties.z),
										fillColor: "#FFF",
										weight: 2,
										opacity: 1,
										color: get_isoline_colors(feature.properties.z, array_alerts_meteo_legend_map_ranges),
										//dashArray: "3",
										fillOpacity: 0.4,
									};
								},
								onEachFeature: function (feature, layer) {
									layer.on('click', function (e) {
										var point = map.latLngToContainerPoint(e.latlng);
										var html_popup = '<table style="width: 100%; font-size:15px;">';
										if(map.hasLayer(heatmapLayer) && !$.isEmptyObject(array_qual_data_values_p)){
											var value = heatmapLayer._heatmap.getValueAt({
												x: point.x,
												y: point.y
											});
											html_popup += '<tr><td><img heigth="25" width="25" src="/assets/images/air_variables/'+air_quality_variable.icono+'"></td><td><strong> &nbsp; '+air_quality_variable.name+':</strong> '+value.toFixed(4)+' ('+ unit_qual.nombre +')</td></tr>';
										}
										html_popup += '<tr><td><img heigth="25" width="25" src="/assets/images/air_variables/'+meteorological_variable.icono+'"></td><td><strong> &nbsp; ' + meteorological_variable.name + ':</strong> '+feature.properties.z.toFixed(4)+' ('+ unit_meteo.nombre +')</td></tr>';
										layer.bindPopup(html_popup);
									});
								}
							};

							var breaks = [];
							for(i = 0; i <= 100; i = i + 1){
								breaks.push(i);
							}
							var isolined = turf.isolines(points, 'z', 100, breaks); // https://github.com/turf-junkyard/turf-isolines
							layerIsoline = L.geoJson(isolined, crimeGridStyle).addTo(map);

						}

					} 

					this._update();

				});

			
			// Si hay variable de tipo "Meteorológica" seleccionada al ingresar al Sector y esta tiene datos:
			

			// MAP ON CLICK
			map.on('click', function onMapClick(e) {
				if(air_quality_variable != undefined){
					if(map.hasLayer(heatmapLayer) && !$.isEmptyObject(array_qual_data_values_p)){
						var value = heatmapLayer._heatmap.getValueAt({
							x: e.containerPoint.x,
							y: e.containerPoint.y
						});
						html_popup = '<table style="width: 100%; font-size:17px;"><tr><td><img heigth="25" width="25" src="/assets/images/air_variables/'+air_quality_variable.icono+'"></td><td><strong> &nbsp; '+air_quality_variable.name+':</strong> '+value.toFixed(4)+' ('+ unit_qual.nombre +')</td></tr>';
						var popup = new L.popup({
							maxWidth: 500
						});
						if($('.leaflet-popup-pane > .leaflet-popup').length == 0){
							popup
							.setLatLng(e.latlng)
							.setContent(html_popup);
							//.openOn(map);
							popup.addTo(map).openPopup();
						}
					}
				}
			});



			// Agrega menú para cambiar de capa base y mostrar/ocultar leyendas
			var base_maps = {
				"Mapa Urbano": baseLayer_openstreetmap,
				"Mapa Satelital": baseLayer_google
			};
			var map_legends = {
				"Leyenda Variable de Calidad del aire": new L.layerGroup(),
				"Leyenda Variable Meteorológica": new L.layerGroup(),
			};

							L.control.layers(base_maps, map_legends, {position: 'topleft', collapsed: true}).addTo(map); 
				
			

			// Evento Click de checkbox "Leyenda Variable Calidad del aire"
			//
			
			$('#mapa > div.leaflet-control-container > div.leaflet-top.leaflet-left > div.leaflet-control-layers.leaflet-control > form > div.leaflet-control-layers-overlays > label:nth-child(1) > div > input').on('change', function() { 
			//$('#mapa > div.leaflet-control-container > div.leaflet-top.leaflet-left > div.leaflet-control-layers.leaflet-control-layers-expanded.leaflet-control > form > div.leaflet-control-layers-overlays > label:nth-child(1) > div > input').on('change', function() {    
				if(legend_heatmap != undefined){
					if (map.hasLayer(heatmapLayer) && $(this).prop('checked')) {
						legend_heatmap.addTo(map);
					} else {
						legend_heatmap.remove();
					}	
				}
			});
			if(map.hasLayer(heatmapLayer) && !$.isEmptyObject(array_qual_data_values_p)){
				$('#mapa > div.leaflet-control-container > div.leaflet-top.leaflet-left > div.leaflet-control-layers.leaflet-control > form > div.leaflet-control-layers-overlays > label:nth-child(1) > div > input').prop('checked', true);
			}

			// Evento Click de checkbox "Leyenda Variable Meteorológica"
			$('#mapa > div.leaflet-control-container > div.leaflet-top.leaflet-left > div.leaflet-control-layers.leaflet-control > form > div.leaflet-control-layers-overlays > label:nth-child(2) > div > input').on('change', function() {   
			//$('#mapa > div.leaflet-control-container > div.leaflet-top.leaflet-left > div.leaflet-control-layers.leaflet-control-layers-expanded.leaflet-control > form > div.leaflet-control-layers-overlays > label:nth-child(2) > div > input').on('change', function() {    
				if(legend_isoline != undefined){
					if (map.hasLayer(layerIsoline) && $(this).prop('checked')) {
						legend_isoline.addTo(map);
					} else {
						legend_isoline.remove();
					}
				}
			});
			if(map.hasLayer(layerIsoline) && !$.isEmptyObject(array_meteo_data_values_p)){
				$('#mapa > div.leaflet-control-container > div.leaflet-top.leaflet-left > div.leaflet-control-layers.leaflet-control > form > div.leaflet-control-layers-overlays > label:nth-child(2) > div > input').prop('checked', true);
			}



			$("#air_quality_variable_map, #meteorological_variable_map").on('change', function(){

				var id_air_quality_variable = $('#air_quality_variable_map').val();
				var id_meteorological_variable = $('#meteorological_variable_map').val();
				var id_receptor = $("#receptor").val();

				var date = new Date(map.timeDimension.getCurrentTime()).toISOString();
				var fecha = date.substring(0, 10); 			// Ej: 2020-01-01
				var hora = date.substring(11, 16); 			// Ej: 00:00
				var time_hora = "time_" + hora.substr(0,2); // Ej: time_00*/

				$.ajax({
					url: '/api/get_data_variables',
					type: 'post',
					dataType: 'json',
					data: {
						air_quality_variable: id_air_quality_variable,
						meteorological_variable: id_meteorological_variable,
						id_sector: id_sector,
						id_receptor: id_receptor,
						first_date: "{!!$ayer !!}",
						last_date: "{!!$manana !!}",
						time_hora: time_hora
					},beforeSend: function() {
						//$('#div_numerical_map').html('<div style="padding:20px;"><div class="circle-loader"></div><div>');
						appLoader.show();
					},
					success: function(respuesta){

						air_quality_variable = respuesta.air_quality_variable;
						meteorological_variable = respuesta.meteorological_variable;

						array_qual_data_values_p = respuesta.array_qual_data_values_p;
						array_meteo_data_values_p = respuesta.array_meteo_data_values_p;

						var unit_qual = respuesta.unit_qual;
						unit_meteo = respuesta.unit_meteo;

						var array_alerts_qual = respuesta.array_alerts_qual;
						var array_no_alerts_gradients = respuesta.array_no_alerts_gradients;
						var array_alerts_qual_legend_map_ranges = respuesta.array_alerts_qual_legend_map_ranges;
						var array_alerts_qual_heatmap_map_ranges = respuesta.array_alerts_qual_heatmap_map_ranges;
						var array_alerts_qual_heatmap_map_ranges_percent = respuesta.array_alerts_qual_heatmap_map_ranges_percent;

						array_alerts_meteo_legend_map_ranges = respuesta.array_alerts_meteo_legend_map_ranges;

						if(!$.isEmptyObject(array_alerts_qual_legend_map_ranges)){

							var legend_ranges_heatmap = {};
							$.each(array_alerts_qual_legend_map_ranges, function(color, value) {
								legend_ranges_heatmap[value] = color;
							});

						} else {

							var legend_ranges_heatmap = {
								'10' : 'rgb(30,101,78)', // 10 VERDE
								'50' : 'rgb(36,137,59)', // 50
								'70' : 'rgb(51,170,41)', // 70
								'90' : 'rgb(80,192,27)', // 90
								'100' : 'rgb(114,205,16)', // 100
								'200' : 'rgb(151,207,8)', // 200 
								'400' : 'rgb(184,189,3)', // 400 AMARILLO
								'500' : 'rgb(212,156,1)', // 500 NARANJO
								'800' : 'rgb(230,110,0)', // 800
								'1000' : 'rgb(244,58,0)', // 1000 
								'2000' : 'rgb(255,0,0)', // 2000 ROJO
								'3000' : 'rgb(201,0,100)', // 300
								'4000' : 'rgb(145,0,127)', // 400
								'5000' : 'rgb(64,0,138)', // 5000 MORADO
							}
						}


						
						if(!$.isEmptyObject(array_alerts_meteo_legend_map_ranges)){

							var legend_ranges_isoline = {};
							$.each(array_alerts_meteo_legend_map_ranges, function(color, value) {
								legend_ranges_isoline[value] = color;
							});

						} else {

							var legend_ranges_isoline = {
								'5' : 'rgb(30,101,78)', // 10 VERDE
								'6' : 'rgb(36,137,59)', // 50
								'7' : 'rgb(51,170,41)', // 70
								'8' : 'rgb(80,192,27)', // 90
								'9' : 'rgb(114,205,16)', // 100
								'10' : 'rgb(151,207,8)', // 200 
								'11' : 'rgb(184,189,3)', // 400 AMARILLO
								'12' : 'rgb(212,156,1)', // 500 NARANJO
								'13' : 'rgb(230,110,0)', // 800
								'14' : 'rgb(244,58,0)', // 1000 
								'15' : 'rgb(255,0,0)', // 2000 ROJO
								'16' : 'rgb(201,0,100)', // 300
								'17' : 'rgb(145,0,127)', // 400
								'18' : 'rgb(64,0,138)', // 5000 MORADO
							}
						}


						// Actualizar periodo (fechas y horas) de timedimension del mapa
						var first_date = respuesta.first_date;
						var last_date = respuesta.last_date;
						var first_time = respuesta.first_time;
						var last_time = respuesta.last_time;

						if(!$.isEmptyObject(array_qual_data_values_p) || !$.isEmptyObject(array_meteo_data_values_p)){
							var start_datetime = new Date(first_date + "T" + first_time + ":00:00ZZZ");
							var end_datetime = new Date(last_date + "T" + last_time + ":00:00ZZZZ");
							var new_timedimension_period = L.TimeDimension.Util.explodeTimeRange(start_datetime, end_datetime, 'PT1H');
							map.timeDimension.setAvailableTimes(new_timedimension_period, 'replace');
							//map.timeDimension.setCurrentTime(start_datetime);
						}
						
						//var fecha = first_date; 			  // Ej: 2020-01-01
						//var time_hora = "time_" + first_time; // Ej: time_00

						if(map.hasLayer(heatmapLayer)){
							map.removeLayer(heatmapLayer);
						}
						if(legend_heatmap != undefined){
							legend_heatmap.remove();
						}
						if(map.hasLayer(layerIsoline)){
							map.removeLayer(layerIsoline);
						}
						if(legend_isoline != undefined){
							legend_isoline.remove();
						}
						if(map.hasLayer(timedimension)){
							map.removeLayer(timedimension);
						}
						if(map.hasLayer(flechas)){
							map.removeLayer(flechas);
						}
						
						if (!$.isEmptyObject(array_qual_data_values_p) /*|| array_qual_data_values_p != undefined*/){


							// Agrega layer Heatmap al mapa
							heatmapLayer.addTo(map);
							timedimension.addTo(map);

							if(array_qual_data_values_p != null){

								map.removeLayer(heatmapLayer);

								var array_data_qual = [];

								var array_cont = [];

								if(array_qual_data_values_p != null && array_qual_data_values_p[fecha] != undefined 
								&& array_qual_data_values_p[fecha] && air_quality_variable != undefined){
									$.each(array_qual_data_values_p[fecha], function(key, value) {
										var array_latlon = key.split(":");
										var lat = array_latlon[0];
										var lon = array_latlon[1];
										var cont = value[time_hora];

										array_cont.push(value[time_hora]);

										if(cont >= min_heatmap /*&& cont <= max_heatmap*/){
											array_data_qual.push({lat: lat, lon: lon, cont: cont});
										}
									});

									var max_heatmap = Math.max.apply(Math, array_cont);

									if(!$.isEmptyObject(array_alerts_qual)){

										// configurar gradiente con: 
										var array_alerts_qual_heatmap_map_ranges = [];

										$.each(array_alerts_qual, function(key, value) {

											var valueToPush = [];

											if(key == 0){ // primer loop
												valueToPush["color"] = value.color;
												valueToPush["range"] = 0;
												array_alerts_qual_heatmap_map_ranges.push(valueToPush);
											} else if(key === array_alerts_qual.length - 1){ // último loop
												if(value.value < max_heatmap){
													valueToPush["color"] = value.color;
													valueToPush["range"] = value.value;
													array_alerts_qual_heatmap_map_ranges.push(valueToPush);
													var valueToPush = [];
													valueToPush["color"] = value.color;
													valueToPush["range"] = max_heatmap;
													array_alerts_qual_heatmap_map_ranges.push(valueToPush);
												} else {
													valueToPush["color"] = value.color;
													valueToPush["range"] = max_heatmap;
													array_alerts_qual_heatmap_map_ranges.push(valueToPush);
												}
											} else {
												valueToPush["color"] = value.color;
												valueToPush["range"] = value.value;
												array_alerts_qual_heatmap_map_ranges.push(valueToPush);
											}

										});


										// Pasar los rangos a porcentajes para la gradiente de heatmapLayer
										var array_alerts_qual_heatmap_map_ranges_percent = [];
										$.each(array_alerts_qual_heatmap_map_ranges, function(key, value) {

											if(value.range < array_alerts_qual_heatmap_map_ranges[array_alerts_qual_heatmap_map_ranges.length - 1].range){
												var percent = ( (value.range * 100) / array_alerts_qual_heatmap_map_ranges[array_alerts_qual_heatmap_map_ranges.length - 1].range ) / 100;
												percent = (percent > 1) ? 1.0 : percent;
												array_alerts_qual_heatmap_map_ranges_percent[percent] = value.color;
											}

										});

										// Actualizar la gradiente de heatmapLayer
										var update_array_alerts_qual_heatmap_map_ranges = heatmapLayer._heatmap.configure({
											gradient: array_alerts_qual_heatmap_map_ranges_percent
										});

									} else {

										// configurar gradiente con: 

										var array_alerts_qual_heatmap_map_ranges = [];

										$.each(array_no_alerts_gradients, function(key, value) {

											var valueToPush = [];
											if(key == 0){ // primer loop
												valueToPush["color"] = value.color;
												valueToPush["range"] = 0;
												array_alerts_qual_heatmap_map_ranges.push(valueToPush);
											} else if(key === array_no_alerts_gradients.length - 1){ // último loop
												if(value.value < max_heatmap){
													valueToPush["color"] = value.color;
													valueToPush["range"] = value.value;
													array_alerts_qual_heatmap_map_ranges.push(valueToPush);
													var valueToPush = [];
													valueToPush["color"] = value.color;
													valueToPush["range"] = max_heatmap;
													array_alerts_qual_heatmap_map_ranges.push(valueToPush);
												} else {
													valueToPush["color"] = value.color;
													valueToPush["range"] = max_heatmap;
													array_alerts_qual_heatmap_map_ranges.push(valueToPush);
												}
											} else {
												valueToPush["color"] = value.color;
												valueToPush["range"] = value.value;
												array_alerts_qual_heatmap_map_ranges.push(valueToPush);
											}

										});


										// Pasar los rangos a porcentajes para la gradiente de heatmapLayer
										var array_alerts_qual_heatmap_map_ranges_percent = [];
										$.each(array_alerts_qual_heatmap_map_ranges, function(key, value) {

											if(value.range < array_alerts_qual_heatmap_map_ranges[array_alerts_qual_heatmap_map_ranges.length - 1].range){
												var percent = ( (value.range * 100) / array_alerts_qual_heatmap_map_ranges[array_alerts_qual_heatmap_map_ranges.length - 1].range ) / 100;
												percent = (percent > 1) ? 1.0 : percent;
												array_alerts_qual_heatmap_map_ranges_percent[percent] = value.color;
											}

										});

										// Actualizar la gradiente de heatmapLayer
										var update_array_alerts_qual_heatmap_map_ranges = heatmapLayer._heatmap.configure({
											gradient: array_alerts_qual_heatmap_map_ranges_percent
										});

									}

								} else {
									// Si array_qual_data_values_p no tiene datos asociados a la fecha consultada,
									// llena con datos seteados en "0" array_data_qual, que es el arreglo de datos
									// para la capa HeatmapLayer.
									array_data_qual.push({lat: "0", lon: "0", cont: "0"});
								}


								if(max_heatmap != undefined){
									heatmapLayer.setData({
										min: min_heatmap,
										max: max_heatmap,
										data: array_data_qual
									})

									heatmapLayer.addTo(map);
								}
								

								if(array_qual_data_values_p != null && array_qual_data_values_p[fecha] != undefined 
								&& array_qual_data_values_p[fecha] && air_quality_variable != undefined){

									// Leyenda para capa Heatmap
									legend_heatmap = L.control({position: 'topright'});
									legend_heatmap.onAdd = function (map) {
										var div = L.DomUtil.create('div', 'info legend legend_heatmap fixed_width');
										div.innerHTML += '<strong>'+air_quality_variable.name+'</strong><br><br>';				
										Object.keys(legend_ranges_heatmap).reverse().forEach(function(index){
											div.innerHTML += '<div class=""><i style="background:' + legend_ranges_heatmap[index] + '"></i> ' + index + ' (' + unit_qual.nombre + ')' + '</div>';
										});
										return div;
									};

									legend_heatmap.addTo(map);

									// Check checkbox "Leyenda Variable de Calidad del aire"
									$('#mapa > div.leaflet-control-container > div.leaflet-top.leaflet-left > div.leaflet-control-layers.leaflet-control > form > div.leaflet-control-layers-overlays > label:nth-child(1) > div > input').prop('checked', true);

								}

								timedimension.on('timeload', function(time){

									map.removeLayer(heatmapLayer);

									var date = new Date(map.timeDimension.getCurrentTime()).toISOString();
									var fecha = date.substring(0, 10); 			// Ej: 2020-01-01
									var hora = date.substring(11, 16); 			// Ej: 00:00
									var time_hora = "time_" + hora.substr(0,2); // Ej: time_00
									var array_data_qual = [];

									var array_cont = [];

									// Si array_qual_data_values_p tiene datos asociados a la fecha consultada, muestra sus datos en el mapa
									if(array_qual_data_values_p != null && array_qual_data_values_p[fecha]){

										$.each(array_qual_data_values_p[fecha], function(key, value) {
											var array_latlon = key.split(":");
											var lat = array_latlon[0];
											var lon = array_latlon[1];
											var cont = value[time_hora];

											array_cont.push(value[time_hora]);

											if(cont >= min_heatmap /*&& cont <= max_heatmap*/){
												array_data_qual.push({lat: lat, lon: lon, cont: cont});
											}
										});

										var max_heatmap = Math.max.apply(Math, array_cont);

										if(!$.isEmptyObject(array_alerts_qual)){

											// configurar gradiente con: 
											var array_alerts_qual_heatmap_map_ranges = [];

											$.each(array_alerts_qual, function(key, value) {

												var valueToPush = [];
												if(key == 0){ // primer loop
													valueToPush["color"] = value.color;
													valueToPush["range"] = 0;
													array_alerts_qual_heatmap_map_ranges.push(valueToPush);
												} else if(key === array_alerts_qual.length - 1){ // último loop
													if(value.value < max_heatmap){
														valueToPush["color"] = value.color;
														valueToPush["range"] = value.value;
														array_alerts_qual_heatmap_map_ranges.push(valueToPush);
														var valueToPush = [];
														valueToPush["color"] = value.color;
														valueToPush["range"] = max_heatmap;
														array_alerts_qual_heatmap_map_ranges.push(valueToPush);
													} else {
														valueToPush["color"] = value.color;
														valueToPush["range"] = max_heatmap;
														array_alerts_qual_heatmap_map_ranges.push(valueToPush);
													}
												} else {
													valueToPush["color"] = value.color;
													valueToPush["range"] = value.value;
													array_alerts_qual_heatmap_map_ranges.push(valueToPush);
												}

											});

											// Pasar los rangos a porcentajes para la gradiente de heatmapLayer
											var array_alerts_qual_heatmap_map_ranges_percent = [];
											$.each(array_alerts_qual_heatmap_map_ranges, function(key, value) {

												if(value.range < array_alerts_qual_heatmap_map_ranges[array_alerts_qual_heatmap_map_ranges.length - 1].range){
													var percent = ( (value.range * 100) / array_alerts_qual_heatmap_map_ranges[array_alerts_qual_heatmap_map_ranges.length - 1].range ) / 100;
													percent = (percent > 1) ? 1.0 : percent;
													array_alerts_qual_heatmap_map_ranges_percent[percent] = value.color;
												}

											});

											// Actualizar la gradiente de heatmapLayer
											var update_array_alerts_qual_heatmap_map_ranges = heatmapLayer._heatmap.configure({
												gradient: array_alerts_qual_heatmap_map_ranges_percent
											});

										} else {

											// configurar gradiente con: 
											var array_alerts_qual_heatmap_map_ranges = [];

											$.each(array_no_alerts_gradients, function(key, value) {

												var valueToPush = [];

												if(key == 0){ // primer loop
													valueToPush["color"] = value.color;
													valueToPush["range"] = 0;
													array_alerts_qual_heatmap_map_ranges.push(valueToPush);
												} else if(key === array_no_alerts_gradients.length - 1){ // último loop
													if(value.value < max_heatmap){
														valueToPush["color"] = value.color;
														valueToPush["range"] = value.value;
														array_alerts_qual_heatmap_map_ranges.push(valueToPush);
														var valueToPush = [];
														valueToPush["color"] = value.color;
														valueToPush["range"] = max_heatmap;
														array_alerts_qual_heatmap_map_ranges.push(valueToPush);
													} else {
														valueToPush["color"] = value.color;
														valueToPush["range"] = max_heatmap;
														array_alerts_qual_heatmap_map_ranges.push(valueToPush);
													}
												} else {
													valueToPush["color"] = value.color;
													valueToPush["range"] = value.value;
													array_alerts_qual_heatmap_map_ranges.push(valueToPush);
												}

											});

											// Pasar los rangos a porcentajes para la gradiente de heatmapLayer
											var array_alerts_qual_heatmap_map_ranges_percent = [];
											$.each(array_alerts_qual_heatmap_map_ranges, function(key, value) {
												if(value.range < array_alerts_qual_heatmap_map_ranges[array_alerts_qual_heatmap_map_ranges.length - 1].range){
													var percent = ( (value.range * 100) / array_alerts_qual_heatmap_map_ranges[array_alerts_qual_heatmap_map_ranges.length - 1].range ) / 100;
													percent = (percent > 1) ? 1.0 : percent;
													array_alerts_qual_heatmap_map_ranges_percent[percent] = value.color;
												}
											});

											// Actualizar la gradiente de heatmapLayer
											var update_array_alerts_qual_heatmap_map_ranges = heatmapLayer._heatmap.configure({
												gradient: array_alerts_qual_heatmap_map_ranges_percent
											});

										}

									} else {
										// Si array_qual_data_values_p no tiene datos asociados a la fecha consultada,
										// llena con datos seteados en "0" array_data_qual, que es el arreglo de datos
										// para la capa HeatmapLayer.
										array_data_qual.push({lat: "0", lon: "0", cont: "0"});
									}

									if(max_heatmap != undefined){
										heatmapLayer.setData({
											min: min_heatmap,
											max: max_heatmap,
											data: array_data_qual
										})

										heatmapLayer.addTo(map);
									}
									
									if(array_qual_data_values_p != null && array_qual_data_values_p[fecha] != undefined 
									&& array_qual_data_values_p[fecha] && air_quality_variable != undefined){

										// Leyenda para capa Heatmap
										legend_heatmap.remove();
										
										// Leyenda para capa Heatmap
										legend_heatmap = L.control({position: 'topright'});
										legend_heatmap.onAdd = function (map) {
											var div = L.DomUtil.create('div', 'info legend legend_heatmap fixed_width');
											div.innerHTML += '<strong>'+air_quality_variable.name+'</strong><br><br>';				
											Object.keys(legend_ranges_heatmap).reverse().forEach(function(index){
												div.innerHTML += '<div class=""><i style="background:' + legend_ranges_heatmap[index] + '"></i> ' + index + ' (' + unit_qual.nombre + ')' + '</div>';
											});
											return div;
										};

										legend_heatmap.addTo(map);

									} else {
										// Si checkbox "Leyenda de Calidad del aire" está checkeado, agregar legend
										if($('#mapa > div.leaflet-control-container > div.leaflet-top.leaflet-left > div.leaflet-control-layers.leaflet-control > form > div.leaflet-control-layers-overlays > label:nth-child(1) > div > input').is(':checked')){
											legend_heatmap.addTo(map);
										}
									}

									this._update();

								});


							}

							if (!$.isEmptyObject(array_meteo_data_values_p)){

								if(map.hasLayer(flechas)){
									map.removeLayer(flechas);
								}
								if(map.hasLayer(layerIsoline)){
									map.removeLayer(layerIsoline);
								}

								// Creación de objetos para cada flecha del layer de Arrow		
								var arrayLayers = [];
								var array_data_meteo = [];

								// Si hay datos para la variable de tipo "Meteorológica" seleccionada al ingresar al Sector
								// en la primera fecha de consulta, muestra sus datos en el mapa
								if(array_meteo_data_values_p != null){

									if(array_meteo_data_values_p[fecha]){

										// Si la variable meteorológica inicial es de tipo Velocidad del viento (1) o Dirección del viento (2)
										if(meteorological_variable.id == 1 || meteorological_variable.id == 2){

											$.each(array_meteo_data_values_p[fecha], function(key, value) {
												var array_latlon = key.split(":");
												var lat = array_latlon[0];
												var lon = array_latlon[1];

												if(value[time_hora]["velocity"] != null && value[time_hora]["direction"] != null){
													var velocity = value[time_hora]["velocity"] * 10;
													var direction = value[time_hora]["direction"];
													array_data_meteo.push({
														latlng: L.latLng(lat, lon),
														degree: (direction > 0.5) ? Math.round(direction) : direction,
														distance: velocity,
														title: "Demo"
													});
												} else {
													array_data_meteo.push({
														latlng: L.latLng("0", "0"),
														degree: 0,
														distance: 0,
														title: "Demo"
													});
												}

											});

											array_data_meteo.forEach(function(obj, index){

												var windlayer = new L.Arrow(obj, {
													distanceUnit: 'px', // El largo de la flecha puede representarse en px o kilómetros en el mapa
													arrowheadLength: 6,
													arrowheadClosingLine: false,
													//stretchFactor: 0.8,
													weight: 1,
													color: '#000',
													popupContent: function(data) {

														var point = map.latLngToContainerPoint(data.latlng);
														var html_popup = '<table style="width: 100%; font-size:15px;">';

														if(map.hasLayer(heatmapLayer) && !$.isEmptyObject(array_qual_data_values_p)){
															var value = heatmapLayer._heatmap.getValueAt({
																x: point.x,
																y: point.y
															});
															html_popup += '<tr><td><img heigth="25" width="25" src="/assets/images/air_variables/'+air_quality_variable.icono+'"></td><td><strong> &nbsp; '+air_quality_variable.name+':</strong> '+value.toFixed(4)+' ('+ unit_qual.nombre +')</td></tr>';
														}

														html_popup += '<tr><td><img heigth="25" width="25" src="/assets/images/air_variables/air_wind_speed.png"></td><td><strong> &nbsp; ' + 'Velocidad del viento' + ':</strong> '+data.distance.toFixed(4)+' ('+ unit_meteo_vel.nombre +')</td></tr>';
														html_popup += '<tr><td><img heigth="25" width="25" src="/assets/images/air_variables/air_wind_direction.png"></td><td><strong> &nbsp; ' + 'Dirección del viento' + ':</strong> '+data.degree+' ('+ unit_meteo_dir.nombre +')</td></tr></table>';
														return html_popup;

													},
												});

												arrayLayers.push(windlayer);

											});

											flechas = L.layerGroup(arrayLayers);
											map.addLayer(flechas, true);

											// Uncheck checkbox "Leyenda Variable Meteorológica"
											$('#mapa > div.leaflet-control-container > div.leaflet-top.leaflet-left > div.leaflet-control-layers.leaflet-control > form > div.leaflet-control-layers-overlays > label:nth-child(2) > div > input').prop('checked', false);

										} else {

											var features = [];

											var meteo_data_cont = 0;
											var first_lat = 0;
											var first_lon = 0;
											var last_lat = 0;
											var last_lon = 0;

											$.each(array_meteo_data_values_p[fecha], function(key, value) {

												var array_latlon = key.split(":");
												var lat = array_latlon[0];
												var lon = array_latlon[1];
												var cont = value[time_hora];
												features.push({
													type: 'Feature',
													geometry: {
														type: 'Point',
														coordinates: [parseFloat(lon), parseFloat(lat)]
													},
													properties:{
														z: parseFloat(cont)
													}
												});

												meteo_data_cont++;

												if(meteo_data_cont == 1){
													first_lat = parseFloat(lat);
													first_lon = parseFloat(lon);
												} else if(meteo_data_cont == Object.keys(array_meteo_data_values_p[fecha]).length){
													last_lat = parseFloat(lat);
													last_lon = parseFloat(lon);
												}

											});

											var points = {
												type: 'FeatureCollection',
												features: features
											}

											var crimeGridStyle = {
												style: function style(feature) {
													return {
														//fillColor: getColor(feature.properties.z),
														fillColor: "#FFF",
														weight: 2,
														opacity: 1,
														color: get_isoline_colors(feature.properties.z, array_alerts_meteo_legend_map_ranges),
														//dashArray: "3",
														fillOpacity: 0.4,
													};
												},
												onEachFeature: function (feature, layer) {
													layer.on('click', function (e) {
														var point = map.latLngToContainerPoint(e.latlng);
														var html_popup = '<table style="width: 100%; font-size:15px;">';
														if(map.hasLayer(heatmapLayer) && !$.isEmptyObject(array_qual_data_values_p)){
															var value = heatmapLayer._heatmap.getValueAt({
																x: point.x,
																y: point.y
															});
															html_popup += '<tr><td><img heigth="25" width="25" src="/assets/images/air_variables/'+air_quality_variable.icono+'"></td><td><strong> &nbsp; '+air_quality_variable.name+':</strong> '+value.toFixed(4)+' ('+ unit_qual.nombre +')</td></tr>';
														}
														html_popup += '<tr><td><img heigth="25" width="25" src="/assets/images/air_variables/'+meteorological_variable.icono+'"></td><td><strong> &nbsp; ' + meteorological_variable.name + ':</strong> '+feature.properties.z.toFixed(4)+' ('+ unit_meteo.nombre +')</td></tr>';
														layer.bindPopup(html_popup);
													});
												}
											};

											var breaks = [];
											for(i = 0; i <= 100; i = i + 1){
												breaks.push(i);
											}
											var isolined = turf.isolines(points, 'z', 100, breaks); // https://github.com/turf-junkyard/turf-isolines
											layerIsoline = new L.geoJson(isolined, crimeGridStyle).addTo(map);

											// Leyenda para capa isoline
											legend_isoline = L.control({position: 'topright'});
											legend_isoline.onAdd = function (map) {
												var div = L.DomUtil.create('div', 'info legend legend_isoline fixed_width');
												div.innerHTML += '<strong>'+meteorological_variable.name+'</strong><br><br>';				
												Object.keys(legend_ranges_isoline).reverse().forEach(function(index){
													div.innerHTML += '<div class=""><i style="background:' + legend_ranges_isoline[index] + '"></i> ' + index + ' (' + unit_meteo.nombre + ')' + '</div>';
												});
												div.innerHTML += '</div>';
												return div;
											};
											legend_isoline.addTo(map);

											// Check checkbox "Leyenda Variable Meteorológica"
											$('#mapa > div.leaflet-control-container > div.leaflet-top.leaflet-left > div.leaflet-control-layers.leaflet-control > form > div.leaflet-control-layers-overlays > label:nth-child(2) > div > input').prop('checked', true);

										}

									} else {

										if(meteorological_variable.id != 1 || meteorological_variable.id != 2){
											// Leyenda para capa isoline
											legend_isoline = L.control({position: 'topright'});
											legend_isoline.onAdd = function (map) {
												var div = L.DomUtil.create('div', 'info legend legend_isoline fixed_width');
												div.innerHTML += '<strong>'+meteorological_variable.name+'</strong><br><br>';				
												Object.keys(legend_ranges_isoline).reverse().forEach(function(index){
													div.innerHTML += '<div class=""><i style="background:' + legend_ranges_isoline[index] + '"></i> ' + index + ' (' + unit_meteo.nombre + ')' + '</div>';
												});
												div.innerHTML += '</div>';
												return div;
											};
											legend_isoline.addTo(map);
										}

									}

								}

							} else {
								// Uncheck checkbox "Leyenda Variable Meteorológica"
								$('#mapa > div.leaflet-control-container > div.leaflet-top.leaflet-left > div.leaflet-control-layers.leaflet-control > form > div.leaflet-control-layers-overlays > label:nth-child(2) > div > input').prop('checked', false);
							}

							timedimension._update();

						} else if (!$.isEmptyObject(array_meteo_data_values_p)){

							if(map.hasLayer(heatmapLayer)){
								map.removeLayer(heatmapLayer);
							}
							if(map.hasLayer(timedimension)){
								map.removeLayer(timedimension);
							}
							if(map.hasLayer(flechas)){
								map.removeLayer(flechas);
							}
							if(map.hasLayer(layerIsoline)){
								map.removeLayer(layerIsoline);
							}

							timedimension.addTo(map);

							// Creación de objetos para cada flecha del layer de Leaflet Arrow
							var arrayLayers = [];
							var array_data_meteo = [];

							// Si array_meteo_data_values_p tiene datos asociados a la fecha consultada, muestra sus datos en el mapa
							if(array_meteo_data_values_p[fecha]){
								
								if(meteorological_variable.id == 1 || meteorological_variable.id == 2){

									$.each(array_meteo_data_values_p[fecha], function(key, value) {
										var array_latlon = key.split(":");
										var lat = array_latlon[0];
										var lon = array_latlon[1];
										
										if(value[time_hora]["velocity"] != null && value[time_hora]["direction"] != null){
											var velocity = value[time_hora]["velocity"] * 10;
											var direction = value[time_hora]["direction"];
											array_data_meteo.push({
												latlng: L.latLng(lat, lon),
												degree: (direction > 0.5) ? Math.round(direction) : direction,
												distance: velocity,
												title: "Demo"
											});
										} else {
											array_data_meteo.push({
												latlng: L.latLng("0", "0"),
												degree: 0,
												distance: 0,
												title: "Demo"
											});
										}

									});

									array_data_meteo.forEach(function(obj, index){

										var windlayer = new L.Arrow(obj, {
											distanceUnit: 'px', // El largo de la flecha puede representarse en px o kilómetros en el mapa
											arrowheadLength: 6,
											arrowheadClosingLine: false,
											//stretchFactor: 0.8,
											weight: 1,
											color: '#000',
											popupContent: function(data) {
												var html_popup = '<table style="width: 100%; font-size:15px;">';
												html_popup += '<tr><td><img heigth="25" width="25" src="/assets/images/air_variables/air_wind_speed.png"></td><td><strong> &nbsp; ' + 'Velocidad del viento' + ':</strong> '+data.distance.toFixed(4)+' ('+ unit_meteo_vel.nombre +')</td></tr>';
												html_popup += '<tr><td><img heigth="25" width="25" src="/assets/images/air_variables/air_wind_direction.png"></td><td><strong> &nbsp; ' + 'Dirección del viento' + ':</strong> '+data.degree+' ('+ unit_meteo_dir.nombre +')</td></tr></table>';
												return html_popup;
											},
										});

										arrayLayers.push(windlayer);

									});

									flechas = L.layerGroup(arrayLayers);
									map.addLayer(flechas, true);

								} else {

									var features = [];

									var meteo_data_cont = 0;
									var first_lat = 0;
									var first_lon = 0;
									var last_lat = 0;
									var last_lon = 0;

									$.each(array_meteo_data_values_p[fecha], function(key, value) {

										var array_latlon = key.split(":");
										var lat = array_latlon[0];
										var lon = array_latlon[1];
										var cont = value[time_hora];
										features.push({
											type: 'Feature',
											geometry: {
												type: 'Point',
												coordinates: [parseFloat(lon), parseFloat(lat)]
											},
											properties:{
												z: parseFloat(cont)
											}
										});

										meteo_data_cont++;

										if(meteo_data_cont == 1){
											first_lat = parseFloat(lat);
											first_lon = parseFloat(lon);
										} else if(meteo_data_cont == Object.keys(array_meteo_data_values_p[fecha]).length){
											last_lat = parseFloat(lat);
											last_lon = parseFloat(lon);
										}

									});

									var points = {
										type: 'FeatureCollection',
										features: features
									}

									var crimeGridStyle = {
										style: function style(feature) {
											return {
												//fillColor: getColor(feature.properties.z),
												fillColor: "#FFF",
												weight: 2,
												opacity: 1,
												color: get_isoline_colors(feature.properties.z, array_alerts_meteo_legend_map_ranges),
												//dashArray: "3",
												fillOpacity: 0.4,
											};
										},
										onEachFeature: function (feature, layer) {
											layer.on('click', function (e) {
												var html_popup = '<table style="width: 100%; font-size:15px;">';
												html_popup += '<tr><td><img heigth="25" width="25" src="/assets/images/air_variables/'+meteorological_variable.icono+'"></td><td><strong> &nbsp; ' + meteorological_variable.name + ':</strong> '+feature.properties.z.toFixed(4)+' ('+ unit_meteo.nombre +')</td></tr>';
												layer.bindPopup(html_popup);
											});
										}
									};

									var breaks = [];
									for(i = 0; i <= 100; i = i + 1){
										breaks.push(i);
									}
									var isolined = turf.isolines(points, 'z', 100, breaks); // https://github.com/turf-junkyard/turf-isolines
									layerIsoline = L.geoJson(isolined, crimeGridStyle).addTo(map);

									// Leyenda para capa isoline
									legend_isoline = L.control({position: 'topright'});
									legend_isoline.onAdd = function (map) {
										var div = L.DomUtil.create('div', 'info legend legend_isoline fixed_width');
										div.innerHTML += '<strong>'+meteorological_variable.name+'</strong><br><br>';				
										Object.keys(legend_ranges_isoline).reverse().forEach(function(index){
											div.innerHTML += '<div class=""><i style="background:' + legend_ranges_isoline[index] + '"></i> ' + index + ' (' + unit_meteo.nombre + ')' + '</div>';
										});
										div.innerHTML += '</div>';
										return div;
									};
									legend_isoline.addTo(map);

									// Check checkbox "Leyenda Variable Meteorológica"
									$('#mapa > div.leaflet-control-container > div.leaflet-top.leaflet-left > div.leaflet-control-layers.leaflet-control > form > div.leaflet-control-layers-overlays > label:nth-child(2) > div > input').prop('checked', true);
									
								}
								
							}

							timedimension._update();

							// Uncheck checkbox "Leyenda Variable de Calidad del aire"
							$('#mapa > div.leaflet-control-container > div.leaflet-top.leaflet-left > div.leaflet-control-layers.leaflet-control > form > div.leaflet-control-layers-overlays > label:nth-child(1) > div > input').prop('checked', false);

						} else {

							// Uncheck checkbox "Leyenda Variable de Calidad del aire"
							$('#mapa > div.leaflet-control-container > div.leaflet-top.leaflet-left > div.leaflet-control-layers.leaflet-control > form > div.leaflet-control-layers-overlays > label:nth-child(1) > div > input').prop('checked', false);
							// Uncheck checkbox "Leyenda Variable Meteorológica"
							$('#mapa > div.leaflet-control-container > div.leaflet-top.leaflet-left > div.leaflet-control-layers.leaflet-control > form > div.leaflet-control-layers-overlays > label:nth-child(2) > div > input').prop('checked', false);
						}

						appLoader.hide();
						
					}

				});


			});


			/* Gráficos, CalHeatmaps y AppTables */
																$('#receptor').val(4).trigger('change');
							
			var id_receptor = 4;

			/* Variable Calidad del Aire */

			// Gráfico
			var qual_receptor_data = []; // Datos
			var qual_receptor_categories = []; // Categorías
			var chart_qual_ranges = []; // Rangos
			
			// CalHeatMap
			var calheatmap_data_qual = []; // Datos
			var calheatmap_data_qual_final = []; 
			var calheatmap_qual_ranges = []; // Rangos

			// Colores y rangos de Alertas CalHeatMap
			var array_alerts_qual_calheatmap_colors = ["#6df257","#f6fa3a","#faa500","#ed1515","#8027f2"];
			var array_alerts_qual_calheatmap_ranges = ["100","200","300","400"];


			// Datos pronóstico 72 hrs
			var array_receptor_qual_variable_values_p = {!!$array_receptor_qual_variable_values_p !!};
            var array_receptor_qual_variable_ranges_p = {!!$array_receptor_qual_variable_ranges_p !!};
			var array_receptor_qual_variable_formatted_dates = {!!$array_receptor_qual_variable_formatted_dates!!};


			// Alerta (colores y valores mínimos)
			var array_alerts_qual_chart = [{"color":"#6df257","value":"100"},{"color":"#f6fa3a","value":"200"},{"color":"#faa500","value":"300"},{"color":"#ed1515","value":"400"},{"color":"#8027f2"}];

			Object.keys(array_receptor_qual_variable_values_p).forEach(function(date, idx, array) {
				var values_p = array_receptor_qual_variable_values_p[date];

				var datetime = new Date(date);
				var day_name = array_days_name[datetime.getUTCDay()];
				var day_short_name = array_days_short_name[datetime.getUTCDay()];

				Object.keys(values_p).forEach(function(time) {
					var value_p = parseFloat(values_p[time]);

					var hour = time.substring(5, 7);

					if(idx !== array.length - 1){ 
						qual_receptor_data.push([day_name+" "+array_receptor_qual_variable_formatted_dates[date]+" "+hour+" hrs", value_p]);
						qual_receptor_categories.push(day_short_name+" "+hour+" hrs");
					}
					var timestamp = new Date(date+" "+hour+":00:00").getTime()/1000;
					calheatmap_data_qual[timestamp] = value_p;

					if(array_alerts_qual_calheatmap_ranges.includes(value_p.toString())){
						calheatmap_data_qual_final[timestamp] = value_p + 1;
					} else {
						calheatmap_data_qual_final[timestamp] = value_p;
					}

				});
			});

			Object.keys(array_receptor_qual_variable_ranges_p).forEach(function(date, idx, array) {
				var ranges_p = array_receptor_qual_variable_ranges_p[date];

				var datetime = new Date(date);
				var day_name = array_days_name[datetime.getUTCDay()];
				var day_short_name = array_days_short_name[datetime.getUTCDay()];

				Object.keys(ranges_p).forEach(function(time) {
					var range_p = ranges_p[time];

					var hour = time.substring(5, 7);
					var timestamp = new Date(date+" "+hour+":00:00").getTime()/1000;
					
					if (idx !== array.length - 1){ 
						chart_qual_ranges[calheatmap_data_qual[timestamp]] = range_p;
					}
					calheatmap_qual_ranges[timestamp] = range_p;
				});
			});


			$('#chart_qual').highcharts({
				chart: {
					type: 'area',
					zoomType: 'x',
					panning: true,
					panKey: 'shift',
					/*scrollablePlotArea: {
						minWidth: 600
					},*/
					events: {
						load: function(){
							if (this.options.chart.forExport) {
								Highcharts.each(this.series, function (series) {
									series.update({
										dataLabels: {
											enabled: true,
										},
									}, false);
								});
								this.redraw();
							}
						}
					}
				},

				title: {
					text: (air_quality_variable != null) ? air_quality_variable.name_unit_type + ' de ' + air_quality_variable.sigla + ' pronosticada: 24 horas día anterior y próximas 48 horas' : 'Variable de Calidad del aire'
				},

				credits: {
					enabled: false
				},

				xAxis: {
					//labels: {
					//	format: '{value} hrs',
					//},
					minRange: 5,
					title: {
						text: 'Horas'
					},
				},

				yAxis: {
					startOnTick: true,
					endOnTick: false,
					maxPadding: 0.35,
					title: {
						text: null
					},
					labels: {
						//format: '{value} ' + '(' + unit_qual.nombre + ')'
						//format: "{value:,." + decimal_numbers + "f}" + ' (' + unit_qual.nombre + ')'
						formatter: function(){
							if(air_quality_variable != null){
								return numberFormat(this.value, decimal_numbers, decimals_separator, thousands_separator) + ' (' + unit_qual.nombre + ')';
							} else {
								return '';
							}
							
						},
					},
					min: 0,
					max: 500
				},

				tooltip: {
					useHTML: true,
					//headerFormat: '<span style="font-size: 10px;">{point.key}</span> <br>',
					//pointFormat: '<span style="color:{point.color}">\u25CF</span> ' + 'Concentración: ' + '{point.y} ' + unit_qual.nombre,
					formatter: function() {
						
						if(air_quality_variable){
							return  '<span style="font-size: 10px;">' + this.points[0].key + '</span> <br>'
								+ '<span style="color:' + this.points[0].color + '">\u25CF</span> '  + unit_type_qual + ': '
								+ chart_qual_ranges[this.points[0].y] + " (" + unit_qual.nombre + ")";
						} else {
							return  'Sin información disponible';
						}

					},
					shared: true
				},

				exporting: {
					filename: (air_quality_variable) ? air_quality_variable.name_unit_type + ' de ' + air_quality_variable.sigla + ' pronosticada: 24 horas día anterior y próximas 48 horas' : 'Variable de Calidad del aire',
					buttons: {
						contextButton: {
							menuItems: [{
								text: "Exportar a imagen (PNG)",
								onclick: function() {
									this.exportChart();
								},
								separator: false
							}]
						}
					},
					chartOptions: {
						xAxis: [{
							categories: qual_receptor_categories,
							labels: {
								style: {
									fontSize: '9px'
								},
								tickInterval: 1
							}
						}]
					},
					sourceWidth: 1200
				},

				plotOptions: {
					area: {
						//size: 80,
						allowPointSelect: true,
						cursor: 'pointer',
						dataLabels: {
							enabled: false,
							//format: '<b>{point.name}</b>: {point.y}',
							formatter: function(){
								return chart_qual_ranges[this.y];
							},
							style: {
								color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black',
								fontSize: "9px",
								distance: -30
							},
							crop: false
						},
						showInLegend: true,
						format: "{y:,." + decimal_numbers + "f}",
					}
				},

				legend: {
					enabled: false
				},

				series: [{
					accessibility: {
						keyboardNavigation: {
							enabled: false
						}
					},
					data: qual_receptor_data,
					//lineColor: Highcharts.getOptions().colors[1],
					//color: '#ff5454',
					fillOpacity: 0, // transparencia para el area
					name: '',
					/*marker: {
						enabled: false,
						fillColor: '#0cba00'
					},*/
					//threshold: null,
					/*zones: [{
						color: "#3beb4c",
						value: 0
					},{
						color: "#d7e810",
						value: 350
					},{
						color: "#ed780c",
						value: 500
					},{
						color: "#ff000f",
						value: 650
					},{
						color: "#990b93",
						value: 800
					},{
						color: "#990b93"
					}]*/
					zones: array_alerts_qual_chart
				},
				]

			});

			Highcharts.charts[0].xAxis[0].update({categories: qual_receptor_categories, labels: { style: { fontSize: '9px'}}, tickInterval: 1 }, true);

			// CalHeatMap
			// Configuración de variables para fecha de inicio del CalHeatmap
			var first_datetime = "{!!$first_datetime!!}";
			var date = first_datetime.substring(0, 10); 			// Ej: 2020-01-01
			var year = date.substring(0,4);
			var month =  parseInt(date.substring(5,7)) - 1;			// Puede ser del 1 al 12
			var day = parseInt(date.substring(8,10));				
			var hour = parseInt(first_datetime.substring(11, 13)); 	// Puede ser del 0 al 23

			
			
			var calheatmap_qual = new CalHeatMap();
			calheatmap_qual.init({
				itemSelector: "#calheatmap_qual",
				domain: "day",
				subDomain: "x_hour",
				range: 4, // en este caso la cantidad de días (puede ser el count del array de datos (por fecha))
				cellSize: 30, // el tamaño de cada celda de hora
				displayLegend: true,
				domainGutter: 10, // distancia entre días 
				tooltip: true,
				verticalOrientation: ($(window).width() < 1070) ? true : false,
				start: new Date(year, month, day, hour),
				//domainLabelFormat: "%d-%m-%Y",// dependerá del formato de fecha del proyecto
				domainLabelFormat: array_format_date_calheatmap[AppHelper.settings.dateFormat],
				subDomainTextFormat: "%H",
				subDomainTitleFormat: {
					empty: "Fuera del rango de pronóstico",
					//filled: "{date}, la concentración de "+ air_quality_variable.sigla +" se estima que será de {count} " + unit_qual.nombre
					filled: "{date}"
				},
				subDomainDateFormat: function(date) {
					var d = new Date(date);
					var h = d.getHours();
					h = ("0" + h).slice(-2);

					var datetime = d.getTime()/1000; // timestamp

					if(air_quality_variable){
						return "A las " + h + " horas, la concentración estimada de " + air_quality_variable.sigla +" será " + calheatmap_qual_ranges[datetime] + " (" + unit_qual.nombre + ")";
					} else {
						return "Sin información disponible"
					}
				
				},
				/*domainLabelFormat: function(date) {
					
					var d = new Date(date);
					//var datetime = d.getTime()/1000; // timestamp
					var y = d.getFullYear();
					var m = d.getMonth() + 1;
					var d = d.getDate();
					
					var formatted_date = d+"-"+m+"-"+y;
					return formatted_date;

				},*/
				itemName: [unit_qual.nombre, unit_qual.nombre],
				//legend: [0.0001, 0.0005, 0.0010, 0.0050], // sacar minimo y máximo y crear escala de colores en base a esos valores
				legend: array_alerts_qual_calheatmap_ranges,
				legendTitleFormat: {
					//lower: (array_alerts_qual_calheatmap_ranges.length > 0) ? "menos de {min} ({name})" : 'Sin información disponible',
					lower: (array_alerts_qual_calheatmap_ranges.length > 0) ? (Math.min.apply(Math, array_alerts_qual_calheatmap_ranges) > 0) ? "menos de {min} ({name})" : "menor o igual a {min} ({name})" : 'Sin información disponible',
					inner: "entre {down} y {up} ({name})",
					upper: "más de {max} ({name})"
				},
				legendHorizontalPosition: "center",
				legendMargin: [0, 0, 0, 0],
				data: calheatmap_data_qual_final,
				onComplete: function() { // https://php.developreference.com/article/19345650/cal-heatmap+-+legendColors+as+array+of+color+values%3F
					setTimeout(function(){
						/*['#ffadad','#ff9696','#ff8282','#fc6d6d','#ff5454','#f51818'].forEach(function(d,i){
							d3.selectAll("rect.r" + i).style("fill", d);
						});*/
						array_alerts_qual_calheatmap_colors.forEach(function(d,i){
							i++;
							d3.selectAll("div#calheatmap_qual rect.r" + i).style("fill", d);
							
							//$("div#calheatmap_qual rect").not(".r1").css("background-color", "#FFF"); 
							//d3.selectAll("div#calheatmap_qual rect:not(.r"+i+")").style("display", "none");
							//d3.selectAll("div#calheatmap_qual rect:not(.r"+i+")").style("display", "none");
							//
						});
						//$("div#calheatmap_qual rect").css("background-color", "#FFF");
						//d3.selectAll("div#calheatmap_qual rect:not(.r1)").style("display", "none");
						//d3.selectAll("div#calheatmap_qual rect:not(.r1)").style("fill", "#fff");
						
						//d3.selectAll("div#calheatmap_qual rect svg g rect:not(.r1)").text("");
						//$("li:not(.active)").css("background-color", "yellow" ); 
				
						//d3.selectAll("div#calheatmap_qual rect").style("fill", "#fff");
					}, 10);
				}
			});


			var id_air_quality_variable = (air_quality_variable) ? air_quality_variable.id : 0;
			$("#qual_receptor-table").appTable({
				source: '/api/list_data_variable/' + id_sector + "/" + id_receptor + "/" + id_air_quality_variable + "/3", // Modelo Numérico
				columns: [
					{title: "ID", "class": "text-right dt-head-center w50 hide"},
					{title: "Fecha", "class": "text-left dt-head-center", type: "extract-date"},
					{title: "Hora", "class": "text-left dt-head-center"},
					{title: "Alerta", "class": "text-center dt-head-center"},
					{title: "Rango", "class": "text-left dt-head-center"},
					{title: '<i class="fa fa-bars"></i>', "class": "text-center option no_breakline"},
					{title: '', "class": "hide"} // Columna reservada para el contenido del popover del plan de acción
				],
				rowCallback: function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
					var $html_action_plan = $(nRow).find('[data-toggle="popover"]');
					var html_action_plan_content = aData[6];
					$html_action_plan.popover(
						{
							container: 'body',
							trigger:'hover',
							placement: 'left',
							title: 'Plan de Acción',
							html:true,
							//content: $action_plan.attr("data-content")
							content: html_action_plan_content
						}
					);
				},
				order: [1, "asc"]

			});
		


			

			/* Variable Meteorológica */
			
			// Si la variable Meteorológica inicial es Velocidad del viento o Dirección del viento y hay datos para el receptor, Inicializar el Meteograma

			// Gráfico
			var vel_receptor_data = []; // Datos. Debe ser [[1,30.2],[3,234.6]] [velocidad, dirección] 
			var vel_receptor_categories = []; // Categorías
			var vel_receptor_categories_final = []; // Rangos
			var vel_receptor_categories_export = []; // Labels eje x en exportación

			// CalHeatMap
			var calheatmap_data_meteo = [];

			var chart_meteo_ranges = [];
			var calheatmap_meteo_ranges = [];

			// Datos pronóstico 72 hrs
			var array_receptor_meteo_data_values_p_vel = {!! $array_receptor_meteo_data_values_p_vel!!}
			var array_receptor_meteo_data_values_p_dir = {!!$array_receptor_meteo_data_values_p_dir !!}
			var array_receptor_meteo_data_ranges_p_vel ={!! $array_receptor_meteo_data_ranges_p_vel !!}
			var array_receptor_meteo_variable_formatted_dates = {!! $array_receptor_meteo_variable_formatted_dates!!}

			// Unidades de variables según configuración Unidades de Reporte
			var unit_meteo_vel = {"id":"26","id_tipo_unidad":"10","nombre":"m\/s","nombre_real":"Metros por segundo","indicador":null,"deleted":"0"};
			var unit_meteo_dir = {"id":"30","id_tipo_unidad":"11","nombre":"\u00b0","nombre_real":"Grados","indicador":null,"deleted":"0"};

			// Alerta (colores y valores mínimos)
			var array_alerts_meteo_chart = [{"color":"#c190e8","value":"2"},{"color":"#a656b3","value":"4"},{"color":"#7f37ab","value":"6"},{"color":"#501d78"}];

			if(meteorological_variable.id == 1 || meteorological_variable.id == 2){

				Object.keys(array_receptor_meteo_data_values_p_vel).forEach(function(date, idx, array) {
					var values_p = array_receptor_meteo_data_values_p_vel[date];

					var datetime = new Date(date);
					var day_name = array_days_name[datetime.getUTCDay()];
					var day_short_name = array_days_short_name[datetime.getUTCDay()];

					Object.keys(values_p).forEach(function(time) {
						var value_p = parseFloat(values_p[time]);

						var hour = time.substring(5, 7);

						if(idx !== array.length - 1){
							vel_receptor_categories.push(day_name+" "+array_receptor_meteo_variable_formatted_dates[date]+" "+hour+" hrs");
							vel_receptor_categories_final[day_name+" "+array_receptor_meteo_variable_formatted_dates[date]+" "+hour+" hrs"] = day_short_name+" "+hour+" hrs";
							vel_receptor_categories_export.push(day_short_name+" "+hour+" hrs");

							if(parseFloat(array_receptor_meteo_data_values_p_dir[date][time]) == 0 || value_p == 0){
								vel_receptor_data.push([0,0]);
							} else {
								vel_receptor_data.push([value_p, parseFloat(array_receptor_meteo_data_values_p_dir[date][time])]);
							}
						}
						
						var timestamp = new Date(date+" "+hour+":00:00").getTime()/1000;
						calheatmap_data_meteo[timestamp] = value_p;
					});
				});

				Object.keys(array_receptor_meteo_data_ranges_p_vel).forEach(function(date, idx, array) {
					var ranges_p = array_receptor_meteo_data_ranges_p_vel[date];

					var datetime = new Date(date);
					var day_name = array_days_name[datetime.getUTCDay()];
					var day_short_name = array_days_short_name[datetime.getUTCDay()];

					Object.keys(ranges_p).forEach(function(time) {
						var range_p = ranges_p[time];

						var hour = time.substring(5, 7);
						var timestamp = new Date(date+" "+hour+":00:00").getTime()/1000;
						
						if(idx !== array.length - 1){
							chart_meteo_ranges[calheatmap_data_meteo[timestamp]] = range_p;
						}
						calheatmap_meteo_ranges[timestamp] = range_p;
					});
				});


				$('#chart_meteo').highcharts({
					
					chart: {
						type: 'area',
						zoomType: 'x',
						panning: true,
						panKey: 'shift',
						/*scrollablePlotArea: {
							minWidth: 600
						},*/
						events: {
							load: function(){
								//Highcharts.charts[1].xAxis[0].update({categories: vel_receptor_categories, labels: { style: { fontSize: '9px'}}, tickInterval: 1}, true);
								
								if (this.options.chart.forExport) {
									Highcharts.each(this.series, function (series) {
										series.update({
											dataLabels: {
												enabled: true,
											}
										}, false);
									});

									if(this.xAxis){
										Highcharts.each(this.xAxis, function (xAxis) {
											xAxis.update({
												offset: 20
											}, false);
										});
									}

									this.redraw();
								}
							}
						}
					},

					title: {
						text: 'Velocidad y Dirección del Viento'
					},

					credits: {
						enabled: false
					},

					xAxis: {
						//type: 'datetime',
						//offset: 40,
						offset: 20,
						//minRange: 5,
						title: {
							text: 'Horas'
						},
						
						min: 0,
						max: 71,
						/*scrollbar: {
							enabled: true,
							showFull: true
						},*/
						//showFirstLabel: true
						labels: {
							formatter: function() {
								return vel_receptor_categories_final[this.value];
							},
						}
					},

					yAxis: {
						startOnTick: true,
						endOnTick: false,
						maxPadding: 0.35,
						title: {
							text: null
						},
						labels: {
							formatter: function(){
								return numberFormat(this.value, decimal_numbers, decimals_separator, thousands_separator) + ' (' + unit_meteo_vel.nombre + ')';
							},
						},
						min: 0,
						max: 50
					},

					tooltip: {
						useHTML: true,
						//headerFormat:'{point.key} <br>',
						//pointFormat: 'Concentración de {point.y} ug/m3.',
						//pointFormat: 'Velocidad ' + '{point.value} ' + '<br> ' + 'Dirección ' + '{point.direction}',
						formatter: function() {

							if(this.points[1]){
								return  '<span style="font-size:10px">' + this.points[0].key + '</span><br/>'
									+ '<span style="color:' + this.points[0].point.color + '">\u25CF</span> ' +  'Velocidad: ' + chart_meteo_ranges[this.points[0].y] + ' (' + unit_meteo_vel.nombre + ')' +
									'<br/>' + '<span style="color:' + this.points[1].point.color + '">\u25CF</span> ' + 'Dirección: ' + numberFormat(this.points[1].point.direction, decimal_numbers, decimals_separator, thousands_separator) + ' (' + unit_meteo_dir.nombre + ')';
							} else {

								return  '<span style="font-size:10px">' + this.points[0].key + '</span><br/>'
									+ '<span style="color:' + this.points[0].point.color + '">\u25CF</span> ' +  'Velocidad: ' + chart_meteo_ranges[this.points[0].y] + ' (' + unit_meteo_vel.nombre + ')';
							}

							

						},
						shared: true
					},

					exporting: {
						filename: 'Velocidad y Dirección del Viento',
						buttons: {
							contextButton: {
								menuItems: [{
									text: "Exportar a imagen (PNG)",
									onclick: function() {
										this.exportChart();
									},
									separator: false
								}]
							}
						},
						chartOptions: {
							xAxis: [{
								categories: vel_receptor_categories_export,
								labels: {
									style: {
										fontSize: '9px'
									},
								},
							}]
						},
						sourceWidth: 1200
					},

					legend: {
						enabled: false
					},
					
					plotOptions: {
						series: {
							pointWidth: 50,
							fillOpacity: 0 // transparencia para el area
						},
						area: {
							//size: 80,
							allowPointSelect: true,
							cursor: 'pointer',
							dataLabels: {
								enabled: false,
								//format: '<b>{point.name}</b>: {point.y}',
								formatter: function(){
									return chart_meteo_ranges[this.y];
								},
								style: {
									color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black',
									fontSize: "9px",
									distance: -30
								},
								crop: false
							},
							showInLegend: true
						}
					},
					
					series: [{
						type: 'area',
						keys: ['y', 'rotation'], // rotation is not used here
						data: vel_receptor_data,
						color: Highcharts.getOptions().colors[0],
						/*fillColor: {
							linearGradient: { x1: 0, x2: 0, y1: 0, y2: 1 },
							stops: [
								[0, Highcharts.getOptions().colors[0]],
								[
									1,
									Highcharts.color(Highcharts.getOptions().colors[0])
										.setOpacity(0.25).get()
								]
							]
						},*/
						pointPadding: 20,
						name: 'Velocidad',
						tooltip: {
							pointFormat: '<span style="color:{point.color}">\u25CF</span> ' +
								'{series.name}: {point.y} (' + unit_meteo_vel.nombre + ') <br/>'
						},
						states: {
							inactive: {
								opacity: 1
							}
						},
						zones: array_alerts_meteo_chart
					},{
						
						type: 'windbarb',
						data: vel_receptor_data,
						name: 'Dirección',
						scrollbar: {
							enabled: true
						},
						yOffset: -10,
						
						//vectorLength: 8,
						//lineWidth: 1,
						vectorLength: 15 ,
						lineWidth: 1,
						color: Highcharts.getOptions().colors[1],
						showInLegend: false,
						tooltip: {
							//valueSuffix: ' m/s'
							pointFormat: '<span style="color:{point.color}">\u25CF</span> ' +
								'{series.name}: {point.direction} (' + unit_meteo_dir.nombre + ') <br/>'
						},
						min: 0,
						max: 72
					}],

				});

				Highcharts.charts[1].xAxis[0].update({categories: vel_receptor_categories, labels: { style: { fontSize: '9px'}}, tickInterval: 1}, true);
				

				// CalHeatMap
				// Configuración de variables para fecha de inicio del CalHeatmap
				var first_datetime = "{!!$first_datetime!!}";
				var date = first_datetime.substring(0, 10); 			// Ej: 2020-01-01
				var year = date.substring(0,4);
				var month =  parseInt(date.substring(5,7)) - 1;						// Puede ser del 1 al 12
				var day = parseInt(date.substring(8,10));				
				var hour = parseInt(first_datetime.substring(11, 13)); 	// Puede ser del 0 al 23

				var array_alerts_meteo_calheatmap_colors = ["#c190e8","#a656b3","#7f37ab","#501d78"];
				var array_alerts_meteo_calheatmap_ranges = ["2","4","6"];

				var calheatmap_meteo = new CalHeatMap();
				calheatmap_meteo.init({
					itemSelector: "#calheatmap_meteo",
					domain: "day",
					subDomain: "x_hour",
					range: 4, // en este caso la cantidad de días
					cellSize: 30, // el tamaño de cada celda de hora
					displayLegend: true,
					domainGutter: 10, // distancia entre días
					tooltip: true,
					verticalOrientation: ($(window).width() < 1070) ? true : false,
					//start: new Date(2020, 4, 1),
					//start: new Date(date),
					start: new Date(year, month, day, hour),
					domainLabelFormat: array_format_date_calheatmap[AppHelper.settings.dateFormat],
					subDomainTextFormat: "%H",// dependerá del formato de hora del proyecto
					subDomainTitleFormat: {
						empty: "Fuera del rango de pronóstico",
						//filled: "{date}, la velocidad estimada de "+ meteorological_variable.sigla + " será de {count} " + unit_meteo.nombre
						filled: '{date}'
					},
					subDomainDateFormat: function(date) {

						var d = new Date(date);
						var h = d.getHours();
						h = ("0" + h).slice(-2);

						var datetime = d.getTime()/1000; // timestamp

						if(meteorological_variable){
							return "A las " + h + " horas, la " + unit_type_meteo.toLowerCase() + " estimada de "+ meteorological_variable.sigla +" será " + calheatmap_meteo_ranges[datetime] + " (" + unit_meteo.nombre + ")";
						} else {
							return "Sin información disponible"
						}

					},
					itemName: [unit_meteo.nombre, unit_meteo.nombre],
					//legend: [0, 2, 4, 6], // sacar minimo y máximo y crear escala de colores en base a esos valores
					legend: array_alerts_meteo_calheatmap_ranges,
					legendTitleFormat: {
						lower: (array_alerts_meteo_calheatmap_ranges.length > 0) ? "menos de {min} ({name})" : 'Sin información disponible',
						inner: "entre {down} y {up} ({name})",
						upper: "más de {max} ({name})"
					},
					legendHorizontalPosition: "center",
					legendMargin: [0, 0, 0, 0],
					data: calheatmap_data_meteo,
					onComplete: function() {
						setTimeout(function(){
							/*['#ffadad','#ff9696','#ff8282','#fc6d6d','#ff5454','#f51818'].forEach(function(d,i){
								d3.selectAll("div#calheatmap_meteo rect.r" + i).style("fill", d);
							});*/
							array_alerts_meteo_calheatmap_colors.forEach(function(d,i){
								i++;
								d3.selectAll("div#calheatmap_meteo rect.r" + i).style("fill", d);
							});
						}, 10);
					}
				});



			} else {

				//Otras variables Meteorológicas
				
				// Datos pronóstico 72 hrs
				var array_receptor_meteo_data_values_p = null;
				var array_receptor_meteo_data_ranges_p = null;
				var array_receptor_meteo_variable_formatted_dates = {!!$array_receptor_meteo_variable_formatted_dates!!};

				var meteo_receptor_data = [];
				var meteo_receptor_categories = [];
				var meteo_receptor_categories_final = [];

				// CalHeatMap
				var calheatmap_data_meteo = [];

				var chart_meteo_ranges = [];
				var calheatmap_meteo_ranges = [];

				// Alerta (colores y valores mínimos)
				var array_alerts_meteo_chart = [{"color":"#c190e8","value":"2"},{"color":"#a656b3","value":"4"},{"color":"#7f37ab","value":"6"},{"color":"#501d78"}];

				Object.keys(array_receptor_meteo_data_values_p).forEach(function(date, idx, array) {
					var values_p = array_receptor_meteo_data_values_p[date];

					var datetime = new Date(date);
					var day_name = array_days_name[datetime.getUTCDay()];
					var day_short_name = array_days_short_name[datetime.getUTCDay()];

					Object.keys(values_p).forEach(function(time) {
						var value_p = parseFloat(values_p[time]);

						var hour = time.substring(5, 7);

						if(idx !== array.length - 1){ 
							meteo_receptor_categories.push(day_short_name+" "+hour+" hrs");
							meteo_receptor_categories_final[day_name+" "+array_receptor_meteo_variable_formatted_dates[date]+" "+hour+" hrs"] = day_short_name+" "+hour+" hrs";
							meteo_receptor_data.push([day_name+" "+array_receptor_meteo_variable_formatted_dates[date]+" "+hour+" hrs", value_p]);
						}
						var timestamp = new Date(date+" "+hour+":00:00").getTime()/1000;
						calheatmap_data_meteo[timestamp] = value_p;
						
					});
				});

				Object.keys(array_receptor_meteo_data_ranges_p).forEach(function(date, idx, array) {
					var ranges_p = array_receptor_meteo_data_ranges_p[date];

					var datetime = new Date(date);
					var day_name = array_days_name[datetime.getUTCDay()];
					var day_short_name = array_days_short_name[datetime.getUTCDay()];

					Object.keys(ranges_p).forEach(function(time) {
						var range_p = ranges_p[time];

						var hour = time.substring(5, 7);
						var timestamp = new Date(date+" "+hour+":00:00").getTime()/1000;

						if(idx !== array.length - 1){
							chart_meteo_ranges[calheatmap_data_meteo[timestamp]] = range_p;
						}
						calheatmap_meteo_ranges[timestamp] = range_p;
					});
				});


				$('#chart_meteo').highcharts({
					chart: {
						//type: 'line',
						type: 'area',
						zoomType: 'x',
						panning: true,
						panKey: 'shift',
						/*scrollablePlotArea: {
							minWidth: 600
						},*/
						events: {
							load: function(){
								//Highcharts.charts[1].xAxis[0].update({categories: meteo_receptor_categories, labels: { style: { fontSize: '9px'}}, tickInterval: 1}, true);
								
								if (this.options.chart.forExport) {
									Highcharts.each(this.series, function (series) {
										series.update({
											dataLabels: {
												enabled: true,
											},
										}, false);
									});
									this.redraw();
								}
							}
						}
					},

					title: {
						text: (meteorological_variable) ? meteorological_variable.name : 'Variable Meteorológica'
					},

					credits: {
						enabled: false
					},

					xAxis: {
						offset: 20,
						//categories: meteo_receptor_categories,
						title: {
							text: 'Horas'
						},
						min: 0,
						max: 71,
						//labels: {
							//formatter: function() {
								//return meteo_receptor_categories_final[this.value];
							//},
						//}
						//gridLineWidth: 1,

						//tickInterval: 6
					},

					yAxis: {
						startOnTick: true,
						endOnTick: false,
						maxPadding: 0.35,
						title: {
							text: null
						},
						labels: {
							format: (meteorological_variable) ? '{value} ' + '(' + unit_meteo.nombre + ')' : ''
						},
						min: 0,
						max: 50
					},

					tooltip: {
						useHTML: true,
						//headerFormat:'{point.key} <br>',
						//pointFormat: 'Concentración de {point.y} ug/m3.',
						//pointFormat: 'Velocidad ' + '{point.value} ' + '<br> ' + 'Dirección ' + '{point.direction}',
						formatter: function() {

							if(meteorological_variable){
								return  '<span style="font-size:10px">' + this.points[0].key + '</span><br/>'
									+ '<span style="color:' + this.points[0].point.color + '">\u25CF</span> ' + unit_type_meteo +': ' + chart_meteo_ranges[this.points[0].y] + ' (' + unit_meteo.nombre + ')';
							} else {
								return  'Sin información disponible';
							}

						},
						shared: true
					},

					exporting: {
						filename: (meteorological_variable) ? meteorological_variable.name : 'Variable Meteorológica',
						buttons: {
							contextButton: {
								menuItems: [{
									text: "Exportar a imagen (PNG)",
									onclick: function() {
										this.exportChart();
									},
									separator: false
								}]
							}
						},
						chartOptions: {
							xAxis: [{
								categories: meteo_receptor_categories,
								labels: {
									style: {
										fontSize: '9px'
									},
									tickInterval: 1
								}
							}]
						},
						sourceWidth: 1200
					},

					legend: {
						enabled: false
					},
					
					plotOptions: {
						series: {
							pointWidth: 50,
							fillOpacity: 0 // transparencia para el area
						},
						area: {
							//size: 80,
							allowPointSelect: true,
							cursor: 'pointer',
							dataLabels: {
								enabled: false,
								//format: '<b>{point.name}</b>: {point.y}',
								formatter: function(){
									return chart_meteo_ranges[this.y];
								},
								style: {
									color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black',
									fontSize: "9px",
									distance: -30
								},
								crop: false
							},
							showInLegend: true
						}
					},

					series: [{
						//type: 'area',
						//keys: ['y', 'rotation'], // rotation is not used here
						data: meteo_receptor_data,
						color: Highcharts.getOptions().colors[0],

						pointPadding: 20,
						name: (meteorological_variable) ? meteorological_variable.name : 'Variable Meteorológica',
						tooltip: {
							pointFormat: '<span style="color:{point.color}">\u25CF</span> ' +
								'{series.name}: {point.y} (' + unit_meteo.nombre + ') <br/>'
						},
						states: {
							inactive: {
								opacity: 1
							}
						},
						zones: array_alerts_meteo_chart
					}]

				});

				Highcharts.charts[1].xAxis[0].update({categories: meteo_receptor_categories, labels: { style: { fontSize: '9px'}}, tickInterval: 1}, true);


				// CalHeatMap
				// Configuración de variables para fecha de inicio del CalHeatmap
				var first_datetime = "{!!$first_datetime!!}";
				var date = first_datetime.substring(0, 10); 			// Ej: 2020-01-01
				var year = date.substring(0,4);
				var month =  parseInt(date.substring(5,7)) - 1;						// Puede ser del 1 al 12
				var day = parseInt(date.substring(8,10));				
				var hour = parseInt(first_datetime.substring(11, 13)); 	// Puede ser del 0 al 23

				var array_alerts_meteo_calheatmap_colors = ["#c190e8","#a656b3","#7f37ab","#501d78"];
				var array_alerts_meteo_calheatmap_ranges = ["2","4","6"];

				var calheatmap_meteo = new CalHeatMap();
				calheatmap_meteo.init({
					itemSelector: "#calheatmap_meteo",
					domain: "day",
					subDomain: "x_hour",
					range: 4, // en este caso la cantidad de días
					cellSize: 30, // el tamaño de cada celda de hora
					displayLegend: true,
					domainGutter: 10, // distancia entre días
					tooltip: true,
					verticalOrientation: ($(window).width() < 1070) ? true : false,
					//start: new Date(2020, 4, 1),
					//start: new Date(date),
					start: new Date(year, month, day, hour),
					domainLabelFormat: array_format_date_calheatmap[AppHelper.settings.dateFormat],
					subDomainTextFormat: "%H",// dependerá del formato de hora del proyecto
					subDomainTitleFormat: {
						empty: "Fuera del rango de pronóstico",
						//filled: "{date}, la velocidad estimada de "+ meteorological_variable.sigla + " será de {count} " + unit_meteo.nombre
						filled: '{date}'
					},
					subDomainDateFormat: function(date) {

						var d = new Date(date);
						var h = d.getHours();
						h = ("0" + h).slice(-2);

						var datetime = d.getTime()/1000; // timestamp

						if(meteorological_variable){
							return "A las " + h + " horas, la " + unit_type_meteo.toLowerCase() + " estimada de "+ meteorological_variable.sigla +" será " + calheatmap_meteo_ranges[datetime] + " (" + unit_meteo.nombre + ")";
						} else {
							return "Sin información disponible"
						}

					},
					itemName: [unit_meteo.nombre, unit_meteo.nombre],
					//legend: [0, 2, 4, 6], // sacar minimo y máximo y crear escala de colores en base a esos valores
					legend: array_alerts_meteo_calheatmap_ranges,
					legendTitleFormat: {
						lower: (array_alerts_meteo_calheatmap_ranges.length > 0) ? "menos de {min} ({name})" : 'Sin información disponible',
						inner: "entre {down} y {up} ({name})",
						upper: "más de {max} ({name})"
					},
					legendHorizontalPosition: "center",
					legendMargin: [0, 0, 0, 0],
					data: calheatmap_data_meteo,
					onComplete: function() {
						setTimeout(function(){
							array_alerts_meteo_calheatmap_colors.forEach(function(d,i){
								i++;
								d3.selectAll("div#calheatmap_meteo rect.r" + i).style("fill", d);
							});
						}, 10);
					}
				});

			}

			var id_meteorological_variable = (meteorological_variable) ? meteorological_variable.id : 0;
			$("#meteo_receptor-table").appTable({
				source: '/api/list_data_variable/' + id_sector + "/" + id_receptor + "/" + id_meteorological_variable + "/3", // Modelo Numérico
				columns: [
					{title: "ID", "class": "text-right dt-head-center w50 hide"},
					{title: "Fecha", "class": "text-left dt-head-center", type: "extract-date"},
					{title: "Hora", "class": "text-left dt-head-center"},
					{title: "Alerta", "class": "text-center dt-head-center"},
					{title: "Rango", "class": "text-left dt-head-center"},
					{title: '<i class="fa fa-bars"></i>', "class": "text-center option no_breakline"},
					{title: '', "class": "hide"} // Columna reservada para el contenido del popover del plan de acción
				],
				rowCallback: function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
					var $html_action_plan = $(nRow).find('[data-toggle="popover"]');
					var html_action_plan_content = aData[6];
					$html_action_plan.popover(
						{
							container: 'body',
							trigger:'hover',
							placement: 'left',
							title: 'Plan de Acción',
							html:true,
							//content: $action_plan.attr("data-content")
							content: html_action_plan_content
						}
					);
				},
				order: [1, "asc"]
			});
			

			$("#receptor, #air_quality_variable, #meteorological_variable").on('change', function(){

				var id_receptor = $("#receptor").val();
				var id_air_quality_variable = $('#air_quality_variable').val();
				var id_meteorological_variable = $('#meteorological_variable').val();

				$.ajax({
					url: '/api/get_data_receptor',
					type: 'post',
					dataType: 'json',
					data: {
						id_receptor: id_receptor,
						air_quality_variable: id_air_quality_variable,
						meteorological_variable: id_meteorological_variable,
						id_sector: id_sector,
						//first_date: "2022-09-16",
						//last_date: "2022-09-18"
					},beforeSend: function() {
						//$('#div_numerical_map').html('<div style="padding:20px;"><div class="circle-loader"></div><div>');
						appLoader.show();
					},
					success: function(respuesta){


						/* Variable Calidad del Aire */

						// Gráfico
						var qual_receptor_data = []; // Datos
						var qual_receptor_categories = []; // Categorías
						var chart_qual_ranges = []; // Rangos
						
						// CalHeatMap
						var calheatmap_data_qual = []; // Datos
						var calheatmap_data_qual_final = []; 
						var calheatmap_qual_ranges = []; // Rangos

						// Colores y rangos de Alertas CalHeatmap
						var array_alerts_qual_calheatmap_colors = respuesta.array_alerts_qual_calheatmap_colors;
						var array_alerts_qual_calheatmap_ranges = respuesta.array_alerts_qual_calheatmap_ranges;

						// Datos pronóstico 72 hrs
						var array_receptor_qual_variable_values_p = respuesta.array_receptor_qual_variable_values_p;
						var array_receptor_qual_variable_ranges_p = respuesta.array_receptor_qual_variable_ranges_p;
						var array_receptor_qual_variable_formatted_dates = respuesta.array_receptor_qual_variable_formatted_dates;

						// Alerta (colores y valores mínimos)
						var array_alerts_qual_chart = respuesta.array_alerts_qual_chart;

						// Variable
						var air_quality_variable = respuesta.air_quality_variable;

						// Unidad de variables según configuración Unidades de Reporte
						var unit_qual = respuesta.unit_qual;

						var first_datetime = respuesta.first_datetime;
						var first_datetime_qual = respuesta.first_datetime_qual;

						Object.keys(array_receptor_qual_variable_values_p).forEach(function(date, idx, array) {
							var values_p = array_receptor_qual_variable_values_p[date];

							var datetime = new Date(date);
							var day_name = array_days_name[datetime.getUTCDay()];
							var day_short_name = array_days_short_name[datetime.getUTCDay()];

							Object.keys(values_p).forEach(function(time) {
								var value_p = parseFloat(values_p[time]);

								var hour = time.substring(5, 7);
								if(idx !== array.length - 1){ 
									qual_receptor_data.push([day_name+" "+array_receptor_qual_variable_formatted_dates[date]+" "+hour+" hrs", value_p]);
									qual_receptor_categories.push(day_short_name+" "+hour+" hrs");
								}
								var timestamp = new Date(date+" "+hour+":00:00").getTime()/1000;

								calheatmap_data_qual[timestamp] = value_p;

								if(array_alerts_qual_calheatmap_ranges.includes(value_p.toString())){
									calheatmap_data_qual_final[timestamp] = value_p + 1;
								} else {
									calheatmap_data_qual_final[timestamp] = value_p;
								}
							
							});
						});

						Object.keys(array_receptor_qual_variable_ranges_p).forEach(function(date, idx, array) {
							var ranges_p = array_receptor_qual_variable_ranges_p[date];

							var datetime = new Date(date);
							var day_name = array_days_name[datetime.getUTCDay()];
							var day_short_name = array_days_short_name[datetime.getUTCDay()];

							Object.keys(ranges_p).forEach(function(time) {
								var range_p = ranges_p[time];

								var hour = time.substring(5, 7);
								var timestamp = new Date(date+" "+hour+":00:00").getTime()/1000;
								
								if(idx !== array.length - 1){
									chart_qual_ranges[calheatmap_data_qual[timestamp]] = range_p;
								}
								calheatmap_qual_ranges[timestamp] = range_p;
							});
						});


						// Actualización Gráfico (#chart_qual)

						// Datos
						Highcharts.charts[0].series[0].update({
							data: qual_receptor_data
						});

						// Título
						Highcharts.charts[0].title.update({
							text: (air_quality_variable) ? air_quality_variable.name_unit_type + ' de ' + air_quality_variable.sigla + ' pronosticada: 24 horas día anterior y próximas 48 horas' : 'Variable de Calidad del aire'
						});

						// Etiquetas Eje Y
						Highcharts.charts[0].yAxis[0].update({
							formatter: function(){
								return numberFormat(this.value, decimal_numbers, decimals_separator, thousands_separator) + ' (' + unit_qual.nombre + ')';
							}
						});
						
						// Rangos en la zona del Área (colores y valores mínimos de configuración de alertas)
						Highcharts.charts[0].series[0].update({
							data: qual_receptor_data,
							zones: array_alerts_qual_chart
						});

						// Tooltip
						Highcharts.charts[0].tooltip.update({
							formatter: function() {
								if(air_quality_variable){
									return  '<span style="font-size: 10px;">' + this.points[0].key + '</span> <br>'
											+ '<span style="color:' + this.points[0].color + '">\u25CF</span> '  + unit_type_qual + ': '
											+ chart_qual_ranges[this.points[0].y] + " (" + unit_qual.nombre + ")";
								} else {
									return  'Sin información disponible';
								}
							}
						});

						Highcharts.charts[0].update({
							plotOptions: {
								area: {
									dataLabels: {
										formatter: function(){
											return chart_qual_ranges[this.y];
										}
									},
								}
							}
						});

						
						$('#chart_qual').highcharts().options.exporting.chartOptions.xAxis[0].categories = qual_receptor_categories
						Highcharts.charts[0].xAxis[0].update({categories: qual_receptor_categories, labels: { style: { fontSize: '9px'}}, tickInterval: 1 }, true);
						$('#chart_qual').highcharts().redraw();
						
						
						// Actualización CalHeatMap

						// Configuración de variables para fecha de inicio del CalHeatmap
						var first_datetime = (first_datetime_qual) ? first_datetime_qual : first_datetime;
						var date = first_datetime.substring(0, 10); 			// Ej: 2020-01-01
						var year = date.substring(0,4);
						var month =  parseInt(date.substring(5,7)) - 1;			// Puede ser del 1 al 12
						var day = parseInt(date.substring(8,10));				
						var hour = parseInt(first_datetime.substring(11, 13)); 	// Puede ser del 0 al 23

						

						// traigo el ancho de la leyenda del CalHeatmap para mantener su posición en la página al actualizar
						var graph_legend_x = $('div#calheatmap_qual > svg > svg.graph-legend').attr('x'); 

						$('#calheatmap_qual').empty();
						//delete calheatmap_qual;
						calheatmap_qual = new CalHeatMap();
						calheatmap_qual.init({
							itemSelector: "#calheatmap_qual",
							domain: "day",
							subDomain: "x_hour",
							range: 4, // en este caso la cantidad de días (puede ser el count del array de datos (por fecha))
							cellSize: 30, // el tamaño de cada celda de hora
							displayLegend: true,
							domainGutter: 10, // distancia entre días 
							tooltip: true,
							verticalOrientation: ($(window).width() < 1070) ? true : false,
							start: new Date(year, month, day, hour),
							domainLabelFormat: array_format_date_calheatmap[AppHelper.settings.dateFormat],
							subDomainTextFormat: "%H",// dependerá del formato de hora del proyecto
							subDomainTitleFormat: {
								empty: "Fuera del rango de pronóstico",
								//filled: "{date}, la concentración de "+ air_quality_variable.sigla +" se estima que será de {count} " + unit_qual.nombre
								filled: "{date}"
							},
							subDomainDateFormat: function(date) {
								var d = new Date(date);
								var h = d.getHours();
								h = ("0" + h).slice(-2);

								var datetime = d.getTime()/1000; // timestamp

								if(air_quality_variable){
									return "A las " + h + " horas, la concentración estimada de " + air_quality_variable.sigla +" será " + calheatmap_qual_ranges[datetime] + " (" + unit_qual.nombre + ")";
								} else {
									return "Sin información disponible"
								}
								
							},
							itemName: [unit_qual.nombre, unit_qual.nombre],
							//legend: [0.0001, 0.0005, 0.0010, 0.0050], // sacar minimo y máximo y crear escala de colores en base a esos valores
							legend: array_alerts_qual_calheatmap_ranges,
							legendTitleFormat: {
								//lower: (array_alerts_qual_calheatmap_ranges.length > 0) ? "menos de {min} ({name})" : 'Sin información disponible',
								lower: (array_alerts_qual_calheatmap_ranges.length > 0) ? (Math.min.apply(Math, array_alerts_qual_calheatmap_ranges) > 0) ? "menos de {min} ({name})" : "menor o igual a {min} ({name})" : 'Sin información disponible',
								inner: "entre {down} y {up} ({name})",
								upper: "más de {max} ({name})"
							},
							legendHorizontalPosition: "center",
							legendMargin: [0, 0, 0, 0],
							data: calheatmap_data_qual_final,
							afterLoad: function() {
								setTimeout(function(){
									var x = 0;
									array_alerts_qual_calheatmap_colors.forEach(function(d,i){
										
										var cal = $("div#calheatmap_qual rect[x='" + x + "']"); 
										d3.selectAll(cal).style("fill", d);

										i++;
										d3.selectAll("div#calheatmap_qual rect.r" + i).style("fill", d);
										x = x+12;
									});

									// Conservar posición del CalHeatMap después de actualizar
									if($(window).width() > 1070){
										var domains = $('div#calheatmap_qual .graph').children('svg');
										var width = Number(domains.first().attr('width'));
										var x = 0;
										domains.each(function () {
											$(this).attr('x', x);
											x += width;
										});
										$('div#calheatmap_qual > svg > svg.graph-legend').attr('x', graph_legend_x);
									} else {
										$('div#calheatmap_qual > svg > svg.graph-legend').attr('x', "0");
									}

								}, 10);
							}
						});


						// Actualización AppTable
						$('#qual_receptor-table').DataTable().destroy();

						$("#qual_receptor-table").appTable({
							source: '/api/list_data_variable/' + id_sector + "/" + id_receptor + "/" + id_air_quality_variable + "/3", // Modelo Numérico
							columns: [
								{title: "ID", "class": "text-right dt-head-center w50 hide"},
								{title: "Fecha", "class": "text-left dt-head-center", type: "extract-date"},
								{title: "Hora", "class": "text-left dt-head-center"},
								{title: "Alerta", "class": "text-center dt-head-center"},
								{title: "Rango", "class": "text-left dt-head-center"},
								{title: '<i class="fa fa-bars"></i>', "class": "text-center option no_breakline"},
								{title: '', "class": "hide"} // Columna reservada para el contenido del popover del plan de acción	
							],
							rowCallback: function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
								var $html_action_plan = $(nRow).find('[data-toggle="popover"]');
								var html_action_plan_content = aData[6];
								$html_action_plan.popover(
									{
										container: 'body',
										trigger:'hover',
										placement: 'left',
										title: 'Plan de Acción',
										html:true,
										//content: $action_plan.attr("data-content")
										content: html_action_plan_content
									}
								);
							},
							order: [1, "asc"]
						});



						/* Variable Meteorológica */

						// Gráfico
						var vel_receptor_data = []; // Datos. Debe ser [[1,30.2],[3,234.6]] [velocidad, dirección] 
						var vel_receptor_categories = []; // Categorías
						var vel_receptor_categories_final = []; // Rangos
						var vel_receptor_categories_export = []; // Labels eje x en exportación

						// CalHeatMap
						var calheatmap_data_meteo = [];

						var chart_meteo_ranges = [];
						var calheatmap_meteo_ranges = [];

						// Datos pronóstico 72 hrs
						var array_receptor_meteo_data_values_p_vel = respuesta.array_receptor_meteo_data_values_p_vel;
						var array_receptor_meteo_data_values_p_dir = respuesta.array_receptor_meteo_data_values_p_dir;
						var array_receptor_meteo_data_ranges_p_vel = respuesta.array_receptor_meteo_data_ranges_p_vel;
						var array_receptor_meteo_variable_formatted_dates = respuesta.array_receptor_meteo_variable_formatted_dates;

						// Unidades de variables según configuración Unidades de Reporte
						var unit_meteo_vel = respuesta.unit_meteo_vel;
						var unit_meteo_dir = respuesta.unit_meteo_dir;
						var unit_meteo = respuesta.unit_meteo;
						var unit_type_meteo = respuesta.unit_type_meteo;


						// Alerta (colores y valores mínimos)
						var array_alerts_meteo_chart = respuesta.array_alerts_meteo_chart;

						// Variable
						var meteorological_variable = respuesta.meteorological_variable;
						var variable_vel_viento = respuesta.variable_vel_viento;

						var first_datetime = respuesta.first_datetime;
						var first_datetime_meteo = respuesta.first_datetime_meteo;

						if(id_meteorological_variable == 1 || id_meteorological_variable == 2){

							Object.keys(array_receptor_meteo_data_values_p_vel).forEach(function(date, idx, array) {
								var values_p = array_receptor_meteo_data_values_p_vel[date];

								var datetime = new Date(date);
								var day_name = array_days_name[datetime.getUTCDay()];
								var day_short_name = array_days_short_name[datetime.getUTCDay()];

								Object.keys(values_p).forEach(function(time) {
									var value_p = parseFloat(values_p[time]);

									var hour = time.substring(5, 7);

									if(idx !== array.length - 1){ 
										vel_receptor_categories.push(day_name+" "+array_receptor_meteo_variable_formatted_dates[date]+" "+hour+" hrs");
										vel_receptor_categories_final[day_name+" "+array_receptor_meteo_variable_formatted_dates[date]+" "+hour+" hrs"] = day_short_name+" "+hour+" hrs";
										vel_receptor_categories_export.push(day_short_name+" "+hour+" hrs");

										if(parseFloat(array_receptor_meteo_data_values_p_dir[date][time]) == 0 || value_p == 0){
											vel_receptor_data.push([0,0]);
										} else {
											vel_receptor_data.push([value_p, parseFloat(array_receptor_meteo_data_values_p_dir[date][time])]);
										}
									}

									var timestamp = new Date(date+" "+hour+":00:00").getTime()/1000;
									calheatmap_data_meteo[timestamp] = value_p;
								});
							});

							Object.keys(array_receptor_meteo_data_ranges_p_vel).forEach(function(date, idx, array) {
								var ranges_p = array_receptor_meteo_data_ranges_p_vel[date];

								var datetime = new Date(date);
								var day_name = array_days_name[datetime.getUTCDay()];
								var day_short_name = array_days_short_name[datetime.getUTCDay()];

								Object.keys(ranges_p).forEach(function(time) {
									var range_p = ranges_p[time];

									var hour = time.substring(5, 7);
									var timestamp = new Date(date+" "+hour+":00:00").getTime()/1000;
									
									if(idx !== array.length - 1){
										chart_meteo_ranges[calheatmap_data_meteo[timestamp]] = range_p;
									}
									calheatmap_meteo_ranges[timestamp] = range_p;
								});
							});

							// Actualización Gráfico (#chart_meteo)
							$('#chart_meteo').highcharts({
								
								chart: {
									type: 'area',
									zoomType: 'x',
									panning: true,
									panKey: 'shift',
									/*scrollablePlotArea: {
										minWidth: 600
									},*/
									events: {
										load: function(){
											
											this.xAxis[0].update({categories: vel_receptor_categories, labels: { style: { fontSize: '9px'}}, tickInterval: 1}, true);
											
											this.update({
												exporting: {
													chartOptions: {
														xAxis: [{
															categories: vel_receptor_categories_export
														}]
													}
												},
											});

											if (this.options.chart.forExport) {
												Highcharts.each(this.series, function (series) {
													series.update({
														dataLabels: {
															enabled: true,
														}
													}, false);
												});

												if(this.xAxis){
													Highcharts.each(this.xAxis, function (xAxis) {
														xAxis.update({
															offset: 20
														}, false);
													});
												}

												this.redraw();
											}

										}
									}
								},

								title: {
									text: 'Velocidad y Dirección del Viento'
								},

								credits: {
									enabled: false
								},

								xAxis: {
									//type: 'datetime',
									//offset: 40,
									offset: 20,
									//minRange: 5,
									title: {
										text: 'Horas'
									},
									
									min: 0,
									max: 71,
									/*scrollbar: {
										enabled: true,
										showFull: true
									},*/
									//showFirstLabel: true
									labels: {
										formatter: function() {
											return vel_receptor_categories_final[this.value];
										},
									}
								},

								yAxis: {
									startOnTick: true,
									endOnTick: false,
									maxPadding: 0.35,
									title: {
										text: null
									},
									labels: {
										formatter: function(){
											return numberFormat(this.value, decimal_numbers, decimals_separator, thousands_separator) + ' (' + unit_meteo_vel.nombre + ')';
										},
									},
									min: 0,
									max: 50
								},

								tooltip: {
									useHTML: true,
									//headerFormat:'{point.key} <br>',
									//pointFormat: 'Concentración de {point.y} ug/m3.',
									//pointFormat: 'Velocidad ' + '{point.value} ' + '<br> ' + 'Dirección ' + '{point.direction}',
									formatter: function() {

										if(this.points[1]){
											return  '<span style="font-size:10px">' + this.points[0].key + '</span><br/>'
												+ '<span style="color:' + this.points[0].point.color + '">\u25CF</span> ' +  'Velocidad: ' + chart_meteo_ranges[this.points[0].y] + ' (' + unit_meteo_vel.nombre + ')' +
												'<br/>' + '<span style="color:' + this.points[1].point.color + '">\u25CF</span> ' + 'Dirección: ' + numberFormat(this.points[1].point.direction, decimal_numbers, decimals_separator, thousands_separator) + ' (' + unit_meteo_dir.nombre + ')';
										} else {

											return  '<span style="font-size:10px">' + this.points[0].key + '</span><br/>'
												+ '<span style="color:' + this.points[0].point.color + '">\u25CF</span> ' +  'Velocidad: ' + chart_meteo_ranges[this.points[0].y] + ' (' + unit_meteo_vel.nombre + ')';
										}

										

									},
									shared: true
								},

								exporting: {
									filename: 'Velocidad y Dirección del Viento',
									buttons: {
										contextButton: {
											menuItems: [{
												text: "Exportar a imagen (PNG)",
												onclick: function() {

													this.update({
														exporting: {
															chartOptions: {
																xAxis: [{
																	categories: vel_receptor_categories_export
																}]
															}
														},
													})
													this.exportChart();

												},
												separator: false
											}]
										}
									},
									chartOptions: {
										xAxis: [{
											categories: vel_receptor_categories_export,
											labels: {
												style: {
													fontSize: '9px'
												},
												tickInterval: 1
											}
										}]
									},
									sourceWidth: 1200
								},

								legend: {
									enabled: false
								},
								
								plotOptions: {
									series: {
										pointWidth: 50,
										fillOpacity: 0 // transparencia para el area
									},
									area: {
										//size: 80,
										allowPointSelect: true,
										cursor: 'pointer',
										dataLabels: {
											enabled: false,
											//format: '<b>{point.name}</b>: {point.y}',
											formatter: function(){
												return chart_meteo_ranges[this.y];
											},
											style: {
												color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black',
												fontSize: "9px",
												distance: -30
											},
											crop: false
										},
										showInLegend: true
									}
								},
								
								series: [{
									type: 'area',
									keys: ['y', 'rotation'], // rotation is not used here
									data: vel_receptor_data,
									color: Highcharts.getOptions().colors[0],
									/*fillColor: {
										linearGradient: { x1: 0, x2: 0, y1: 0, y2: 1 },
										stops: [
											[0, Highcharts.getOptions().colors[0]],
											[
												1,
												Highcharts.color(Highcharts.getOptions().colors[0])
													.setOpacity(0.25).get()
											]
										]
									},*/
									pointPadding: 20,
									name: 'Velocidad',
									tooltip: {
										pointFormat: '<span style="color:{point.color}">\u25CF</span> ' +
											'{series.name}: {point.y} (' + unit_meteo_vel.nombre + ') <br/>'
									},
									states: {
										inactive: {
											opacity: 1
										}
									},
									zones: array_alerts_meteo_chart
								},{
									
									type: 'windbarb',
									data: vel_receptor_data,
									name: 'Dirección',
									scrollbar: {
										enabled: true
									},
									yOffset: -10,
									
									//vectorLength: 8,
									//lineWidth: 1,
									vectorLength: 15 ,
									lineWidth: 1,
									color: Highcharts.getOptions().colors[1],
									showInLegend: false,
									tooltip: {
										//valueSuffix: ' m/s'
										pointFormat: '<span style="color:{point.color}">\u25CF</span> ' +
											'{series.name}: {point.direction} (' + unit_meteo_dir.nombre + ') <br/>'
									},
									min: 0,
									max: 72
								}],

							});



							// Actualización CalHeatMap
							// Configuración de variables para fecha de inicio del CalHeatmap
							var first_datetime = (first_datetime_meteo) ? first_datetime_meteo : first_datetime;
							
							var date = first_datetime.substring(0, 10); 			// Ej: 2020-01-01
							var year = date.substring(0,4);
							var month =  parseInt(date.substring(5,7)) - 1;						// Puede ser del 1 al 12
							var day = parseInt(date.substring(8,10));				
							var hour = parseInt(first_datetime.substring(11, 13)); 	// Puede ser del 0 al 23

							var array_alerts_meteo_calheatmap_colors = respuesta.array_alerts_meteo_calheatmap_colors;
							var array_alerts_meteo_calheatmap_ranges = respuesta.array_alerts_meteo_calheatmap_ranges;

							// traigo el ancho de la leyenda del CalHeatmap para mantener su posición en la página al actualizar
							var graph_legend_x = $('div#calheatmap_meteo > svg > svg.graph-legend').attr('x'); 

							$('#calheatmap_meteo').empty();
							var calheatmap_meteo = new CalHeatMap();
							calheatmap_meteo.init({
								itemSelector: "#calheatmap_meteo",
								domain: "day",
								subDomain: "x_hour",
								range: 4, // en este caso la cantidad de días
								cellSize: 30, // el tamaño de cada celda de hora
								displayLegend: true,
								domainGutter: 10, // distancia entre días
								tooltip: true,
								verticalOrientation: ($(window).width() < 1070) ? true : false,
								//start: new Date(2020, 4, 1),
								//start: new Date(date),
								start: new Date(year, month, day, hour),
								domainLabelFormat: array_format_date_calheatmap[AppHelper.settings.dateFormat],
								subDomainTextFormat: "%H",// dependerá del formato de hora del proyecto
								subDomainTitleFormat: {
									empty: "Fuera del rango de pronóstico",
									//filled: "{date}, la velocidad estimada de "+ meteorological_variable.sigla + " será de {count} " + unit_meteo.nombre
									filled: '{date}'
								},
								subDomainDateFormat: function(date) {

									var d = new Date(date);
									var h = d.getHours();
									h = ("0" + h).slice(-2);

									var datetime = d.getTime()/1000; // timestamp

									if(meteorological_variable){
										return "A las " + h + " horas, la " + unit_type_meteo.toLowerCase() + " estimada de "+ variable_vel_viento.sigla +" será " + calheatmap_meteo_ranges[datetime] + " (" + unit_meteo_vel.nombre + ")";
									} else {
										return "Sin información disponible"
									}

								},
								itemName: [unit_meteo.nombre, unit_meteo.nombre],
								//legend: [0, 2, 4, 6], // sacar minimo y máximo y crear escala de colores en base a esos valores
								legend: array_alerts_meteo_calheatmap_ranges,
								legendTitleFormat: {
									lower: (array_alerts_meteo_calheatmap_ranges.length > 0) ? "menos de {min} ({name})" : 'Sin información disponible',
									inner: "entre {down} y {up} ({name})",
									upper: "más de {max} ({name})"
								},
								legendHorizontalPosition: "center",
								legendMargin: [0, 0, 0, 0],
								data: calheatmap_data_meteo,
								onComplete: function() {
									setTimeout(function(){
										array_alerts_meteo_calheatmap_colors.forEach(function(d,i){
											i++;
											d3.selectAll("div#calheatmap_meteo rect.r" + i).style("fill", d);
										});

										// Conservar posición del CalHeatMap después de actualizar
										if($(window).width() > 1070){
											// Conservar posición del CalHeatMap después de actualizar
											var domains = $('div#calheatmap_meteo .graph').children('svg');
											var width = Number(domains.first().attr('width'));
											var x = 0;
											domains.each(function () {
												$(this).attr('x', x);
												x += width;
											});
											$('div#calheatmap_meteo > svg > svg.graph-legend').attr('x', graph_legend_x);
										} else {
											$('div#calheatmap_meteo > svg > svg.graph-legend').attr('x', "0");
										}

									}, 10);
								}
							});

							// Actualización AppTable
							$('#meteo_receptor-table').DataTable().destroy();

							$("#meteo_receptor-table").appTable({
								source: '/api/list_data_variable/' + id_sector + "/" + id_receptor + "/1" + "/3", // Modelo Numérico
								columns: [
									{title: "ID", "class": "text-right dt-head-center w50 hide"},
									{title: "Fecha", "class": "text-left dt-head-center", type: "extract-date"},
									{title: "Hora", "class": "text-left dt-head-center"},
									{title: "Alerta", "class": "text-center dt-head-center"},
									{title: "Rango", "class": "text-left dt-head-center"},
									{title: '<i class="fa fa-bars"></i>', "class": "text-center option no_breakline"},
									{title: '', "class": "hide"} // Columna reservada para el contenido del popover del plan de acción
								],
								rowCallback: function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
									var $html_action_plan = $(nRow).find('[data-toggle="popover"]');
									var html_action_plan_content = aData[6];
									$html_action_plan.popover(
										{
											container: 'body',
											trigger:'hover',
											placement: 'left',
											title: 'Plan de Acción',
											html:true,
											//content: $action_plan.attr("data-content")
											content: html_action_plan_content
										}
									);
								},
								order: [1, "asc"]
							});


						} else {


							// Datos pronóstico 72 hrs
							var array_receptor_meteo_data_values_p = respuesta.array_receptor_meteo_data_values_p;
							var array_receptor_meteo_data_ranges_p = respuesta.array_receptor_meteo_data_ranges_p;

							var array_receptor_meteo_variable_formatted_dates = respuesta.array_receptor_meteo_variable_formatted_dates;

							var meteo_receptor_data = [];
							var meteo_receptor_categories = [];
							var meteo_receptor_categories_final = [];
							var meteo_receptor_categories_final_2 = [];

							// CalHeatMap
							var calheatmap_data_meteo = [];

							var chart_meteo_ranges = [];
							var calheatmap_meteo_ranges = [];

							// Alerta (colores y valores mínimos)
							var array_alerts_meteo_chart = respuesta.array_alerts_meteo_chart;

							var first_datetime = respuesta.first_datetime;
							var first_datetime_meteo = respuesta.first_datetime_meteo;

							Object.keys(array_receptor_meteo_data_values_p).forEach(function(date, idx, array) {
								var values_p = array_receptor_meteo_data_values_p[date];

								var datetime = new Date(date);
								var day_name = array_days_name[datetime.getUTCDay()];
								var day_short_name = array_days_short_name[datetime.getUTCDay()];

								Object.keys(values_p).forEach(function(time) {
									var value_p = parseFloat(values_p[time]);

									var hour = time.substring(5, 7);
									if(idx !== array.length - 1){
										meteo_receptor_categories.push(day_short_name+" "+hour+" hrs");
										meteo_receptor_categories_final[day_name+" "+array_receptor_meteo_variable_formatted_dates[date]+" "+hour+" hrs"] = day_short_name+" "+hour+" hrs";
										meteo_receptor_categories_final_2.push(day_name+" "+array_receptor_meteo_variable_formatted_dates[date]+" "+hour+" hrs");
										meteo_receptor_data.push([day_name+" "+array_receptor_meteo_variable_formatted_dates[date]+" "+hour+" hrs", value_p]);
									}
									var timestamp = new Date(date+" "+hour+":00:00").getTime()/1000;
									calheatmap_data_meteo[timestamp] = value_p;
									
								});
							});

							Object.keys(array_receptor_meteo_data_ranges_p).forEach(function(date, idx, array) {
								var ranges_p = array_receptor_meteo_data_ranges_p[date];

								var datetime = new Date(date);
								var day_name = array_days_name[datetime.getUTCDay()];
								var day_short_name = array_days_short_name[datetime.getUTCDay()];

								Object.keys(ranges_p).forEach(function(time) {
									var range_p = ranges_p[time];

									var hour = time.substring(5, 7);
									var timestamp = new Date(date+" "+hour+":00:00").getTime()/1000;

									if(idx !== array.length - 1){
										chart_meteo_ranges[calheatmap_data_meteo[timestamp]] = range_p;
									}
									calheatmap_meteo_ranges[timestamp] = range_p;
								});
							});

							
							// Actualización Gráfico (#chart_meteo)
							$('#chart_meteo').highcharts({
								chart: {
									//type: 'line',
									type: 'area',
									zoomType: 'x',
									panning: true,
									panKey: 'shift',
									/*scrollablePlotArea: {
										minWidth: 600
									},*/
									events: {
										load: function(){

											this.xAxis[0].update({categories: meteo_receptor_categories, labels: { style: { fontSize: '9px'}}, tickInterval: 1}, true);

											if (this.options.chart.forExport) {
												Highcharts.each(this.series, function (series) {
													series.update({
														dataLabels: {
															enabled: true,
														},
													}, false);
												});
												this.redraw();
											}
										}
									}
								},

								title: {
									text: (meteorological_variable) ? meteorological_variable.name : 'Variable Meteorológica'
								},

								credits: {
									enabled: false
								},

								xAxis: {
									offset: 20,
									//categories: meteo_receptor_categories,
									title: {
										text: 'Horas'
									},
									min: 0,
									max: 71,
									//labels: {
										//formatter: function() {
											//return meteo_receptor_categories_final[this.value];
										//},
									//}
									//gridLineWidth: 1,

									//tickInterval: 6
								},

								yAxis: {
									startOnTick: true,
									endOnTick: false,
									maxPadding: 0.35,
									title: {
										text: null
									},
									labels: {
										format: (meteorological_variable) ? '{value} ' + '(' + unit_meteo.nombre + ')' : ''
									},
									min: 0,
									max: 50
								},

								tooltip: {
									useHTML: true,
									//headerFormat:'{point.key} <br>',
									//pointFormat: 'Concentración de {point.y} ug/m3.',
									//pointFormat: 'Velocidad ' + '{point.value} ' + '<br> ' + 'Dirección ' + '{point.direction}',
									formatter: function() {

										if(meteorological_variable){
											return  '<span style="font-size:10px">' + this.points[0].key + '</span><br/>'
												+ '<span style="color:' + this.points[0].point.color + '">\u25CF</span> ' + unit_type_meteo +': ' + chart_meteo_ranges[this.points[0].y] + ' (' + unit_meteo.nombre + ')';
										} else {
											return  'Sin información disponible';
										}

									},
									shared: true
								},

								exporting: {
									filename: (meteorological_variable) ? meteorological_variable.name : 'Variable Meteorológica',
									buttons: {
										contextButton: {
											menuItems: [{
												text: "Exportar a imagen (PNG)",
												onclick: function() {
													this.exportChart();
												},
												separator: false
											}]
										}
									},
									chartOptions: {
										xAxis: [{
											categories: meteo_receptor_categories,
											labels: {
												style: {
													fontSize: '9px'
												},
												tickInterval: 1
											}
										}]
									},
									sourceWidth: 1200
								},

								legend: {
									enabled: false
								},
								
								plotOptions: {
									series: {
										pointWidth: 50,
										fillOpacity: 0 // transparencia para el area
									},
									area: {
										//size: 80,
										allowPointSelect: true,
										cursor: 'pointer',
										dataLabels: {
											enabled: false,
											//format: '<b>{point.name}</b>: {point.y}',
											formatter: function(){
												return chart_meteo_ranges[this.y];
											},
											style: {
												color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black',
												fontSize: "9px",
												distance: -30
											},
											crop: false
										},
										showInLegend: true
									}
								},

								series: [{
									//type: 'area',
									//keys: ['y', 'rotation'], // rotation is not used here
									data: meteo_receptor_data,
									color: Highcharts.getOptions().colors[0],

									pointPadding: 20,
									name: (meteorological_variable) ? meteorological_variable.name : 'Variable Meteorológica',
									tooltip: {
										pointFormat: '<span style="color:{point.color}">\u25CF</span> ' +
											'{series.name}: {point.y} (' + unit_meteo.nombre + ') <br/>'
									},
									states: {
										inactive: {
											opacity: 1
										}
									},
									zones: array_alerts_meteo_chart
								}]

							});

							// Actualización CalHeatMap

							// Configuración de variables para fecha de inicio del CalHeatmap
							var first_datetime = (first_datetime_meteo) ? first_datetime_meteo : first_datetime;
							
							var date = first_datetime.substring(0, 10); 			// Ej: 2020-01-01
							var year = date.substring(0,4);
							var month =  parseInt(date.substring(5,7)) - 1;						// Puede ser del 1 al 12
							var day = parseInt(date.substring(8,10));				
							var hour = parseInt(first_datetime.substring(11, 13)); 	// Puede ser del 0 al 23

							var array_alerts_meteo_calheatmap_colors = respuesta.array_alerts_meteo_calheatmap_colors;
							var array_alerts_meteo_calheatmap_ranges = respuesta.array_alerts_meteo_calheatmap_ranges;

							// traigo el ancho de la leyenda del CalHeatmap para mantener su posición en la página al actualizar
							var graph_legend_x = $('div#calheatmap_meteo > svg > svg.graph-legend').attr('x'); 

							$('#calheatmap_meteo').empty();
							var calheatmap_meteo = new CalHeatMap();
							calheatmap_meteo.init({
								itemSelector: "#calheatmap_meteo",
								domain: "day",
								subDomain: "x_hour",
								range: 4, // en este caso la cantidad de días
								cellSize: 30, // el tamaño de cada celda de hora
								displayLegend: true,
								domainGutter: 10, // distancia entre días
								tooltip: true,
								verticalOrientation: ($(window).width() < 1070) ? true : false,
								//start: new Date(2020, 4, 1),
								//start: new Date(date),
								start: new Date(year, month, day, hour),
								domainLabelFormat: array_format_date_calheatmap[AppHelper.settings.dateFormat],
								subDomainTextFormat: "%H",// dependerá del formato de hora del proyecto
								subDomainTitleFormat: {
									empty: "Fuera del rango de pronóstico",
									//filled: "{date}, la velocidad estimada de "+ meteorological_variable.sigla + " será de {count} " + unit_meteo.nombre
									filled: '{date}'
								},
								subDomainDateFormat: function(date) {

									var d = new Date(date);
									var h = d.getHours();
									h = ("0" + h).slice(-2);

									var datetime = d.getTime()/1000; // timestamp

									if(meteorological_variable){
										return "A las " + h + " horas, la " + unit_type_meteo.toLowerCase() + " estimada de "+ meteorological_variable.sigla +" será " + calheatmap_meteo_ranges[datetime] + " (" + unit_meteo.nombre + ")";
									} else {
										return "Sin información disponible"
									}

								},
								itemName: [unit_meteo.nombre, unit_meteo.nombre],
								//legend: [0, 2, 4, 6], // sacar minimo y máximo y crear escala de colores en base a esos valores
								legend: array_alerts_meteo_calheatmap_ranges,
								legendTitleFormat: {
									lower: (array_alerts_meteo_calheatmap_ranges.length > 0) ? "menos de {min} ({name})" : 'Sin información disponible',
									inner: "entre {down} y {up} ({name})",
									upper: "más de {max} ({name})"
								},
								legendHorizontalPosition: "center",
								legendMargin: [0, 0, 0, 0],
								data: calheatmap_data_meteo,
								onComplete: function() {
									setTimeout(function(){
										array_alerts_meteo_calheatmap_colors.forEach(function(d,i){
											i++;
											d3.selectAll("div#calheatmap_meteo rect.r" + i).style("fill", d);
										});

										// Conservar posición del CalHeatMap después de actualizar
										if($(window).width() > 1070){
											// Conservar posición del CalHeatMap después de actualizar
											var domains = $('div#calheatmap_meteo .graph').children('svg');
											var width = Number(domains.first().attr('width'));
											var x = 0;
											domains.each(function () {
												$(this).attr('x', x);
												x += width;
											});
											$('div#calheatmap_meteo > svg > svg.graph-legend').attr('x', graph_legend_x);
										} else {
											$('div#calheatmap_meteo > svg > svg.graph-legend').attr('x', "0");
										}
										

									}, 10);
								}
							});


							// Actualización AppTable
							$('#meteo_receptor-table').DataTable().destroy();

							$("#meteo_receptor-table").appTable({
								source: '/api/list_data_variable/' + id_sector + "/" + id_receptor + "/" + id_meteorological_variable + "/3", // Modelo Numérico
								columns: [
									{title: "ID", "class": "text-right dt-head-center w50 hide"},
									{title: "Fecha", "class": "text-left dt-head-center", type: "extract-date"},
									{title: "Hora", "class": "text-left dt-head-center"},
									{title: "Alerta", "class": "text-center dt-head-center"},
									{title: "Rango", "class": "text-left dt-head-center"},
									{title: '<i class="fa fa-bars"></i>', "class": "text-center option no_breakline"},
									{title: '', "class": "hide"} // Columna reservada para el contenido del popover del plan de acción
								],
								rowCallback: function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
									var $html_action_plan = $(nRow).find('[data-toggle="popover"]');
									var html_action_plan_content = aData[6];
									$html_action_plan.popover(
										{
											container: 'body',
											trigger:'hover',
											placement: 'left',
											title: 'Plan de Acción',
											html:true,
											//content: $action_plan.attr("data-content")
											content: html_action_plan_content
										}
									);
								},
								order: [1, "asc"]
							});
							
						}

						appLoader.hide();
						
					}

				});

			});


		
		// Si el Sector tiene el modelo Estadístico (id 2)
		
																$('#receptor_stat_model').val(4).trigger('change');
							
																$('#air_quality_variable_stat_model').val(8).trigger('change');
							
			// Objeto variable Calidad del aire inicial
			var air_quality_variable_stat_model = {"id":"8","id_air_variable_type":"2","id_unit_type":"15","name":"Di\u00f3xido de azufre","sigla":"SO2","icono":"air_sulfur_dioxide.png","alias":"Diox azufre","deleted":"0","name_variable_type":"air_quality","name_unit_type":"Concentraci\u00f3n"};

			// Unidades de variable según configuración Unidades de Reporte
			var unit_qual_stat_model = {"id":"40","id_tipo_unidad":"15","nombre":"\u00b5g\/m3","nombre_real":"Microgramo por metro c\u00fabico","indicador":null,"deleted":"0"};
			var unit_type_qual_stat_model = "Concentraci\u00f3n";

			var id_sector = 1;
			var id_receptor_stat_model = $("#receptor_stat_model").val();

			// Gráfico
			var qual_receptor_data_stat_model = []; // Datos
			var qual_receptor_categories_stat_model = []; // Categorías
			var chart_qual_ranges_stat_model = []; // Rangos
			
			// CalHeatMap
			var calheatmap_data_qual_stat_model = []; // Datos
			var calheatmap_data_qual_stat_model_final = []; 
			var calheatmap_qual_ranges_stat_model = []; // Rangos

			// Colores y rangos de Alertas CalHeatmap
			var array_alerts_qual_calheatmap_colors_stat_model = ["#6df257","#f6fa3a","#faa500","#ed1515","#8027f2"];
			var array_alerts_qual_calheatmap_ranges_stat_model = ["100","200","300","400"];

			// Datos pronóstico 72 hrs
			var array_receptor_qual_stat_model_values_p = {!! $array_receptor_qual_stat_model_values_p!!}
			var array_receptor_qual_stat_model_ranges_p = {!!$array_receptor_qual_stat_model_ranges_p !!}
			var array_receptor_qual_stat_formatted_dates = {!! $array_receptor_qual_stat_formatted_dates!!}

			// Alerta (colores y valores mínimos)
			var array_alerts_qual_chart_stat_model = [{"color":"#6df257","value":"100"},{"color":"#f6fa3a","value":"200"},{"color":"#faa500","value":"300"},{"color":"#ed1515","value":"400"},{"color":"#8027f2"}];

			Object.keys(array_receptor_qual_stat_model_values_p).forEach(function(date, idx, array) {
				var values_p = array_receptor_qual_stat_model_values_p[date];

				var datetime = new Date(date);
				var day_name = array_days_name[datetime.getUTCDay()];
				var day_short_name = array_days_short_name[datetime.getUTCDay()];

				Object.keys(values_p).forEach(function(time) {
					var value_p = parseFloat(values_p[time]);

					var hour = time.substring(5, 7);
					if(idx !== array.length - 1){
						qual_receptor_data_stat_model.push([day_name+" "+array_receptor_qual_stat_formatted_dates[date]+" "+hour+" hrs", value_p]);
						qual_receptor_categories_stat_model.push(day_short_name+" "+hour+" hrs");
					}
					var timestamp = new Date(date+" "+hour+":00:00").getTime()/1000;
					calheatmap_data_qual_stat_model[timestamp] = value_p;

					if(array_alerts_qual_calheatmap_ranges_stat_model.includes(value_p.toString())){
						calheatmap_data_qual_stat_model_final[timestamp] = value_p + 1;
					} else {
						calheatmap_data_qual_stat_model_final[timestamp] = value_p;
					}

				});
			});

			Object.keys(array_receptor_qual_stat_model_ranges_p).forEach(function(date, idx, array) {
				var ranges_p = array_receptor_qual_stat_model_ranges_p[date];

				var datetime = new Date(date);
				var day_name = array_days_name[datetime.getUTCDay()];
				var day_short_name = array_days_short_name[datetime.getUTCDay()];

				Object.keys(ranges_p).forEach(function(time) {
					var range_p = ranges_p[time];

					var hour = time.substring(5, 7);
					var timestamp = new Date(date+" "+hour+":00:00").getTime()/1000;

					if(idx !== array.length - 1){
						chart_qual_ranges_stat_model[calheatmap_data_qual_stat_model[timestamp]] = range_p;
					}
					calheatmap_qual_ranges_stat_model[timestamp] = range_p;
				});
			});


			$('#chart_qual_stat_model').highcharts({
				chart: {
					type: 'area',
					zoomType: 'x',
					panning: true,
					panKey: 'shift',
					/*scrollablePlotArea: {
						minWidth: 600
					},*/
					events: {
						load: function(){

							// Si existen los gráficos del modelo numérico (variable Calidad del aire y variable Meteorológica)
							//var n_grafico = (Highcharts.charts[0] && Highcharts.charts[1]) ? 2 : 0;
							/*								var n_grafico = 2;
							
							Highcharts.charts[n_grafico].xAxis[0].update({categories: qual_receptor_categories_stat_model, labels: { style: { fontSize: '9px'}}, tickInterval: 1 }, true);
							*/
							if (this.options.chart.forExport) {
								Highcharts.each(this.series, function (series) {
									series.update({
										dataLabels: {
											enabled: true,
										}
									}, false);
								});
								this.redraw();
							}
						}
					}
				},

				title: {
					text: (air_quality_variable_stat_model) ? air_quality_variable_stat_model.name_unit_type + ' de ' + air_quality_variable_stat_model.sigla + ' pronosticada: 24 horas día anterior y próximas 48 horas' : 'Variable de Calidad del aire'
				},

				credits: {
					enabled: false
				},

				xAxis: {
					//labels: {
					//	format: '{value} hrs',
					//},
					minRange: 5,
					title: {
						text: 'Horas'
					},
				},

				yAxis: {
					startOnTick: true,
					endOnTick: false,
					maxPadding: 0.35,
					title: {
						text: null
					},
					labels: {
						formatter: function(){
							if(air_quality_variable_stat_model){
								return numberFormat(this.value, decimal_numbers, decimals_separator, thousands_separator) + ' (' + unit_qual_stat_model.nombre + ')';
							} else {
								return '';
							}
						},
					},
					min: 0,
					max: 500
				},

				tooltip: {
					useHTML: true,
					//headerFormat: '<span style="font-size: 10px;">{point.key}</span> <br>',
					//pointFormat: '<span style="color:{point.color}">\u25CF</span> ' + 'Concentración: ' + '{point.y} ' + unit_qual_stat_model.nombre,
					formatter: function() {
						
						if(air_quality_variable_stat_model){
							return  '<span style="font-size: 10px;">' + this.points[0].key + '</span> <br>'
								+ '<span style="color:' + this.points[0].color + '">\u25CF</span> '  + unit_type_qual_stat_model + ': '
								+ chart_qual_ranges_stat_model[this.points[0].y] + ' (' + unit_qual_stat_model.nombre + ')';
						} else {
							return  'Sin información disponible';
						}

					},
					shared: true
				},

				exporting: {
					filename: (air_quality_variable_stat_model) ? air_quality_variable_stat_model.name_unit_type + ' de ' + air_quality_variable_stat_model.sigla + ' pronosticada: 24 horas día anterior y próximas 48 horas' : 'Variable de Calidad del aire',
					buttons: {
						contextButton: {
							menuItems: [{
								text: "Exportar a imagen (PNG)",
								onclick: function() {
									this.exportChart();
								},
								separator: false
							}]
						}
					},
					chartOptions: {
						xAxis: [{
							categories: qual_receptor_categories_stat_model,
							labels: {
								style: {
									fontSize: '9px'
								},
								tickInterval: 1
							}
						}]
					},
					sourceWidth: 1200
				},

				plotOptions: {
					area: {
						//size: 80,
						allowPointSelect: true,
						cursor: 'pointer',
						dataLabels: {
							enabled: false,
							//format: '<b>{point.name}</b>: {point.y}',
							formatter: function(){
								return chart_qual_ranges_stat_model[this.y];
							},
							style: {
								color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black',
								fontSize: "9px",
								distance: -30
							},
							crop: false
						},
						showInLegend: true
					}
				},

				legend: {
					enabled: false
				},

				series: [{
					accessibility: {
						keyboardNavigation: {
							enabled: false
						}
					},
					data: qual_receptor_data_stat_model,
					//lineColor: Highcharts.getOptions().colors[1],
					//color: '#ff5454',
					fillOpacity: 0, // transparencia para el area
					name: '',
					zones: array_alerts_qual_chart_stat_model
				},
				]

			});

							var n_grafico = 2;
			
			Highcharts.charts[n_grafico].xAxis[0].update({categories: qual_receptor_categories_stat_model, labels: { style: { fontSize: '9px'}}, tickInterval: 1 }, true);


			// CalHeatMap
			// Configuración de variables para fecha de inicio del CalHeatmap
			var first_datetime = "{!!$first_datetime!!}";
			var date = first_datetime.substring(0, 10); 			// Ej: 2020-01-01
			var year = date.substring(0,4);
			var month =  parseInt(date.substring(5,7)) - 1;			// Puede ser del 1 al 12
			var day = parseInt(date.substring(8,10));				
			var hour = parseInt(first_datetime.substring(11, 13)); 	// Puede ser del 0 al 23

			

			var calheatmap_qual_stat_model = new CalHeatMap();
			calheatmap_qual_stat_model.init({
				itemSelector: "#calheatmap_qual_stat_model",
				domain: "day",
				subDomain: "x_hour",
				range: 4, // en este caso la cantidad de días (puede ser el count del array de datos (por fecha))
				cellSize: 30, // el tamaño de cada celda de hora
				displayLegend: true,
				domainGutter: 10, // distancia entre días 
				tooltip: true,
				verticalOrientation: ($(window).width() < 1070) ? true : false,
				start: new Date(year, month, day, hour),
				domainLabelFormat: array_format_date_calheatmap[AppHelper.settings.dateFormat],
				subDomainTextFormat: "%H",// dependerá del formato de hora del proyecto
				subDomainTitleFormat: {
					empty: "Fuera del rango de pronóstico",
					//filled: "{date}, la concentración de "+ air_quality_variable_stat_model.sigla +" se estima que será de {count} " + unit_qual_stat_model.nombre
					filled: "{date}"
				},
				subDomainDateFormat: function(date) {
					var d = new Date(date);
					var h = d.getHours();
					h = ("0" + h).slice(-2);

					var datetime = d.getTime()/1000; // timestamp

					if(air_quality_variable_stat_model){
						return "A las " + h + " horas, la concentración estimada de " + air_quality_variable_stat_model.sigla +" será " + calheatmap_qual_ranges_stat_model[datetime] + " (" + unit_qual_stat_model.nombre + ")";
					} else {
						return "Sin información disponible"
					}
				
				},
				/*domainLabelFormat: function(date) {
					
					var d = new Date(date);
					//var datetime = d.getTime()/1000; // timestamp
					var y = d.getFullYear();
					var m = d.getMonth() + 1;
					var d = d.getDate();
					
					var formatted_date = d+"-"+m+"-"+y;
					return formatted_date;

				},*/
				itemName: [unit_qual_stat_model.nombre, unit_qual_stat_model.nombre],
				//legend: [0.0001, 0.0005, 0.0010, 0.0050], // sacar minimo y máximo y crear escala de colores en base a esos valores
				legend: array_alerts_qual_calheatmap_ranges_stat_model,
				legendTitleFormat: {
					//lower: (array_alerts_qual_calheatmap_ranges_stat_model.length > 0) ? "menos de {min} ({name})" : 'Sin información disponible',
					lower: (array_alerts_qual_calheatmap_ranges_stat_model.length > 0) ? (Math.min.apply(Math, array_alerts_qual_calheatmap_ranges_stat_model) > 0) ? "menos de {min} ({name})" : "menor o igual a {min} ({name})" : 'Sin información disponible',
					inner: "entre {down} y {up} ({name})",
					upper: "más de {max} ({name})"
				},
				legendHorizontalPosition: "center",
				legendMargin: [0, 0, 0, 0],
				data: calheatmap_data_qual_stat_model_final,
				onComplete: function() { // https://php.developreference.com/article/19345650/cal-heatmap+-+legendColors+as+array+of+color+values%3F
					setTimeout(function(){
						/*['#ffadad','#ff9696','#ff8282','#fc6d6d','#ff5454','#f51818'].forEach(function(d,i){
							d3.selectAll("rect.r" + i).style("fill", d);
						});*/
						array_alerts_qual_calheatmap_colors_stat_model.forEach(function(d,i){
							i++;
							d3.selectAll("div#calheatmap_qual_stat_model rect.r" + i).style("fill", d);
						});
					}, 10);
				}
			});

			var id_air_quality_variable_stat_model = (air_quality_variable_stat_model) ? air_quality_variable_stat_model.id : 0;
			$("#qual_receptor_stat_model-table").appTable({
				source: '/api/list_data_variable/' + id_sector + "/" + id_receptor_stat_model + "/" + id_air_quality_variable_stat_model + "/2", // Modelo Estadístico
				columns: [
					{title: "ID", "class": "text-right dt-head-center w50 hide"},
					{title: "Fecha", "class": "text-left dt-head-center", type: "extract-date"},
					{title: "Hora", "class": "text-left dt-head-center"},
					{title: "Alerta", "class": "text-center dt-head-center"},
					{title: "Rango", "class": "text-left dt-head-center"},
					{title: '<i class="fa fa-bars"></i>', "class": "text-center option no_breakline"},
					{title: '', "class": "hide"} // Columna reservada para el contenido del popover del plan de acción
				],
				rowCallback: function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
					var $html_action_plan = $(nRow).find('[data-toggle="popover"]');
					var html_action_plan_content = aData[6];
					$html_action_plan.popover(
						{
							container: 'body',
							trigger:'hover',
							placement: 'left',
							title: 'Plan de Acción',
							html:true,
							//content: $action_plan.attr("data-content")
							content: html_action_plan_content
						}
					);
				},
				order: [1, "asc"]

			});


			$("#air_quality_variable_stat_model, #receptor_stat_model").on('change', function(){

				var id_air_quality_variable = $("#air_quality_variable_stat_model").val();
				var id_receptor = $("#receptor_stat_model").val();

				$.ajax({
					url: '/api/get_data_by_model',
					type: 'post',
					dataType: 'json',
					data: {
						id_air_quality_variable: id_air_quality_variable,
						id_receptor: id_receptor,
						id_sector: id_sector,
						id_model: 2 // Estadístico
					},beforeSend: function() {
						appLoader.show();
					},
					success: function(respuesta){

						/* Variable Calidad del Aire */

						// Gráfico
						var qual_receptor_data = []; // Datos
						var qual_receptor_categories = []; // Categorías
						var chart_qual_ranges = []; // Rangos
						
						// CalHeatMap
						var calheatmap_data_qual = []; // Datos
						var calheatmap_data_qual_final = []; 
						var calheatmap_qual_ranges = []; // Rangos

						// Colores y rangos de Alertas CalHeatmap
						var array_alerts_qual_calheatmap_colors = respuesta.array_alerts_qual_calheatmap_colors;
						var array_alerts_qual_calheatmap_ranges = respuesta.array_alerts_qual_calheatmap_ranges;

						// Datos pronóstico 72 hrs
						var array_receptor_qual_variable_values_p = respuesta.array_receptor_qual_variable_values_p;
						var array_receptor_qual_variable_ranges_p = respuesta.array_receptor_qual_variable_ranges_p;
						var array_receptor_qual_variable_formatted_dates = respuesta.array_receptor_qual_variable_formatted_dates;

						// Alerta (colores y valores mínimos)
						var array_alerts_qual_chart = respuesta.array_alerts_qual_chart;

						// Variable
						var air_quality_variable = respuesta.air_quality_variable;

						// Unidad de variables según configuración Unidades de Reporte
						var unit_qual = respuesta.unit_qual;
						var unit_type_qual = respuesta.unit_type_qual;

						var first_datetime = respuesta.first_datetime;
						var first_datetime_qual = respuesta.first_datetime_qual;

						Object.keys(array_receptor_qual_variable_values_p).forEach(function(date, idx, array) {
							var values_p = array_receptor_qual_variable_values_p[date];

							var datetime = new Date(date);
							var day_name = array_days_name[datetime.getUTCDay()];
							var day_short_name = array_days_short_name[datetime.getUTCDay()];

							Object.keys(values_p).forEach(function(time) {
								var value_p = parseFloat(values_p[time]);

								var hour = time.substring(5, 7);

								if(idx !== array.length - 1){
									qual_receptor_data.push([day_name+" "+array_receptor_qual_variable_formatted_dates[date]+" "+hour+" hrs", value_p]);
									qual_receptor_categories.push(day_short_name+" "+hour+" hrs");
								}
								var timestamp = new Date(date+" "+hour+":00:00").getTime()/1000;
								calheatmap_data_qual[timestamp] = value_p;

								if(array_alerts_qual_calheatmap_ranges.includes(value_p.toString())){
									calheatmap_data_qual_final[timestamp] = value_p + 1;
								} else {
									calheatmap_data_qual_final[timestamp] = value_p;
								}

							});
						});

						Object.keys(array_receptor_qual_variable_ranges_p).forEach(function(date, idx, array) {
							var ranges_p = array_receptor_qual_variable_ranges_p[date];

							var datetime = new Date(date);
							var day_name = array_days_name[datetime.getUTCDay()];
							var day_short_name = array_days_short_name[datetime.getUTCDay()];

							Object.keys(ranges_p).forEach(function(time) {
								var range_p = ranges_p[time];

								var hour = time.substring(5, 7);
								var timestamp = new Date(date+" "+hour+":00:00").getTime()/1000;
								
								if(idx !== array.length - 1){
									chart_qual_ranges[calheatmap_data_qual[timestamp]] = range_p;
								}
								calheatmap_qual_ranges[timestamp] = range_p;
							});
						});

						// Actualización Gráfico (#chart_qual_stat_model)

						// Datos
						//var n_grafico = (Highcharts.charts[0] && Highcharts.charts[1]) ? 2 : 0;
													var n_grafico = 2;
						
						Highcharts.charts[n_grafico].series[0].update({
							data: qual_receptor_data
						});

						// Título
						Highcharts.charts[n_grafico].title.update({
							text: (air_quality_variable) ? air_quality_variable.name_unit_type + ' de ' + air_quality_variable.sigla + ' pronosticada: 24 horas día anterior y próximas 48 horas' : 'Variable de Calidad del aire'
						});

						// Etiquetas Eje Y
						Highcharts.charts[n_grafico].yAxis[0].update({
							labels: {
								formatter: function(){
									return numberFormat(this.value, decimal_numbers, decimals_separator, thousands_separator) + ' (' + unit_qual.nombre + ')';
								}
							}
						});
						
						// Rangos en la zona del Área (colores y valores mínimos de configuración de alertas)
						Highcharts.charts[n_grafico].series[0].update({
							data: qual_receptor_data,
							zones: array_alerts_qual_chart
						});

						// Tooltip
						Highcharts.charts[n_grafico].tooltip.update({
							formatter: function() {
								if(air_quality_variable){
									return  '<span style="font-size: 10px;">' + this.points[0].key + '</span> <br>'
											+ '<span style="color:' + this.points[0].color + '">\u25CF</span> '  + unit_type_qual + ': '
											+ chart_qual_ranges[this.points[0].y] + " (" + unit_qual.nombre + ")";
								} else {
									return  'Sin información disponible';
								}
							}
						});

						Highcharts.charts[n_grafico].update({
							plotOptions: {
								area: {
									dataLabels: {
										formatter: function(){
											return chart_qual_ranges[this.y];
										}
									},
								}
							}
						});

						/*Highcharts.charts[n_grafico].exporting.update({
							filename: (air_quality_variable) ? air_quality_variable.name_unit_type + ' de ' + air_quality_variable.sigla + ' pronosticada: 24 horas día anterior y próximas 48 horas' : 'Variable de Calidad del aire',
							chartOptions: {
								xAxis: [{
									categories: qual_receptor_categories,
								}]
							},
						});*/

						//Highcharts.charts[n_grafico].xAxis[0].update({categories: qual_receptor_categories, labels: { style: { fontSize: '9px'}}, tickInterval: 1 }, true);
						$('#chart_qual_stat_model').highcharts().options.exporting.chartOptions.xAxis[0].categories = qual_receptor_categories
						Highcharts.charts[n_grafico].xAxis[0].update({categories: qual_receptor_categories, labels: { style: { fontSize: '9px'}}, tickInterval: 1 }, true);
						$('#chart_qual_stat_model').highcharts().redraw();

						// CalHeatMap
						// Configuración de variables para fecha de inicio del CalHeatmap
						var first_datetime = (first_datetime_qual) ? first_datetime_qual : first_datetime;
						var date = first_datetime.substring(0, 10); 			// Ej: 2020-01-01
						var year = date.substring(0,4);
						var month =  parseInt(date.substring(5,7)) - 1;			// Puede ser del 1 al 12
						var day = parseInt(date.substring(8,10));				
						var hour = parseInt(first_datetime.substring(11, 13)); 	// Puede ser del 0 al 23

						

						// traigo el ancho de la leyenda del CalHeatmap para mantener su posición en la página al actualizar
						var graph_legend_x = $('div#calheatmap_qual_stat_model > svg > svg.graph-legend').attr('x'); 
						
						$('#calheatmap_qual_stat_model').empty();
						var calheatmap_qual_stat_model = new CalHeatMap();
						calheatmap_qual_stat_model.init({
							itemSelector: "#calheatmap_qual_stat_model",
							domain: "day",
							subDomain: "x_hour",
							range: 4, // en este caso la cantidad de días (puede ser el count del array de datos (por fecha))
							cellSize: 30, // el tamaño de cada celda de hora
							displayLegend: true,
							domainGutter: 10, // distancia entre días 
							tooltip: true,
							verticalOrientation: ($(window).width() < 1070) ? true : false,
							start: new Date(year, month, day, hour),
							domainLabelFormat: array_format_date_calheatmap[AppHelper.settings.dateFormat],
							subDomainTextFormat: "%H",// dependerá del formato de hora del proyecto
							subDomainTitleFormat: {
								empty: "Fuera del rango de pronóstico",
								//filled: "{date}, la concentración de "+ air_quality_variable_stat_model.sigla +" se estima que será de {count} " + unit_qual_stat_model.nombre
								filled: "{date}"
							},
							subDomainDateFormat: function(date) {
								var d = new Date(date);
								var h = d.getHours();
								h = ("0" + h).slice(-2);

								var datetime = d.getTime()/1000; // timestamp

								if(air_quality_variable){
									return "A las " + h + " horas, la concentración estimada de " + air_quality_variable.sigla +" será " + calheatmap_qual_ranges[datetime] + " (" + unit_qual.nombre + ")";
								} else {
									return "Sin información disponible"
								}
							
							},
							/*domainLabelFormat: function(date) {
								
								var d = new Date(date);
								//var datetime = d.getTime()/1000; // timestamp
								var y = d.getFullYear();
								var m = d.getMonth() + 1;
								var d = d.getDate();
								
								var formatted_date = d+"-"+m+"-"+y;
								return formatted_date;

							},*/
							itemName: [unit_qual.nombre, unit_qual.nombre],
							//legend: [0.0001, 0.0005, 0.0010, 0.0050], // sacar minimo y máximo y crear escala de colores en base a esos valores
							legend: array_alerts_qual_calheatmap_ranges,
							legendTitleFormat: {
								//lower: (array_alerts_qual_calheatmap_ranges.length > 0) ? "menos de {min} ({name})" : 'Sin información disponible',
								lower: (array_alerts_qual_calheatmap_ranges.length > 0) ? (Math.min.apply(Math, array_alerts_qual_calheatmap_ranges) > 0) ? "menos de {min} ({name})" : "menor o igual a {min} ({name})" : 'Sin información disponible',
								inner: "entre {down} y {up} ({name})",
								upper: "más de {max} ({name})"
							},
							legendHorizontalPosition: "center",
							legendMargin: [0, 0, 0, 0],
							data: calheatmap_data_qual_final,
							onComplete: function() {
								setTimeout(function(){
									array_alerts_qual_calheatmap_colors.forEach(function(d,i){
										i++;
										d3.selectAll("div#calheatmap_qual_stat_model rect.r" + i).style("fill", d);
									});

									// Conservar posición del CalHeatMap después de actualizar
									if($(window).width() > 1070){
										var domains = $('div#calheatmap_qual_stat_model .graph').children('svg');
										var width = Number(domains.first().attr('width'));
										var x = 0;
										domains.each(function () {
											$(this).attr('x', x);
											x += width;
										});
										$('div#calheatmap_qual_stat_model > svg > svg.graph-legend').attr('x', graph_legend_x);
									} else {
										$('div#calheatmap_qual_stat_model > svg > svg.graph-legend').attr('x', "0");
									}
									

								}, 10);
							}
						});


						// Actualización AppTable
						$('#qual_receptor_stat_model-table').DataTable().destroy();

						var id_air_quality_variable = (air_quality_variable) ? air_quality_variable.id : 0;
						$("#qual_receptor_stat_model-table").appTable({
							source: '/api/list_data_variable/' + id_sector + "/" + id_receptor + "/" + id_air_quality_variable + "/2", // Modelo Estadístico
							columns: [
								{title: "ID", "class": "text-right dt-head-center w50 hide"},
								{title: "Fecha", "class": "text-left dt-head-center", type: "extract-date"},
								{title: "Hora", "class": "text-left dt-head-center"},
								{title: "Alerta", "class": "text-center dt-head-center"},
								{title: "Rango", "class": "text-left dt-head-center"},
								{title: '<i class="fa fa-bars"></i>', "class": "text-center option no_breakline"},
								{title: '', "class": "hide"} // Columna reservada para el contenido del popover del plan de acción
							],
							rowCallback: function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
								var $html_action_plan = $(nRow).find('[data-toggle="popover"]');
								var html_action_plan_content = aData[6];
								$html_action_plan.popover(
									{
										container: 'body',
										trigger:'hover',
										placement: 'left',
										title: 'Plan de Acción',
										html:true,
										//content: $action_plan.attr("data-content")
										content: html_action_plan_content
									}
								);
							},
							order: [1, "asc"]

						});

						
						

						appLoader.hide();
						
					}
				});

			});


		
		// Si el Sector tiene el modelo Neuronal (id 1)
		
																$('#receptor_neur_model').val(4).trigger('change');
							
																$('#air_quality_variable_neur_model').val(8).trigger('change');
							
			// Objeto variable Calidad del aire inicial
			var air_quality_variable_neur_model = {"id":"8","id_air_variable_type":"2","id_unit_type":"15","name":"Di\u00f3xido de azufre","sigla":"SO2","icono":"air_sulfur_dioxide.png","alias":"Diox azufre","deleted":"0","name_variable_type":"air_quality","name_unit_type":"Concentraci\u00f3n"};

			// Unidades de variable según configuración Unidades de Reporte
			var unit_qual_neur_model = {"id":"40","id_tipo_unidad":"15","nombre":"\u00b5g\/m3","nombre_real":"Microgramo por metro c\u00fabico","indicador":null,"deleted":"0"};
			var unit_type_qual_neur_model = "Concentraci\u00f3n";

			var id_sector = 1;
			var id_receptor_neur_model = $("#receptor_neur_model").val();

			// Gráfico
			var qual_receptor_data_neur_model = []; // Datos
			var qual_receptor_categories_neur_model = []; // Categorías
			var chart_qual_ranges_neur_model = []; // Rangos
			
			// CalHeatMap
			var calheatmap_data_qual_neur_model = []; // Datos
			var calheatmap_data_qual_neur_model_final = []; 
			var calheatmap_qual_ranges_neur_model = []; // Rangos

			// Colores y rangos de Alertas CalHeatmap
			var array_alerts_qual_calheatmap_colors_neur_model = ["#6df257","#f6fa3a","#faa500","#ed1515","#8027f2"];
			var array_alerts_qual_calheatmap_ranges_neur_model = ["100","200","300","400"];

			// Datos pronóstico 72 hrs
			var array_receptor_qual_neur_model_values_p = {!! $array_receptor_qual_neur_model_values_p!!}
			var array_receptor_qual_neur_model_ranges_p = {!!$array_receptor_qual_neur_model_ranges_p !!}
			var array_receptor_qual_neur_formatted_dates = {!!$array_receptor_qual_neur_formatted_dates !!}

			// Alerta (colores y valores mínimos)
			var array_alerts_qual_chart_neur_model = [{"color":"#6df257","value":"100"},{"color":"#f6fa3a","value":"200"},{"color":"#faa500","value":"300"},{"color":"#ed1515","value":"400"},{"color":"#8027f2"}];

			Object.keys(array_receptor_qual_neur_model_values_p).forEach(function(date, idx, array) {
				var values_p = array_receptor_qual_neur_model_values_p[date];

				var datetime = new Date(date);
				var day_name = array_days_name[datetime.getUTCDay()];
				var day_short_name = array_days_short_name[datetime.getUTCDay()];

				Object.keys(values_p).forEach(function(time) {
					var value_p = parseFloat(values_p[time]);

					var hour = time.substring(5, 7);

					if(idx !== array.length - 1){
						qual_receptor_data_neur_model.push([day_name+" "+array_receptor_qual_neur_formatted_dates[date]+" "+hour+" hrs", value_p]);
						qual_receptor_categories_neur_model.push(day_short_name+" "+hour+" hrs");
					}
					var timestamp = new Date(date+" "+hour+":00:00").getTime()/1000;
					calheatmap_data_qual_neur_model[timestamp] = value_p;

					if(array_alerts_qual_calheatmap_ranges_neur_model.includes(value_p.toString())){
						calheatmap_data_qual_neur_model_final[timestamp] = value_p + 1;
					} else {
						calheatmap_data_qual_neur_model_final[timestamp] = value_p;
					}

				});
			});

			Object.keys(array_receptor_qual_neur_model_ranges_p).forEach(function(date, idx, array) {
				var ranges_p = array_receptor_qual_neur_model_ranges_p[date];

				var datetime = new Date(date);
				var day_name = array_days_name[datetime.getUTCDay()];
				var day_short_name = array_days_short_name[datetime.getUTCDay()];

				Object.keys(ranges_p).forEach(function(time) {
					var range_p = ranges_p[time];

					var hour = time.substring(5, 7);
					var timestamp = new Date(date+" "+hour+":00:00").getTime()/1000;
					
					if(idx !== array.length - 1){
						chart_qual_ranges_neur_model[calheatmap_data_qual_neur_model[timestamp]] = range_p;
					}
					calheatmap_qual_ranges_neur_model[timestamp] = range_p;
				});
			});


			$('#chart_qual_neur_model').highcharts({
				chart: {
					type: 'area',
					zoomType: 'x',
					panning: true,
					panKey: 'shift',
					/*scrollablePlotArea: {
						minWidth: 600
					},*/
					events: {
						load: function(){

							/*var n_grafico = 0;	
															var n_grafico = 3;
							
							Highcharts.charts[n_grafico].xAxis[0].update({categories: qual_receptor_categories_neur_model, labels: { style: { fontSize: '9px'}}, tickInterval: 1 }, true);
							*/
							if (this.options.chart.forExport) {
								Highcharts.each(this.series, function (series) {
									series.update({
										dataLabels: {
											enabled: true,
										}
									}, false);
								});
								this.redraw();
							}
						}
					}
				},

				title: {
					text: (air_quality_variable_neur_model) ? air_quality_variable_neur_model.name_unit_type + ' de ' + air_quality_variable_neur_model.sigla + ' pronosticada: 24 horas día anterior y próximas 48 horas' : 'Variable de Calidad del aire'
				},

				credits: {
					enabled: false
				},

				xAxis: {
					//labels: {
					//	format: '{value} hrs',
					//},
					minRange: 5,
					title: {
						text: 'Horas'
					},
				},

				yAxis: {
					startOnTick: true,
					endOnTick: false,
					maxPadding: 0.35,
					title: {
						text: null
					},
					labels: {
						formatter: function(){
							if(air_quality_variable_neur_model){
								return numberFormat(this.value, decimal_numbers, decimals_separator, thousands_separator) + ' (' + unit_qual_neur_model.nombre + ')';
							} else {
								return '';
							}						
						},
					},
					min: 0,
					max: 500
				},

				tooltip: {
					useHTML: true,
					//headerFormat: '<span style="font-size: 10px;">{point.key}</span> <br>',
					//pointFormat: '<span style="color:{point.color}">\u25CF</span> ' + 'Concentración: ' + '{point.y} ' + unit_qual_neur_model.nombre,
					formatter: function() {
						
						if(air_quality_variable_neur_model){
							return  '<span style="font-size: 10px;">' + this.points[0].key + '</span> <br>'
								+ '<span style="color:' + this.points[0].color + '">\u25CF</span> '  + unit_type_qual_neur_model + ': '
								+ chart_qual_ranges_neur_model[this.points[0].y] + " (" + unit_qual_neur_model.nombre + ")";
						} else {
							return  'Sin información disponible';
						}

					},
					shared: true
				},

				exporting: {
					filename: (air_quality_variable_neur_model) ? air_quality_variable_neur_model.name_unit_type + ' de ' + air_quality_variable_neur_model.sigla + ' pronosticada: 24 horas día anterior y próximas 48 horas' : 'Variable de Calidad del aire',
					buttons: {
						contextButton: {
							menuItems: [{
								text: "Exportar a imagen (PNG)",
								onclick: function() {
									this.exportChart();
								},
								separator: false
							}]
						}
					},
					chartOptions: {
						xAxis: [{
							categories: qual_receptor_categories_neur_model,
							labels: {
								style: {
									fontSize: '9px'
								},
								tickInterval: 1
							}
						}]
					},
					sourceWidth: 1200
				},

				plotOptions: {
					area: {
						//size: 80,
						allowPointSelect: true,
						cursor: 'pointer',
						dataLabels: {
							enabled: false,
							//format: '<b>{point.name}</b>: {point.y}',
							formatter: function(){
								return chart_qual_ranges_neur_model[this.y];
							},
							style: {
								color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black',
								fontSize: "9px",
								distance: -30
							},
							crop: false
						},
						showInLegend: true
					}
				},

				legend: {
					enabled: false
				},

				series: [{
					accessibility: {
						keyboardNavigation: {
							enabled: false
						}
					},
					data: qual_receptor_data_neur_model,
					//lineColor: Highcharts.getOptions().colors[1],
					//color: '#ff5454',
					fillOpacity: 0, // transparencia para el area
					name: '',
					zones: array_alerts_qual_chart_neur_model
				},
				]

			});

			var n_grafico = 0;	
							var n_grafico = 3;
			
			Highcharts.charts[n_grafico].xAxis[0].update({categories: qual_receptor_categories_neur_model, labels: { style: { fontSize: '9px'}}, tickInterval: 1 }, true);



			// CalHeatMap
			// Configuración de variables para fecha de inicio del CalHeatmap
			var first_datetime = "{!!$first_datetime!!}";
			var date = first_datetime.substring(0, 10); 			// Ej: 2020-01-01
			var year = date.substring(0,4);
			var month =  parseInt(date.substring(5,7)) - 1;			// Puede ser del 1 al 12
			var day = parseInt(date.substring(8,10));				
			var hour = parseInt(first_datetime.substring(11, 13)); 	// Puede ser del 0 al 23

			

			var calheatmap_qual_neur_model = new CalHeatMap();
			calheatmap_qual_neur_model.init({
				itemSelector: "#calheatmap_qual_neur_model",
				domain: "day",
				subDomain: "x_hour",
				range: 4, // en este caso la cantidad de días (puede ser el count del array de datos (por fecha))
				cellSize: 30, // el tamaño de cada celda de hora
				displayLegend: true,
				domainGutter: 10, // distancia entre días 
				tooltip: true,
				verticalOrientation: ($(window).width() < 1070) ? true : false,
				start: new Date(year, month, day, hour),
				domainLabelFormat: array_format_date_calheatmap[AppHelper.settings.dateFormat],
				subDomainTextFormat: "%H",// dependerá del formato de hora del proyecto
				subDomainTitleFormat: {
					empty: "Fuera del rango de pronóstico",
					//filled: "{date}, la concentración de "+ air_quality_variable_neur_model.sigla +" se estima que será de {count} " + unit_qual_neur_model.nombre
					filled: "{date}"
				},
				subDomainDateFormat: function(date) {
					var d = new Date(date);
					var h = d.getHours();
					h = ("0" + h).slice(-2);

					var datetime = d.getTime()/1000; // timestamp

					if(air_quality_variable_neur_model){
						return "A las " + h + " horas, la concentración estimada de " + air_quality_variable_neur_model.sigla +" será " + calheatmap_qual_ranges_neur_model[datetime] + " (" + unit_qual_neur_model.nombre + ")";
					} else {
						return "Sin información disponible"
					}
				
				},
				/*domainLabelFormat: function(date) {
					
					var d = new Date(date);
					//var datetime = d.getTime()/1000; // timestamp
					var y = d.getFullYear();
					var m = d.getMonth() + 1;
					var d = d.getDate();
					
					var formatted_date = d+"-"+m+"-"+y;
					return formatted_date;

				},*/
				itemName: [unit_qual_neur_model.nombre, unit_qual_neur_model.nombre],
				//legend: [0.0001, 0.0005, 0.0010, 0.0050], // sacar minimo y máximo y crear escala de colores en base a esos valores
				legend: array_alerts_qual_calheatmap_ranges_neur_model,
				legendTitleFormat: {
					//lower: (array_alerts_qual_calheatmap_ranges_neur_model.length > 0) ? "menos de {min} ({name})" : 'Sin información disponible',
					lower: (array_alerts_qual_calheatmap_ranges_neur_model.length > 0) ? (Math.min.apply(Math, array_alerts_qual_calheatmap_ranges_neur_model) > 0) ? "menos de {min} ({name})" : "menor o igual a {min} ({name})" : 'Sin información disponible',
					inner: "entre {down} y {up} ({name})",
					upper: "más de {max} ({name})"
				},
				legendHorizontalPosition: "center",
				legendMargin: [0, 0, 0, 0],
				data: calheatmap_data_qual_neur_model_final,
				onComplete: function() { // https://php.developreference.com/article/19345650/cal-heatmap+-+legendColors+as+array+of+color+values%3F
					setTimeout(function(){
						/*['#ffadad','#ff9696','#ff8282','#fc6d6d','#ff5454','#f51818'].forEach(function(d,i){
							d3.selectAll("rect.r" + i).style("fill", d);
						});*/
						array_alerts_qual_calheatmap_colors_neur_model.forEach(function(d,i){
							i++;
							d3.selectAll("div#calheatmap_qual_neur_model rect.r" + i).style("fill", d);
						});
					}, 10);
				}
			});

			var id_air_quality_variable_neur_model = (air_quality_variable_neur_model) ? air_quality_variable_neur_model.id : 0;
			$("#qual_receptor_neur_model-table").appTable({
				source: '/api/list_data_variable/' + id_sector + "/" + id_receptor_neur_model + "/" + id_air_quality_variable_neur_model + "/1", // Modelo Neuronal
				columns: [
					{title: "ID", "class": "text-right dt-head-center w50 hide"},
					{title: "Fecha", "class": "text-left dt-head-center", type: "extract-date"},
					{title: "Hora", "class": "text-left dt-head-center"},
					{title: "Alerta", "class": "text-center dt-head-center"},
					{title: "Rango", "class": "text-left dt-head-center"},
					{title: '<i class="fa fa-bars"></i>', "class": "text-center option no_breakline"},
					{title: '', "class": "hide"} // Columna reservada para el contenido del popover del plan de acción
				],
				rowCallback: function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
					var $html_action_plan = $(nRow).find('[data-toggle="popover"]');
					var html_action_plan_content = aData[6];
					$html_action_plan.popover(
						{
							container: 'body',
							trigger:'hover',
							placement: 'left',
							title: 'Plan de Acción',
							html:true,
							//content: $action_plan.attr("data-content")
							content: html_action_plan_content
						}
					);
				},
				order: [1, "asc"]

			});



			$("#air_quality_variable_neur_model, #receptor_neur_model").on('change', function(){

				var id_air_quality_variable = $("#air_quality_variable_neur_model").val();
				var id_receptor = $("#receptor_neur_model").val();

				$.ajax({
					url: '/api/get_data_by_model',
					type: 'post',
					dataType: 'json',
					data: {
						id_air_quality_variable: id_air_quality_variable,
						id_receptor: id_receptor,
						id_sector: id_sector,
						id_model: 1 // Neuronal
					},beforeSend: function() {
						appLoader.show();
					},
					success: function(respuesta){

						/* Variable Calidad del Aire */

						// Gráfico
						var qual_receptor_data = []; // Datos
						var qual_receptor_categories = []; // Categorías
						var chart_qual_ranges = []; // Rangos
						
						// CalHeatMap
						var calheatmap_data_qual = []; // Datos
						var calheatmap_data_qual_final = []; 
						var calheatmap_qual_ranges = []; // Rangos

						// Colores y rangos de Alertas CalHeatMap
						var array_alerts_qual_calheatmap_colors = respuesta.array_alerts_qual_calheatmap_colors;
						var array_alerts_qual_calheatmap_ranges = respuesta.array_alerts_qual_calheatmap_ranges;

						// Datos pronóstico 72 hrs
						var array_receptor_qual_variable_values_p = respuesta.array_receptor_qual_variable_values_p;
						var array_receptor_qual_variable_ranges_p = respuesta.array_receptor_qual_variable_ranges_p;
						var array_receptor_qual_variable_formatted_dates = respuesta.array_receptor_qual_variable_formatted_dates;

						// Alerta (colores y valores mínimos)
						var array_alerts_qual_chart = respuesta.array_alerts_qual_chart;

						// Variable
						var air_quality_variable = respuesta.air_quality_variable;

						// Unidad de variables según configuración Unidades de Reporte
						var unit_qual = respuesta.unit_qual;
						var unit_type_qual = respuesta.unit_type_qual;

						var first_datetime = respuesta.first_datetime;
						var first_datetime_qual = respuesta.first_datetime_qual;

						Object.keys(array_receptor_qual_variable_values_p).forEach(function(date, idx, array) {
							var values_p = array_receptor_qual_variable_values_p[date];

							var datetime = new Date(date);
							var day_name = array_days_name[datetime.getUTCDay()];
							var day_short_name = array_days_short_name[datetime.getUTCDay()];

							Object.keys(values_p).forEach(function(time) {
								var value_p = parseFloat(values_p[time]);

								var hour = time.substring(5, 7);

								if(idx !== array.length - 1){
									qual_receptor_data.push([day_name+" "+array_receptor_qual_variable_formatted_dates[date]+" "+hour+" hrs", value_p]);
									qual_receptor_categories.push(day_short_name+" "+hour+" hrs");
								}

								var timestamp = new Date(date+" "+hour+":00:00").getTime()/1000;
								calheatmap_data_qual[timestamp] = value_p;

								if(array_alerts_qual_calheatmap_ranges.includes(value_p.toString())){
									calheatmap_data_qual_final[timestamp] = value_p + 1;
								} else {
									calheatmap_data_qual_final[timestamp] = value_p;
								}

							});
						});

						Object.keys(array_receptor_qual_variable_ranges_p).forEach(function(date, idx, array) {
							var ranges_p = array_receptor_qual_variable_ranges_p[date];

							var datetime = new Date(date);
							var day_name = array_days_name[datetime.getUTCDay()];
							var day_short_name = array_days_short_name[datetime.getUTCDay()];

							Object.keys(ranges_p).forEach(function(time) {
								var range_p = ranges_p[time];

								var hour = time.substring(5, 7);
								var timestamp = new Date(date+" "+hour+":00:00").getTime()/1000;
								
								if(idx !== array.length - 1){
									chart_qual_ranges[calheatmap_data_qual[timestamp]] = range_p;
								}
								calheatmap_qual_ranges[timestamp] = range_p;
							});
						});

						// Actualización Gráfico (#chart_qual_neur_model)

						// Datos
						var n_grafico = 0;	
													var n_grafico = 3;
						
						Highcharts.charts[n_grafico].series[0].update({
							data: qual_receptor_data
						});

						// Título
						Highcharts.charts[n_grafico].title.update({
							text: (air_quality_variable) ? air_quality_variable.name_unit_type + ' de ' + air_quality_variable.sigla + ' pronosticada: 24 horas día anterior y próximas 48 horas' : 'Variable de Calidad del aire'
						});

						// Etiquetas Eje Y
						Highcharts.charts[n_grafico].yAxis[0].update({
							formatter: function(){
								return numberFormat(this.value, decimal_numbers, decimals_separator, thousands_separator) + ' (' + unit_qual.nombre + ')';
							}
						});
						
						// Rangos en la zona del Área (colores y valores mínimos de configuración de alertas)
						Highcharts.charts[n_grafico].series[0].update({
							data: qual_receptor_data,
							zones: array_alerts_qual_chart
						});

						// Tooltip
						Highcharts.charts[n_grafico].tooltip.update({
							formatter: function() {
								if(air_quality_variable){
									return  '<span style="font-size: 10px;">' + this.points[0].key + '</span> <br>'
											+ '<span style="color:' + this.points[0].color + '">\u25CF</span> '  + unit_type_qual + ': '
											+ chart_qual_ranges[this.points[0].y] + " (" + unit_qual.nombre + ")";
								} else {
									return  'Sin información disponible';
								}
							}
						});

						Highcharts.charts[n_grafico].update({
							plotOptions: {
								area: {
									dataLabels: {
										formatter: function(){
											return chart_qual_ranges[this.y];
										}
									},
								}
							}
						});

						$('#chart_qual_neur_model').highcharts().options.exporting.chartOptions.xAxis[0].categories = qual_receptor_categories
						Highcharts.charts[n_grafico].xAxis[0].update({categories: qual_receptor_categories, labels: { style: { fontSize: '9px'}}, tickInterval: 1 }, true);
						$('#chart_qual_neur_model').highcharts().redraw();



						// CalHeatMap
						// Configuración de variables para fecha de inicio del CalHeatmap
						var first_datetime = (first_datetime_qual) ? first_datetime_qual : first_datetime;
						var date = first_datetime.substring(0, 10); 			// Ej: 2020-01-01
						var year = date.substring(0,4);
						var month =  parseInt(date.substring(5,7)) - 1;			// Puede ser del 1 al 12
						var day = parseInt(date.substring(8,10));				
						var hour = parseInt(first_datetime.substring(11, 13)); 	// Puede ser del 0 al 23

						

						// traigo el ancho de la leyenda del CalHeatmap para mantener su posición en la página al actualizar
						var graph_legend_x = $('div#calheatmap_qual_neur_model > svg > svg.graph-legend').attr('x'); 
						
						$('#calheatmap_qual_neur_model').empty();
						var calheatmap_qual_neur_model = new CalHeatMap();
						calheatmap_qual_neur_model.init({
							itemSelector: "#calheatmap_qual_neur_model",
							domain: "day",
							subDomain: "x_hour",
							range: 4, // en este caso la cantidad de días (puede ser el count del array de datos (por fecha))
							cellSize: 30, // el tamaño de cada celda de hora
							displayLegend: true,
							domainGutter: 10, // distancia entre días 
							tooltip: true,
							verticalOrientation: ($(window).width() < 1070) ? true : false,
							start: new Date(year, month, day, hour),
							domainLabelFormat: array_format_date_calheatmap[AppHelper.settings.dateFormat],
							subDomainTextFormat: "%H",// dependerá del formato de hora del proyecto
							subDomainTitleFormat: {
								empty: "Fuera del rango de pronóstico",
								//filled: "{date}, la concentración de "+ air_quality_variable_neur_model.sigla +" se estima que será de {count} " + unit_qual_neur_model.nombre
								filled: "{date}"
							},
							subDomainDateFormat: function(date) {
								var d = new Date(date);
								var h = d.getHours();
								h = ("0" + h).slice(-2);

								var datetime = d.getTime()/1000; // timestamp

								if(air_quality_variable){
									return "A las " + h + " horas, la concentración estimada de " + air_quality_variable.sigla +" será " + calheatmap_qual_ranges[datetime] + " (" + unit_qual.nombre + ")";
								} else {
									return "Sin información disponible"
								}
							
							},
							/*domainLabelFormat: function(date) {
								
								var d = new Date(date);
								//var datetime = d.getTime()/1000; // timestamp
								var y = d.getFullYear();
								var m = d.getMonth() + 1;
								var d = d.getDate();
								
								var formatted_date = d+"-"+m+"-"+y;
								return formatted_date;

							},*/
							itemName: [unit_qual.nombre, unit_qual.nombre],
							//legend: [0.0001, 0.0005, 0.0010, 0.0050], // sacar minimo y máximo y crear escala de colores en base a esos valores
							legend: array_alerts_qual_calheatmap_ranges,
							legendTitleFormat: {
								//lower: (array_alerts_qual_calheatmap_ranges.length > 0) ? "menos de {min} ({name})" : 'Sin información disponible',
								lower: (array_alerts_qual_calheatmap_ranges.length > 0) ? (Math.min.apply(Math, array_alerts_qual_calheatmap_ranges) > 0) ? "menos de {min} ({name})" : "menor o igual a {min} ({name})" : 'Sin información disponible',
								inner: "entre {down} y {up} ({name})",
								upper: "más de {max} ({name})"
							},
							legendHorizontalPosition: "center",
							legendMargin: [0, 0, 0, 0],
							data: calheatmap_data_qual_final,
							onComplete: function() {
								setTimeout(function(){
									array_alerts_qual_calheatmap_colors.forEach(function(d,i){
										i++;
										d3.selectAll("div#calheatmap_qual_neur_model rect.r" + i).style("fill", d);
									});

									// Conservar posición del CalHeatMap después de actualizar
									if($(window).width() > 1070){
										var domains = $('div#calheatmap_qual_neur_model .graph').children('svg');
										var width = Number(domains.first().attr('width'));
										var x = 0;
										domains.each(function () {
											$(this).attr('x', x);
											x += width;
										});
										$('div#calheatmap_qual_neur_model > svg > svg.graph-legend').attr('x', graph_legend_x);
									} else {
										$('div#calheatmap_qual_neur_model > svg > svg.graph-legend').attr('x', "0");
									}
									
								}, 10);
							}
						});


						// Actualización AppTable
						$('#qual_receptor_neur_model-table').DataTable().destroy();

						var id_air_quality_variable = (air_quality_variable) ? air_quality_variable.id : 0;
						$("#qual_receptor_neur_model-table").appTable({
							source: '/api/list_data_variable/' + id_sector + "/" + id_receptor + "/" + id_air_quality_variable + "/1", // Modelo Neuronal
							columns: [
								{title: "ID", "class": "text-right dt-head-center w50 hide"},
								{title: "Fecha", "class": "text-left dt-head-center", type: "extract-date"},
								{title: "Hora", "class": "text-left dt-head-center"},
								{title: "Alerta", "class": "text-center dt-head-center"},
								{title: "Rango", "class": "text-left dt-head-center"},
								{title: '<i class="fa fa-bars"></i>', "class": "text-center option no_breakline"},
								{title: '', "class": "hide"} // Columna reservada para el contenido del popover del plan de acción
							],
							rowCallback: function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
								var $html_action_plan = $(nRow).find('[data-toggle="popover"]');
								var html_action_plan_content = aData[6];
								$html_action_plan.popover(
									{
										container: 'body',
										trigger:'hover',
										placement: 'left',
										title: 'Plan de Acción',
										html:true,
										//content: $action_plan.attr("data-content")
										content: html_action_plan_content
									}
								);
							},
							order: [1, "asc"]

						});

						appLoader.hide();
						
					}
				});

			});
			
			//$('#div_stat_model').scrollTo('#h1_stat');

				
	});
	
	
	
</script>

<script>
	$(document).ready(function(){

		$('#excel').click(function(){
			var $form = $('<form id="gg"></form>').attr('action','https://aire.mimasoft.cl/Air_forecast_sectors/get_excel/1').attr('method','POST').attr('target', '_self').appendTo('body');
			$form.submit();
		});

		// Posicionamiento del scroll a una sección de modelo cuando se quiera acceder a este desde el Panel Principal:

		var hash = window.location.hash;
		var top = 0;
		var left = 0;

		 // Modelo Neuronal

			 // Modelo Estadístico

				if(hash == "#div_stat_model"){
					top = $("#div_stat_model").position().top + 330; // Se suman pixeles para ajustar la posición del scroll   OK !!
					left = $("#div_stat_model").position().left;
				} else if(hash == "#div_numerical_model"){
					top = $("#div_numerical_model").position().top + 680;
					left = $("#div_numerical_model").position().left;
				}
			
				

		
		if(top > 0 && left > 0){
			setTimeout(function(){
				$(".scrollable-page").mCustomScrollbar("scrollTo", {y:top, x:left}, {scrollInertia:0});
			},500);
		}

	});
</script>


</div>
            </div>
        </div>

  

    </body>
</html>