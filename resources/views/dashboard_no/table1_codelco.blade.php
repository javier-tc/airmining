<div class="col-md-6" style="padding-right: 5px; padding-left: 10px; margin-bottom: -10px;">

					<div class="page-title clearfix panel-success">
						<div class="pt10 pb10 pl10 text-left" style="font-size: 15px; padding: 3px;">
							<img src="/images/air_variables/caseta.png" alt="..." heigth='18' width='18'>
							<strong>{{$data[0]->nombre}}</strong>
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
											<img src='/images/air_variables/air_sulfur_dioxide.png' heigth='18' width='18'>
											<label style="font-size: 13px; display: inline;">
										
											SO2: {{$data[0]->so2}} µg/m3
											
											
											</label>
										</div>

										

									</td>
								</tr>


								<tr>
									<td colspan="2" style="padding: 0px; padding-left: 5px;"><strong>Próximo evento crítico</strong></td>
								</tr>
								<!-- PRÓXIMO EVENTO CRITICO MODELO NEURONAL -->

								<tr >
									<td style="padding: 0px; padding-left: 5px; padding-top: 5px">
										<div class="col-sm-12 col-md-12 col-lg-12 p0">
											<img src='/images/air_variables/air_sulfur_dioxide.png' heigth='18' width='18'>
											<label style="font-size: 13px; display: inline;"> SO2 (Neuronal):
											@if ($data[0]->so2_neu ==1 or $data[0]->so2_neu==null )
											-
											@else											
											Hoy a las {{$hr}} horas
											@endif
											
											</label>
										</div>
									</td>

									<td class="text-center" >
										<label style="font-size: 13px; display: inline;">

										@if ($data[0]->so2_neu ==1 or $data[0]->so2_neu==null )
										<label>No hay próximos eventos pronosticados</label>
										@elseif ($data[0]->so2_neu ==2)
										<label class="label large" style="background-color:#fbdb66">Regular</label>
										@elseif ($data[0]->so2_neu ==3)
										<label class="label large" style="background-color:#faa500">Alerta</label>
										@elseif ($data[0]->so2_neu ==4)
										<label class="label large" style="background-color:#ed1515">Preemergencia</label>	
										@endif
										
									
									
									
									
									</label>
										<div id="action_plan_content-1-1-1-8" class="hide">
											</div>
									</td>
								</tr>
								<!-- PRÓXIMO EVENTO CRITICO MODELO ESTADISTICO -->

								<tr>
									<td style="padding: 0px; padding-left: 5px; padding-top: 5px">
										<div class="col-sm-12 col-md-12 col-lg-12 p0">
											<img src='/images/air_variables/air_sulfur_dioxide.png' heigth='18' width='18'>
											<label style="font-size: 13px; display: inline;">SO2 (Estadístico): 
											@if ($data[0]->so2_stat ==1 or $data[0]->so2_stat==null )
												-
											@else											
											Hoy a las {{$hr}} horas
											@endif
										
										
										</label>
										</div>
									</td>
									<td class="text-center" >
										<label style="font-size: 13px; display: inline;">
										@if ($data[0]->so2_stat ==1 or $data[0]->so2_stat==null )
										<label>No hay próximos eventos pronosticados</label>
										@elseif ($data[0]->so2_stat ==2)
										<label class="label large" style="background-color:#fbdb66">Regular</label>
										@elseif ($data[0]->so2_stat ==3)
										<label class="label large" style="background-color:#faa500">Alerta</label>
										@elseif ($data[0]->so2_stat ==4)
										<label class="label large" style="background-color:#ed1515">Preemergencia</label>	
										@endif
									
									
									</label>
										
									</td>
								</tr>
				
							</tbody>
						</table>
					</div>

				</div>