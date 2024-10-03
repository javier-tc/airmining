@extends('layouts.appx')
@section('content')


<div class="panel">
	<div class="panel-default">
		
		<div class="panel-body">
			<div class="col-md-12">

				<div class="page-title clearfix">
					<h1><i class="fa fa-th-large" title="Abierto"></i> Proyecto {{$pro->pro_nproyecto}}</h1>
				</div>


				<div class="row" style="background-color:#E5E9EC;">
					<div class="col-md-5">

						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="panel">
									<div class="panel-heading bg-info p30"></div>
									<div class="clearfix text-center">
										<span class="mt-50 avatar avatar-md chart-circle">
											<img src="/images/refinery.png" alt="..." style="background-color:#FFF;" class="mCS_img_loaded shadow-2">
										</span>
									</div>
									<div class="p10 b-t b-b">
										Fecha de inicio: {{$pro->pro_fcinicio}} </div>
									<div class="p10 b-b">
										Fecha de cierre: {{$pro->pro_fctermino}} </div>
									<div class="p10 b-b">
										Rubro: {{$pro->pro_rubro}} </div>
									<div class="p10 b-b">
										Sub-rubro: {{$pro->pro_subrubro}} </div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="panel no-border">
									<div class="tab-title clearfix">
										<h4>Miembros del Proyecto</h4>
										<div class="title-button-group">
										</div>
									</div>
									<div class="table-responsive">
										<div id="project-member-table_wrapper" class="dataTables_wrapper no-footer"></div>
										<table id="project-member-table" class="b-b-only no-thead dataTable no-footer" width="100%">
											<thead>
												<tr role="row">
													<th class="sorting_asc" tabindex="0" aria-controls="project-member-table" rowspan="1" colspan="1" aria-label=": activate to sort column descending" aria-sort="ascending"></th>
													<th class="text-center option w100 sorting" tabindex="0" aria-controls="project-member-table" rowspan="1" colspan="1" aria-label=": activate to sort column ascending"></th>
												</tr>
											</thead>
											<tbody>

											@foreach ($miembros as $mie)

												<tr role="row" class="even">
													<td>
														<div class="pull-left">
															<a href="#">
																<span class="avatar avatar-xs mr10"><img src="https://aire.mimasoft.cl/assets/images/avatar.jpg" alt="..." class="mCS_img_loaded"></span>
																{{$mie->name}} - {{$mie->email}}
															</a>
														</div>
													</td>
												</tr>

											@endforeach



											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-7">

						<div class="row">

							<div class="col-md-12 col-sm-12">
								<div class="panel">
									<div class="p15" >
									{{$pro->pro_descripcion}} </div>
								</div>
							</div>

							<div class="col-md-12 col-sm-12">
								<div class="panel">
									<div class="tab-title clearfix">
										<h4>Contenido</h4>
									</div>
									<div class="p15" >
										<p></p>
										
										<p></p>
										<p></p>
										
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

@stop