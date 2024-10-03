<div class="card-body">

	<div class="form-group row">
		<label for="user_id" class="col-sm-2 col-form-label">Proyecto</label>
		<div class="col-sm-10">
			<select class="form-control " id="user_id" name="user_id">
				<option selected value="">Proyecto</option>
				@foreach ($proyectos as $pro)
				<option value="{{$pro->id_proyecto}}">{{$pro->pro_nproyecto}}</option>
				@endforeach

			</select>
		</div>
	</div>


	<div class="form-group row">
		<label for="est_id_proyecto" class="col-sm-2 col-form-label">Proyecto</label>
		<div class="col-sm-10">
			<select class="form-control " id="est_id_proyecto" name="est_id_proyecto">
				<option selected value="">Seleccione Proyecto</option>
				@foreach ($proyectos as $pro)
				<option value="{{$pro->id_proyecto}}">{{$pro->pro_nproyecto}}</option>
				@endforeach

			</select>
		</div>
	</div>


	<div class="form-group row">
		<label for="id_rol" class="col-sm-2 col-form-label">Rol</label>
		<div class="col-sm-10">
			<select class="form-control" id="id_rol" name="id_rol">
				<option selected value="">Seleccione Rol</option>
				@foreach ($roles_proyectos as $rol)
				<option value="{{$rol->id_rol}}">{{$rol->rol_rol_nombre}}</option>
				@endforeach

			</select>
		</div>
	</div>
</div>
