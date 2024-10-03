<div class="col-md-6" style="padding-right: 5px; padding-left: 10px; margin-bottom: -10px;">

					<div class="page-title clearfix panel-success">
						<div class="pt10 pb10 pl10 text-left" style="font-size: 15px; padding: 3px;">
							<img src="/images/air_variables/caseta.png" alt="..." heigth='18' width='18'>
							<strong>Romeral</strong>
						</div>
					</div>
					<div class="panel-body p0">
						<table class="table table-bordered">
							<tbody>
								<tr>
									<td colspan="2" style="padding: 0px; padding-left: 5px;"><strong>Próxima hora</strong></td>
								</tr>
								<tr>
									<td style="width: 50%; padding: 0px; padding-left: 5px;">
										<div class="col-sm-12 col-md-12 col-lg-12 p0" style="line-height: 15px;">
											<img src='/images/air_variables/air_wind_speed.png' heigth='18' width='18'>
											@if ($estacion3->count()!=0)
											WS: {{$estacion3[0]->num_rangews}}- m/s
											@else
											WS: - m/s
											@endif
											
										</div>

										<div class="col-sm-12 col-md-12 col-lg-12 p0" style="line-height: 15px;">
											<img src='/images/air_variables/air_wind_direction.png' heigth='18' width='18'>

											@if ($estacion3->count()!=0)
											WD: {{$estacion3[0]->num_datowd}}- m/s
											@else
											WD: - °
											@endif
										</div>

									</td>
									<td style="width: 50%; padding: 0px; padding-left: 5px;">

										<div class="col-sm-12 col-md-12 col-lg-12 p0" style="line-height: 15px;">
											<img src='/images/air_variables/air_sulfur_dioxide.png' heigth='18' width='18'>
											<label style="font-size: 13px; display: inline;">
											@if ($estacion3->count()!=0)
											SO2: {{$estacion3[0]->num_rangeso2}}- µg/m3
											@else
											SO2: - µg/m3
											@endif
											
											</label>
										</div>

										<div class="col-sm-12 col-md-12 col-lg-12 p0" style="line-height: 15px;">
											<img src='/images/air_variables/air_pm10.png' heigth='18' width='18'>
											<label style="font-size: 13px; display: inline;">
											@if ($estacion3->count()!=0)
											PM10: {{$estacion3[0]->num_rangepm10}}- µg/m3
											@else
											PM10: - µg/m3
											@endif
										</label>
										</div>

									</td>
								</tr>


								<tr>
									<td colspan="2" style="padding: 0px; padding-left: 5px;"><strong>Próximo evento crítico</strong></td>
								</tr>
								<!-- PRÓXIMO EVENTO CRITICO MODELO NEURONAL -->

								<tr>
									<td style="padding: 0px; padding-left: 5px; padding-top: 5px">
										<div class="col-sm-12 col-md-12 col-lg-12 p0">
											<img src='/images/air_variables/air_sulfur_dioxide.png' heigth='18' width='18'>
											<label style="font-size: 13px; display: inline;">SO2 (Neuronal): -</label>
										</div>
									</td>

									<td class="text-center" style="">
										<label style="font-size: 13px; display: inline;">Sin información disponible</label>
										<div id="action_plan_content-1-1-1-8" class="hide">
											Sin información disponible </div>
									</td>
								</tr>
								<!-- PRÓXIMO EVENTO CRITICO MODELO ESTADISTICO -->

								<tr>
									<td style="padding: 0px; padding-left: 5px; padding-top: 5px">
										<div class="col-sm-12 col-md-12 col-lg-12 p0">
											<img src='/images/air_variables/air_sulfur_dioxide.png' heigth='18' width='18'>
											<label style="font-size: 13px; display: inline;">SO2 (Estadístico): -</label>
										</div>
									</td>
									<td class="text-center" style="">
										<label style="font-size: 13px; display: inline;">Sin información disponible</label>
										<div id="action_plan_content-1-2-1-8" class="hide">
											Sin información disponible </div>
									</td>
								</tr>
								<!-- PRÓXIMO EVENTO CRITICO MODELO NUMÉRICO -->

								<tr>
									<td style="padding: 0px; padding-left: 5px; padding-top: 5px">
										<div class="col-sm-12 col-md-12 col-lg-12 p0">
											<img src='/images/air_variables/air_sulfur_dioxide.png' heigth='18' width='18'>
											<label style="font-size: 13px; display: inline;">SO2 (Numérico): -</label>
										</div>
									</td>
									<td class="text-center" style="">
										<label style="font-size: 13px; display: inline;">Sin información disponible</label>
										<div id="action_plan_content-1-3-1-8" class="hide">
											Sin información disponible </div>
									</td>
								</tr>



							</tbody>
						</table>
					</div>

				</div>