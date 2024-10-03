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
    AppHelper.baseUrl = "airmining.ml";
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

<script type='text/javascript' src='/assets/js/ayn_handler.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/general_helper.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/app.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/leaflet/leaflet.js?v=1.1'></script>

<script type='text/javascript' src='/assets/js/leaflet-arrows/leaflet-arrows.js?v=1.1'></script>
<script type='text/javascript' src='/assets/js/leaflet-arrows/WindScale.js?v=1.1'></script>

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
                        <li><a href="#l"><i class='fa fa-user mr10'></i>Mi Perfil</a></li>
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

                

      
            
            <div id="page-container" class="box-content">
                <div id="pre-loader">
                    <div id="pre-loade" class="app-loader"><div class="loading"></div></div>
                </div>
                <div class="scrollable-page">
                    <div id="page-content" class="p20 clearfix">

	
		<div class="row">
			<div class="col-md-8">
				<div id="panel_legend" class="panel panel-default p0">
					<div class="panel-body">

					<div class="col-md-1"></div>
											<div class="col-lg-2 col-md-2 col-xs-6 p0">
							<div class="col-lg-2 col-md-2 p0">
								<div class="mt5" style="width: 25px; height: 25px; border: 1px solid black; background-color: #6df257"></div>
							</div>
							<label class="col-lg-10 col-md-10" style="padding-right: 0px;">
								<div class="col-md-12 p0">
									<strong>BUENO</strong>
								</div>
								<div class="col-md-12 p0">
									<strong>entre 0 y 100 µg/m3</strong>
								</div>
							</label>
						</div>
											<div class="col-lg-2 col-md-2 col-xs-6 p0">
							<div class="col-lg-2 col-md-2 p0">
								<div class="mt5" style="width: 25px; height: 25px; border: 1px solid black; background-color: #f6fa3a"></div>
							</div>
							<label class="col-lg-10 col-md-10" style="padding-right: 0px;">
								<div class="col-md-12 p0">
									<strong>REGULAR</strong>
								</div>
								<div class="col-md-12 p0">
									<strong>entre 100 y 200 µg/m3</strong>
								</div>
							</label>
						</div>
											<div class="col-lg-2 col-md-2 col-xs-6 p0">
							<div class="col-lg-2 col-md-2 p0">
								<div class="mt5" style="width: 25px; height: 25px; border: 1px solid black; background-color: #faa500"></div>
							</div>
							<label class="col-lg-10 col-md-10" style="padding-right: 0px;">
								<div class="col-md-12 p0">
									<strong>ALERTA</strong>
								</div>
								<div class="col-md-12 p0">
									<strong>entre 200 y 300 µg/m3</strong>
								</div>
							</label>
						</div>
											<div class="col-lg-2 col-md-2 col-xs-6 p0">
							<div class="col-lg-2 col-md-2 p0">
								<div class="mt5" style="width: 25px; height: 25px; border: 1px solid black; background-color: #ed1515"></div>
							</div>
							<label class="col-lg-10 col-md-10" style="padding-right: 0px;">
								<div class="col-md-12 p0">
									<strong>PREEMERGENCIA</strong>
								</div>
								<div class="col-md-12 p0">
									<strong>entre 300 y 400 µg/m3</strong>
								</div>
							</label>
						</div>
											<div class="col-lg-2 col-md-2 col-xs-6 p0">
							<div class="col-lg-2 col-md-2 p0">
								<div class="mt5" style="width: 25px; height: 25px; border: 1px solid black; background-color: #8027f2"></div>
							</div>
							<label class="col-lg-10 col-md-10" style="padding-right: 0px;">
								<div class="col-md-12 p0">
									<strong>EMERGENCIA</strong>
								</div>
								<div class="col-md-12 p0">
									<strong>más de 400 µg/m3</strong>
								</div>
							</label>
						</div>
										<div class="col-md-1"></div>

					</div>
				</div>
			</div>
			<div class="col-md-4" style="padding-left:0px;">
				<div id="panel_pmca" class="panel panel-default p0">
					<div class="panel-body" style="padding-left:10px;padding-right:10px">
						<table  class="table table-bordered table-responsive mb0">
							<tbody>
								<tr>
									<td class="text-center"><strong>TURNO</strong></td>
									<td class="text-center"><strong>00:00 - 08:00</strong></td>
									<td class="text-center"><strong>08:00 - 16:00</strong></td>
									<td class="text-center"><strong>16:00 - 00:00</strong></td>
								</tr>
								<tr>
									<td class="text-center"><strong>PMCA</strong></td>
									<td class="text-center"><strong>-</strong></td>
									<td class="text-center"><strong>-</strong></td>
									<td class="text-center"><strong>-</strong></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>




		<div id="div_station_charts">
			<div id="div_panel_chart_e1" class="panel panel-default">
				<div class="page-title clearfix">
					<h1>Estación Santa Margarita</h1>
				</div>
				<div class="panel-body p0">
						
					<div class="col-md-12">
						<div id="chart_e1" style="margin: 0 auto;">
							<div style="margin-top: 100px; text-align: center">
								<strong>Sin información disponible</strong>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div id="div_panel_chart_e2" class="panel panel-default">
				<div class="page-title clearfix">
					<h1>Estación Lo Campo</h1>
				</div>
				<div class="panel-body p0">
					
					<div class="col-md-12">
						<div id="chart_e2" style="margin: 0 auto;">
							<div style="margin-top: 100px; text-align: center">
								<strong>Sin información disponible</strong>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		

</div>

<script type="text/javascript">

	$('#page-container > div').removeClass('scrollable-page');

	

	$(document).ready(function(){

		// ADAPTAR ALTURA DE PANELES DE LEYENDA Y GRÁFICOS PARA PANTALLAS GRANDES
		var height_panel_legend = $("#panel_legend").height();
		var height_panel_pmca = $("#panel_pmca").height();
		var height_legend_pmca = Math.max(height_panel_legend, height_panel_pmca);
		$('#panel_legend, #panel_pmca').css('min-height', height_legend_pmca + 'px');

		var height_window = $(window).height();
		var height_topbar = $('#navbar').height();
		var height_between_panels = 20; // px
		var height_div_station_charts = height_window - height_topbar - height_legend_pmca - (height_between_panels * 2);
		
		$('#div_station_charts').css('max-height', height_div_station_charts+'px');
		$('#div_station_charts').css('overflow', 'hidden');

		var height_div_charts = (height_div_station_charts / 2) - height_between_panels;

		$('#div_panel_chart_e1, #div_panel_chart_e2').css('max-height', height_div_charts+'px');
		$('#div_panel_chart_e1, #div_panel_chart_e2').css('overflow', 'hidden');

		//var charts_height = height_div_charts  - (height_between_panels * 2);
		var height_page_title = $(".page-title").height();
		var charts_height = height_div_charts - height_page_title;


	
		// GENERAL SETTINGS
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


		Highcharts.Tooltip.prototype.hide = function(){}; // MANTENER TOOLTIPS SIEMPRE VISIBLES CUANDO EL CURSOR ESTÁ FUERA DEL FOCO DEL GRÁFICO
		var chart_categories = []; // CATEGORÍAS (USADAS PARA AMBOS MODELOS Y GRÁFICOS)


		/* GRÁFICO ESTACIÓN SANTA MARGARITA */

		// DATOS MODELO NEURONAL
		var chart_e1_data_neur_model = []; // DATOS
		var chart_e1_ranges_neur_model = []; // RANGOS
		var chart_e1_timestamp_values_p_neur_model = []; // DATOS, KEY: TIMESTAMP, VALUE: VALOR (PARA SETEAR RANGOS)

		// DATOS PRONÓSTICO 48 HORAS
		var chart_e1_neur_model_values_p = {!!$array_receptor_e1_neur_variable_values_p !!};
        var chart_e1_neur_model_ranges_p = {!!$array_receptor_e1_neur_variable_ranges_p !!};
        var chart_e1_neur_model_formatted_dates = {!!$array_receptor_formatted_dates!!}

		// ALERTA (COLORES Y VALORES MÍNIMOS, USADOS PARA AMBOS MODELOS Y GRÁFICOS)
		var array_alerts = [{"color":"#6df257","value":"100"},{"color":"#f6fa3a","value":"200"},{"color":"#faa500","value":"300"},{"color":"#ed1515","value":"400"},{"color":"#8027f2"}];

		Object.keys(chart_e1_neur_model_values_p).forEach(function(date, idx, array) {
			var values_p = chart_e1_neur_model_values_p[date];

			var datetime = new Date(date);
			var day_name = array_days_name[datetime.getUTCDay()];
			var day_short_name = array_days_short_name[datetime.getUTCDay()];

			Object.keys(values_p).forEach(function(time) {
				var value_p = parseFloat(values_p[time]);
				var hour = time.substring(5, 7);

				chart_e1_data_neur_model.push([chart_e1_neur_model_formatted_dates[date]+" "+hour+":00 hrs", value_p]);
				chart_categories.push(day_short_name+" "+hour+" hrs");
				
				var timestamp = new Date(date+" "+hour+":00:00").getTime()/1000;
				chart_e1_timestamp_values_p_neur_model[timestamp] = value_p;
			});
		});

		Object.keys(chart_e1_neur_model_ranges_p).forEach(function(date, idx, array) {
			var ranges_p = chart_e1_neur_model_ranges_p[date];

			var datetime = new Date(date);
			var day_name = array_days_name[datetime.getUTCDay()];
			var day_short_name = array_days_short_name[datetime.getUTCDay()];

			Object.keys(ranges_p).forEach(function(time) {
				var range_p = ranges_p[time];

				var hour = time.substring(5, 7);
				var timestamp = new Date(date+" "+hour+":00:00").getTime()/1000;
				
				chart_e1_ranges_neur_model[chart_e1_timestamp_values_p_neur_model[timestamp]] = range_p;
			});
		});


		// DATOS MODELO NUMÉRICO
		var chart_e1_data_num_model = []; // DATOS
		var chart_e1_ranges_num_model = []; // RANGOS
		var chart_e1_timestamp_values_p_num_model = []; // DATOS, KEY: TIMESTAMP, VALUE: VALOR (PARA SETEAR RANGOS)

		// DATOS PRONÓSTICO 48 HORAS
		var chart_e1_num_model_values_p = {!!$array_receptor_e1_num_variable_values_p !!};
        var chart_e1_num_model_ranges_p = {!!$array_receptor_e1_num_variable_ranges_p !!};
        var chart_e1_num_formatted_dates = {!!$array_receptor_formatted_dates !!};

		Object.keys(chart_e1_num_model_values_p).forEach(function(date, idx, array) {
			var values_p = chart_e1_num_model_values_p[date];

			var datetime = new Date(date);
			var day_name = array_days_name[datetime.getUTCDay()];
			var day_short_name = array_days_short_name[datetime.getUTCDay()];

			Object.keys(values_p).forEach(function(time) {
				var value_p = parseFloat(values_p[time]);
				var hour = time.substring(5, 7);

				chart_e1_data_num_model.push([chart_e1_num_formatted_dates[date]+" "+hour+":00 hrs", value_p]);
				
				var timestamp = new Date(date+" "+hour+":00:00").getTime()/1000;
				chart_e1_timestamp_values_p_num_model[timestamp] = value_p;
			});
		});

		Object.keys(chart_e1_num_model_ranges_p).forEach(function(date, idx, array) {
			var ranges_p = chart_e1_num_model_ranges_p[date];

			var datetime = new Date(date);
			var day_name = array_days_name[datetime.getUTCDay()];
			var day_short_name = array_days_short_name[datetime.getUTCDay()];

			Object.keys(ranges_p).forEach(function(time) {
				var range_p = ranges_p[time];

				var hour = time.substring(5, 7);
				var timestamp = new Date(date+" "+hour+":00:00").getTime()/1000;
				
				chart_e1_ranges_num_model[chart_e1_timestamp_values_p_num_model[timestamp]] = range_p;
			});
		});


		$('#chart_e1').highcharts('StockChart', {
			chart: {
				height: charts_height,
				marginBottom: 0,

				events: {
					load: function() {

						var chart = this;
						var points = [];
						var current_date = new Date();
						var current_time = current_date.getHours();
						// SETEO DE PUNTOS A SER SELECCIONADOS
						for (var i = 0; i < chart.series.length - 1; i++) {
							//console.log(chart.series[i].data);
							points.push(chart.series[i].data[current_time]); // CONTROLAR POSICIÓN INICIAL DEL CROSSHAIR Y TOOLTIPS
						}
						chart.xAxis[0].drawCrosshair(null, points[0]); // MOSTRAR EL CROSSHAIR
						chart.tooltip.refresh(points); // REFRESCANDO TOOLTIP CON NUEVOS PUNTOS

						setInterval(function(){ 

							chart.xAxis[0].removePlotLine('plot-line-1');
							var points = [];
							var current_date = new Date();
							var current_time = current_date.getHours();
							// SETEO DE PUNTOS A SER SELECCIONADOS
							for (var i = 0; i < chart.series.length - 1; i++) {
								//console.log(chart.series[i].data);
								points.push(chart.series[i].data[current_time]); // CONTROLAR POSICIÓN INICIAL DEL CROSSHAIR Y TOOLTIPS
							}
							chart.xAxis[0].drawCrosshair(null, points[0]); // MOSTRAR EL CROSSHAIR
							chart.tooltip.refresh(points); // REFRESCANDO TOOLTIP CON NUEVOS PUNTOS

						}, 15000); // CADA 15 SEGUNDOS
					}
				}
			},
			credits: {
				enabled: false
			},
			scrollbar: {
				enabled: false
			},
			rangeSelector: {
				enabled: false
			},
			tooltip: {
				//crosshairs: [true, true],
				formatter: function() {

					var texto_fecha = '';
					return [texto_fecha].concat('');
					
					/*
					var texto_fecha = '<b><span style="font-size: 15px;">' + this.points[0].key; + '</span></b>';
					return [texto_fecha].concat(
						this.points ?
							this.points.map(function (point) {
								if(point.series.name == "Neuronal"){
									return  '<b><span style="font-size: 15px;">' + point.series.name + '</span></b><br>'
									+ '<span style="font-size: 15px;">' + chart_e1_ranges_neur_model[point.y] + " (" + "µg/m3" + ")" + '</span>';
								} else {
									return  '<b><span style="font-size: 15px;">' + point.series.name + '</span></b><br>'
									+ '<span style="font-size: 15px;">' + chart_e1_ranges_num_model[point.y] + " (" + "µg/m3" + ")" + '</span>';
								}
							}) : []
					);*/
				},
				/*style: {
					fontSize: "30px"
				},*/
				useHTML: true,
				// valueDecimals: 2,
				split: true
			},
			exporting: {
				enabled: false
			},
			xAxis: {
				//crosshair: true
				crosshair: {
					id: 'plot-line-1',
					width: 2,
					color: 'black',
					//dashStyle: 'shortdot'
				},
				//type: 'datetime',
				labels:{
					formatter:function(){
						return chart_categories[this.value];
					}
				},
				tickInterval: 1,
			},
			yAxis: [{
				labels: {
					formatter: function () {
						//return numberFormat(this.value, decimal_numbers, decimals_separator, thousands_separator) + "µg/m3";
						//return (this.value > 0 ? '+' : '') + this.value + '%';
					}
				},
				lineColor: 'silver',
				lineWidth: 1,
				min: 0,
				max: 500,
				tickInterval: 100
			}, {
				labels: {
					formatter: function () {
						return numberFormat(this.value, decimal_numbers, decimals_separator, thousands_separator) /*+ " µg/m3"*/;
						//return this.value;
					}
				},
				lineColor: 'silver',
				lineWidth: 1,
				linkedTo: 0,
				opposite: false,
				/*plotLines: [{
					value: 0,
					width: 2,
					color: 'silver'
				}],*/
				min: 0,
				max: 500,
				tickInterval: 100
			}],
			legend: {
				enabled: false,
				y: -20,
				floating: true
			},
			plotOptions: {
				series: {
					//compare: 'percent'
					//showInNavigator: true,
					connectNulls: false,
					marker: {
						enabled: true,
						radius: 4
					},
					point: {
						events: {
							mouseOver: function () {
								var chart =  this.series.chart;
								var axis = chart.xAxis[0];
								axis.removePlotLine('plot-line-1');
								axis.addPlotLine({
									id: 'plot-line-1',
									value: this.x,
									width: 2,
									color: 'black',
									zIndex: 3
								});
							}
						}
					}
				}
			},
			series: [
				{
					accessibility: {
						keyboardNavigation: {
							enabled: false
						}
					},
					data: chart_e1_data_neur_model,
					//lineColor: Highcharts.getOptions().colors[1],
					//color: '#ff5454',
					fillOpacity: 0, // TRANSPARENCIA PARA EL ÁREA
					name: 'Neuronal',
					zones: array_alerts
				},
				{
					accessibility: {
						keyboardNavigation: {
							enabled: false
						}
					},
					data: chart_e1_data_num_model,
					//lineColor: Highcharts.getOptions().colors[1],
					//color: '#ff5454',
					fillOpacity: 0, // TRANSPARENCIA PARA EL ÁREA
					name: 'Numérico',
					zones: array_alerts
				}
			]
		});



		/* GRÁFICO ESTACIÓN LO CAMPO */

		// DATOS MODELO NEURONAL
		var chart_e2_data_neur_model = []; // DATOS
		var chart_e2_ranges_neur_model = []; // RANGOS
		var chart_e2_timestamp_values_p_neur_model = []; // DATOS, KEY: TIMESTAMP, VALUE: VALOR (PARA SETEAR RANGOS)

		// DATOS PRONÓSTICO 48 HORAS
		var chart_e2_neur_model_values_p = {!!$array_receptor_e2_neur_variable_values_p!!};
        var chart_e2_neur_model_ranges_p = {!!$array_receptor_e2_neur_variable_ranges_p !!};
        var chart_e2_neur_formatted_dates = {!!$array_receptor_formatted_dates!!}
										 

		// ALERTA (COLORES Y VALORES MÍNIMOS, USADOS PARA AMBOS MODELOS Y GRÁFICOS)
		var array_alerts = [{"color":"#6df257","value":"100"},{"color":"#f6fa3a","value":"200"},{"color":"#faa500","value":"300"},{"color":"#ed1515","value":"400"},{"color":"#8027f2"}];

		Object.keys(chart_e2_neur_model_values_p).forEach(function(date, idx, array) {
			var values_p = chart_e2_neur_model_values_p[date];

			var datetime = new Date(date);
			var day_name = array_days_name[datetime.getUTCDay()];
			var day_short_name = array_days_short_name[datetime.getUTCDay()];

			Object.keys(values_p).forEach(function(time) {
				var value_p = parseFloat(values_p[time]);
				var hour = time.substring(5, 7);

				chart_e2_data_neur_model.push([chart_e2_neur_formatted_dates[date]+" "+hour+":00 hrs", value_p]);
				chart_categories.push(day_short_name+" "+hour+" hrs");
				
				var timestamp = new Date(date+" "+hour+":00:00").getTime()/1000;
				chart_e2_timestamp_values_p_neur_model[timestamp] = value_p;
			});
		});

		Object.keys(chart_e2_neur_model_ranges_p).forEach(function(date, idx, array) {
			var ranges_p = chart_e2_neur_model_ranges_p[date];

			var datetime = new Date(date);
			var day_name = array_days_name[datetime.getUTCDay()];
			var day_short_name = array_days_short_name[datetime.getUTCDay()];

			Object.keys(ranges_p).forEach(function(time) {
				var range_p = ranges_p[time];

				var hour = time.substring(5, 7);
				var timestamp = new Date(date+" "+hour+":00:00").getTime()/1000;
				
				chart_e2_ranges_neur_model[chart_e2_timestamp_values_p_neur_model[timestamp]] = range_p;
			});
		});


		// DATOS MODELO NUMÉRICO
		var chart_e2_data_num_model = []; // DATOS
		var chart_e2_ranges_num_model = []; // RANGOS
		var chart_e2_timestamp_values_p_num_model = []; // DATOS, KEY: TIMESTAMP, VALUE: VALOR (PARA SETEAR RANGOS)

		// DATOS PRONÓSTICO 48 HORAS
		var chart_e2_num_model_values_p = {!!$array_receptor_e2_num_variable_values_p !!};
        var chart_e2_num_model_ranges_p = {!!$array_receptor_e2_num_variable_ranges_p !!};
        var chart_e2_num_formatted_dates = {!!$array_receptor_formatted_dates !!};

		Object.keys(chart_e2_num_model_values_p).forEach(function(date, idx, array) {
			var values_p = chart_e2_num_model_values_p[date];

			var datetime = new Date(date);
			var day_name = array_days_name[datetime.getUTCDay()];
			var day_short_name = array_days_short_name[datetime.getUTCDay()];

			Object.keys(values_p).forEach(function(time) {
				var value_p = parseFloat(values_p[time]);
				var hour = time.substring(5, 7);

				chart_e2_data_num_model.push([chart_e2_num_formatted_dates[date]+" "+hour+":00 hrs", value_p]);
				
				var timestamp = new Date(date+" "+hour+":00:00").getTime()/1000;
				chart_e2_timestamp_values_p_num_model[timestamp] = value_p;
			});
		});

		Object.keys(chart_e2_num_model_ranges_p).forEach(function(date, idx, array) {
			var ranges_p = chart_e2_num_model_ranges_p[date];

			var datetime = new Date(date);
			var day_name = array_days_name[datetime.getUTCDay()];
			var day_short_name = array_days_short_name[datetime.getUTCDay()];

			Object.keys(ranges_p).forEach(function(time) {
				var range_p = ranges_p[time];

				var hour = time.substring(5, 7);
				var timestamp = new Date(date+" "+hour+":00:00").getTime()/1000;
				
				chart_e2_ranges_num_model[chart_e2_timestamp_values_p_num_model[timestamp]] = range_p;
			});
		});

		$('#chart_e2').highcharts('StockChart', {
			chart: {
				height: charts_height,
				marginBottom: 0,
				events: {
					load: function() {

						var chart = this;
						var points = [];
						var current_date = new Date();
						var current_time = current_date.getHours();
						// SETEO DE PUNTOS A SER SELECCIONADOS
						for (var i = 0; i < chart.series.length - 1; i++) {
							//console.log(chart.series[i].data);
							points.push(chart.series[i].data[current_time]); // CONTROLAR POSICIÓN INICIAL DEL CROSSHAIR Y TOOLTIPS
						}
						chart.xAxis[0].drawCrosshair(null, points[0]); // MOSTRAR EL CROSSHAIR
						chart.tooltip.refresh(points); // REFRESCANDO TOOLTIP CON NUEVOS PUNTOS

						setInterval(function(){ 

							chart.xAxis[0].removePlotLine('plot-line-1');
							var points = [];
							var current_date = new Date();
							var current_time = current_date.getHours();
							// SETEO DE PUNTOS A SER SELECCIONADOS
							for (var i = 0; i < chart.series.length - 1; i++) {
								//console.log(chart.series[i].data);
								points.push(chart.series[i].data[current_time]); // CONTROLAR POSICIÓN INICIAL DEL CROSSHAIR Y TOOLTIPS
							}
							chart.xAxis[0].drawCrosshair(null, points[0]); // MOSTRAR EL CROSSHAIR
							chart.tooltip.refresh(points); // REFRESCANDO TOOLTIP CON NUEVOS PUNTOS

						}, 15000); // CADA 15 SEGUNDOS
					}
				}
			},
			credits: {
				enabled: false
			},
			scrollbar: {
				enabled: false
			},
			rangeSelector: {
				enabled: false
			},
			tooltip: {
				//crosshairs: [true, true],
				formatter: function() {

					
					var texto_fecha = '';
					return [texto_fecha].concat('');
					
					
					/*
					var texto_fecha = '<b><span style="font-size: 15px;">' + this.points[0].key; + '</span></b>';
					return [texto_fecha].concat(
						this.points ?
							this.points.map(function (point) {
								if(point.series.name == "Neuronal"){
									return  '<b><span style="font-size: 15px;">' + point.series.name + '</span></b><br>'
									+ '<span style="font-size: 15px;">' + chart_e2_ranges_neur_model[point.y] + " (" + "µg/m3" + ")" + '</span>';
								} else {
									return  '<b><span style="font-size: 15px;">' + point.series.name + '</span></b><br>'
									+ '<span style="font-size: 15px;">' + chart_e2_ranges_num_model[point.y] + " (" + "µg/m3" + ")" + '</span>';
								}
							}) : []
					);*/
				},
				/*style: {
					fontSize: "30px"
				},*/
				useHTML: true,
				// valueDecimals: 2,
				split: true
			},
			exporting: {
				enabled: false
			},
			xAxis: {
				//crosshair: true
				crosshair: {
					id: 'plot-line-1',
					width: 2,
					color: 'black',
					//dashStyle: 'shortdot'
				},
				//type: 'datetime',
				labels:{
					formatter:function(){
						return chart_categories[this.value];
					}
				},
				tickInterval: 1,
			},
			yAxis: [{
				labels: {
					formatter: function () {
						//return numberFormat(this.value, decimal_numbers, decimals_separator, thousands_separator) + "µg/m3";
						//return (this.value > 0 ? '+' : '') + this.value + '%';
					}
				},
				lineColor: 'silver',
				lineWidth: 1,
				min: 0,
				max: 500,
				tickInterval: 100
			}, {
				labels: {
					formatter: function () {
						return numberFormat(this.value, decimal_numbers, decimals_separator, thousands_separator) /*+ " µg/m3"*/;
						//return this.value;
					}
				},
				lineColor: 'silver',
				lineWidth: 1,
				linkedTo: 0,
				opposite: false,
				/*plotLines: [{
					value: 0,
					width: 2,
					color: 'silver'
				}],*/
				min: 0,
				max: 500,
				tickInterval: 100
			}],
			legend: {
				enabled: false,
				y: -20,
				floating: true
			},
			plotOptions: {
				series: {
					//compare: 'percent'
					//showInNavigator: true,
					connectNulls: false,
					marker: {
						enabled: true,
						radius: 4
					},
					point: {
						events: {
							mouseOver: function () {
								var chart =  this.series.chart;
								var axis = chart.xAxis[0];
								axis.removePlotLine('plot-line-1');
								axis.addPlotLine({
									id: 'plot-line-1',
									value: this.x,
									width: 2,
									color: 'black',
									zIndex: 3
								});
							}
						}
					}
				}
			},
			series: [
				{
					accessibility: {
						keyboardNavigation: {
							enabled: false
						}
					},
					data: chart_e2_data_neur_model,
					//lineColor: Highcharts.getOptions().colors[1],
					//color: '#ff5454',
					fillOpacity: 0, // TRANSPARENCIA PARA EL ÁREA
					name: 'Neuronal',
					zones: array_alerts
				},
				{
					accessibility: {
						keyboardNavigation: {
							enabled: false
						}
					},
					data: chart_e2_data_num_model,
					//lineColor: Highcharts.getOptions().colors[1],
					//color: '#ff5454',
					fillOpacity: 0, // TRANSPARENCIA PARA EL ÁREA
					name: 'Numérico',
					zones: array_alerts
				}
			]
		});

		// ACTUALIZAR VISTA CADA 24 HORAS
		setInterval(function(){ 
			var now = new Date();
			//console.log(now.getHours());
			if (now.getHours() == 0 && now.getMinutes() == 0) {
				window.location.reload();
			}
		}, 60000); // CADA 60 SEGUNDOS

		// OCULTAR NAVEGADOR EN AMBOS GRÁFICOS
		$(".highcharts-navigator, .highcharts-areaspline-series, .highcharts-navigator-xaxis, .highcharts-navigator-yaxis").remove();
		//$('#chart_e1, #chart_e2').highcharts().reflow();
	});
</script>


            </div>
        </div>
        
    </div>

</body>

</html>