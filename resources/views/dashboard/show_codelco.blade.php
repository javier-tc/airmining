@extends('layouts.appx')
@section('content')
<div class="panel">
	<div class="panel-default">
		<div class="page-title clearfix">
			<h1>Panel Principal - Proyecto {{ $nombre_proyecto}}</h1>
		</div>
		<div class="panel-body">
		

			<div class="row">

			@foreach ($data_estaciones as $data)
			@include('dashboard.table1_codelco')
                       

		@endforeach
				

			</div><!-- row-->

			








		</div>
	</div>
</div>

@stop