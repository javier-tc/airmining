@extends('layouts.appgraf')
@section('content')
<meta http-equiv="refresh" content="300" > 


			<div class="col-md-8">
				<div id="panel_legend" class="panel panel-default p0" style="min-height: 102px">
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
									
									
									@IF($sinopticos[0]->sin_cma1==1)
									<td class="text-center"><strong><label class="label large" style="background-color: #91d052;"> <span style="display: inline-block;">Bajo</span> </label></strong></td>		
									@ELSEIF($sinopticos[0]->sin_cma1==2)
									<td class="text-center"><strong><label class="label large" style="background-color: #fbdb66;"> <span style="display: inline-block;">Medio</span> </label></strong></td>
									@ELSEIF($sinopticos[0]->sin_cma1==3)
									<td class="text-center"><strong><label class="label large" style="background-color: #f0ad4e;"> <span style="display: inline-block;">Alto</span> </label></strong></td>
									@ELSEIF($sinopticos[0]->sin_cma1==4)
									<td class="text-center"><strong><label class="label large" style="background-color: #fb0007;"> <span style="display: inline-block;">Muy alto</span> </label></strong></td>
									@ELSE
									<td class="text-center">{{$sinopticos[0]->sin_cma1}}</td>
									@ENDIF

									@IF($sinopticos[0]->sin_cma2==1)
									<td class="text-center"><strong><label class="label large" style="background-color: #91d052;"> <span style="display: inline-block;">Bajo</span> </label></strong></td>		
									@ELSEIF($sinopticos[0]->sin_cma2==2)
									<td class="text-center"><strong><label class="label large" style="background-color: #fbdb66;"> <span style="display: inline-block;">Medio</span> </label></strong></td>
									@ELSEIF($sinopticos[0]->sin_cma2==3)
									<td class="text-center"><strong><label class="label large" style="background-color: #f0ad4e;"> <span style="display: inline-block;">Alto</span> </label></strong></td>
									@ELSEIF($sinopticos[0]->sin_cma2==4)
									<td class="text-center"><strong><label class="label large" style="background-color: #fb0007;"> <span style="display: inline-block;">Muy alto</span> </label></strong></td>
									@ELSE
									<td class="text-center">{{$sinopticos[0]->sin_cma2}}</td>
									@ENDIF

									@IF($sinopticos[0]->sin_cma3==1)
									<td class="text-center"><strong><label class="label large" style="background-color: #91d052;"> <span style="display: inline-block;">Bajo</span> </label></strong></td>		
									@ELSEIF($sinopticos[0]->sin_cma3==2)
									<td class="text-center"><strong><label class="label large" style="background-color: #fbdb66;"> <span style="display: inline-block;">Medio</span> </label></strong></td>
									@ELSEIF($sinopticos[0]->sin_cma3==3)
									<td class="text-center"><strong><label class="label large" style="background-color: #f0ad4e;"> <span style="display: inline-block;">Alto</span> </label></strong></td>
									@ELSEIF($sinopticos[0]->sin_cma3==4)
									<td class="text-center"><strong><label class="label large" style="background-color: #fb0007;"> <span style="display: inline-block;">Muy alto</span> </label></strong></td>
									@ELSE
									<td class="text-center">{{$sinopticos[0]->sin_cma3}}</td>
									@ENDIF
									
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<!--graficas	 -->
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
		<!--end graficas -->


		


@stop
@section('js')
    <script type="text/javascript" src="{{asset('js/consultas.js') }}"> </script>
@stop
    
    
