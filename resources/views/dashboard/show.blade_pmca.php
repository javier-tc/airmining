@extends('layouts.appx')
@section('content')
<div class="panel">
	<div class="panel-default">
		<div class="page-title clearfix">
			<h1>Panel Principal - Proyecto {{ $nombre_proyecto}}</h1>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="page-title clearfix panel-success">
					<div class="text-left" style="font-size: 15px; padding: 3px; margin-left: 5px;">
						<strong>Datos Sinópticos</strong>
					</div>
				</div>
				<div class="col-md-6" style="padding-right: 10px; padding-left: 10px; margin-bottom: -10px;">
					<div class="panel-body p0">
						<table class="table table-bordered">
							<tbody>
								<tr>
									<td colspan="2" style="width: 33%;" class="text-center"><strong>PMCA</strong></td>
									<td style="width: 33%;" class="text-center"><strong>Ventilación de gases</strong></td>
									<td style="width: 33%;" class="text-center"><strong>Promedio hora SO2 [ug/m3]</strong></td>
								</tr>
								<tr>
									<td class="text-center">1</td>
									<td class="text-center"><label class="label large" style="background-color: #91d052;"> <span style="width: 80px; display: inline-block;">Bajo</span> </label></td>
									<td class="text-center">Buena</td>
									<td class="text-center">
										< 100</td>
								</tr>
								<tr>
									<td class="text-center">2</td>
									<td class="text-center"><label class="label large" style="background-color: #fbdb66;"> <span style="width: 80px; display: inline-block;">Medio</span> </label></td>
									<td class="text-center">Buena a regular</td>
									<td class="text-center">
										< 200</td>
								</tr>
								<tr>
									<td class="text-center">3</td>
									<td class="text-center"><label class="label large" style="background-color: #f0ad4e;"> <span style="width: 80px; display: inline-block;">Alto</span> </label></td>
									<td class="text-center">Regular</td>
									<td class="text-center">
										< 300</td>
								</tr>
								<tr>
									<td class="text-center">4</td>
									<td class="text-center"><label class="label large" style="background-color: #fb0007;"> <span style="width: 80px; display: inline-block;">Muy Alto</span> </label></td>
									<td class="text-center">Mala</td>
									<td class="text-center">> = 300</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="col-md-6" style="padding-right: 10px; padding-left: 10px; margin-bottom: -10px;">
					<div class="panel-body p0">
						<table class="table table-bordered mb0">
							<tbody>
								<tr>
									<td colspan="3" style="width: 100%"; class=" text-center"><strong>PMCA pronosticado para hoy</strong></td>
								</tr>
								<tr>
									<td style="width: 33%;" class="text-center"><strong>Rango horario</strong></td>
									<td style="width: 33%;" class="text-center"><strong>PMCA</strong></td>
									<td style="width: 33%;" class="text-center"><strong>Probabilidad</strong></td>
								</tr>
								<tr>
									<td style="width: 33%;" class="text-center"><strong>00:00 - 08:00</strong></td>
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
									<td style="width: 33%;" class="text-center"><strong>{{$sinopticos[0]->sin_prob1}}</strong></td>
								</tr>
								<tr>
									<td style="width: 33%;" class="text-center"><strong>08:00 - 16:00</strong></td>
									
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
									<td style="width: 33%;" class="text-center"><strong>{{$sinopticos[0]->sin_prob2}}</strong></td>
								</tr>
								<tr>
									<td style="width: 33%;" class="text-center"><strong>16:00 - 00:00</strong></td>
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
									<td style="width: 33%;" class="text-center"><strong>{{$sinopticos[0]->sin_prob3}}</strong></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!--fin row -->

			<div class="row">


			


									



			@foreach ($data_estaciones as $data)
				@include('dashboard.table1')
            @endforeach
				

			</div><!-- row-->

			








		</div>
	</div>
</div>

@stop