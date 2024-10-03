@extends('layouts.appx')
@section('content')
<div class="panel">
	<div class="panel-default">
		<div class="page-title clearfix">
			<h1>Carga Masiva</h1>
		</div>
		<div class="panel-body">

			<div class="col-md-12">

				<div class="card card-primary card-outline">
					<div class="card-body">
						<div class="col-md-6">

							<form class="form-horizontal" action="{{ route('cmasiva.store') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data" onsubmit="return VL_masiva();">
								@csrf


								<div class="form-group row">
									<label for="tipo" class="col-sm-2 col-form-label">Tipo de registro</label>

									<div class="col-sm-10">
										<select class="form-control " id="tipo" name="tipo">
											<option selected value="">Seleccion Tipo Registro</option>
											<option value="1">Monitoreo</option>
											<option value="2">Pronostico</option>
										</select>
									</div>
								</div>



								<div class="form-group row">
									<label for="modelo" class="col-sm-2 col-form-label">Modelo:</label>
									<div class="col-sm-10">
										<select class="form-control " id="modelo" name="modelo">
											<option selected value=""> Seleccione Modelo</option>
											<option value="1">Neuronal</option>
											<option value="2">Estadístico</option>
											<option value="3">Numérico</option>
										</select>
									</div>
								</div>

							
								<div class="form-group row">

									<label for="receptor" class="col-sm-2 col-form-label">Sector:</label>
									<div class="col-sm-10">
										<select class="form-control " id="receptor" name="receptor" >
											<option  value="">Seleccione Proyecto</option>
											@foreach ($proyectos as $pro)
											<option value="{{$pro->id_proyecto}}">{{$pro->pro_nproyecto}}</option>

											@endforeach






										</select>
									</div>
								</div>

								<div class="form-group row">

									<label for="estacion" class="col-sm-2 col-form-label">Receptor:</label>
									<div class="col-sm-10">
										<select class="form-control " id="estacion" name="estacion">
											<option selected value="">Seleccione Estación</option>
											<option value="-1">Ninguno (Mapa)</option>
											@foreach ($estaciones as $est)

											<option value="{{$est->id_estacion}}">{{$est->est_nombre}}</option>

											@endforeach
										</select>
									</div>
								</div>


								<h3></h3>








								<div class="form-group row">
									<label for="excel" class="col-sm-3 col-form-label">Subir Archivo:</label>


									<div class="col-sm-6">
										<input type="file" class="form-control" name="excel" id="excel">
									</div>
								</div>

								<div class="card-footer">
									
									<a href="/cmasiva" class="btn btn-default">Cancelar</a>
									<button type="submit" class="btn btn-info float-right">Registrar</button>
								</div>

							</form>
						</div>



					</div>
				</div>
			</div>






		</div>
	</div>
</div>

<script>
    const csrfToken = document.head.querySelector("[name~=csrf-token][content]").content;
    document.getElementById('receptor').addEventListener('change',(e)=>{
        fetch('rtrn_estaciones',{
            method : 'POST',
            body: JSON.stringify({texto : e.target.value}),
            headers:{
                'Content-Type': 'application/json',
                "X-CSRF-Token": csrfToken
            }
			
        }).then(response =>{
            return response.json()
        }).then( data =>{
            var opciones ="<option value=''>Elegir</option><option value='-1'>Ninguno (Mapa)</option>";

			console.log(e.target.value);
			console.log(data);
			
			
            for (let i in data.lista) {
               opciones+= '<option value="'+data.lista[i].id_estacion+'">'+data.lista[i].est_nombre+'</option>';
            }
            document.getElementById("estacion").innerHTML = opciones;
        }).catch(error =>console.error(error));
    })


</script> 
@stop
