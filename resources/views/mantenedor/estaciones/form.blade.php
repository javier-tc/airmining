
			<div class="card-body">

			<div class="form-group row">
					<label for="est_id_proyecto" class="col-sm-2 col-form-label">Proyecto</label>
					<div class="col-sm-10">
					<select class="form-control " id="est_id_proyecto" name="est_id_proyecto">
					<option selected value="">Seleccione Proyecto</option>


						@foreach ($proyectos as $pro)
						@if ($estacion->est_id_proyecto == $pro->id_proyecto)
								<option value="{{$pro->id_proyecto}}" selected>{{$pro->pro_nproyecto}}</option>
							@else
								<option value="{{$pro->id_proyecto}}">{{$pro->pro_nproyecto}}</option>
							@endif
						@endforeach    
					</select>
					</div>
				</div>


				<div class="form-group row">
					<label for="pro_nproyecto" class="col-sm-2 col-form-label">Nombre de la Estación</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="est_nombre" id="est_nombre" 
						placeholder="Nombre de la Estación" value="{{old('est_nombre',$estacion->est_nombre)}}" >
					</div>
				</div>

				<div class="form-group row">
					<label for="est_latitud" class="col-sm-2 col-form-label">Latitud</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="est_latitud" id="est_latitud" 
						placeholder="Latitud" value="{{old('est_latitud',$estacion->est_latitud)}}" >
					</div>
				</div>

                <div class="form-group row">
					<label for="est_longitud" class="col-sm-2 col-form-label">Longitud</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="est_longitud" id="est_longitud" 
						placeholder="Longitud" value="{{old('est_longitud',$estacion->est_longitud)}}" >
					</div>
				</div>

               
				<div class="form-group row">
					<label for="est_tipo" class="col-sm-2 col-form-label">Tipo</label>
					<div class="col-sm-10">
					<select class="form-control " id="est_tipo" name="est_tipo">
						<option selected value="">Seleccione Estación</option>

						@if ($estacion->est_tipo =='')
							<option value="1">Estación</option>
							<option value="2">Receptor</option>
						@endif
						@if ($estacion->est_tipo == 1)
							<option value="1" selected>Estación</option>
							<option value="2">Receptor</option>
						@endif
						@if ($estacion->est_tipo == 2)
							<option value="1">Estación</option>
							<option value="2" selected>Receptor</option>
						@endif


					</select>
					</div>
				</div>

				<div class="form-group row">
					<label for="est_visible" class="col-sm-2 col-form-label">Visible</label>
					<div class="col-sm-10">
					<select class="form-control " id="est_visible" name="est_visible">
						<option selected value="">Seleccione Visible</option>
						@if ($estacion->est_visible =='')
							<option value="1">Si</option>
							<option value="2">No</option>
						@endif
						@if ($estacion->est_visible == 1)
							<option value="1" selected>Si</option>
							<option value="2">No</option>
						@endif
						@if ($estacion->est_visible == 2)
							<option value="1">Si</option>
							<option value="2" selected>No</option>
						@endif

					</select>
					</div>
				</div>



  
