
			<div class="card-body">
				<div class="form-group row">
					<label for="pro_nproyecto" class="col-sm-2 col-form-label">Nombre del Proyecto</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="pro_nproyecto" id="pro_nproyecto" 
						placeholder="Nombre del Proyecto" value="{{old('pro_nproyecto',$proyecto->pro_nproyecto)}}" >
					</div>
				</div>

				<div class="form-group row">
					<label for="pro_fcinicio" class="col-sm-2 col-form-label">Fecha Inicio</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" name="pro_fcinicio" id="pro_fcinicio" 
						placeholder="Fecha Inicio" value="{{old('pro_fcinicio',$proyecto->pro_fcinicio)}}" >
					</div>
				</div>

                <div class="form-group row">
					<label for="pro_fctermino" class="col-sm-2 col-form-label">Fecha Termino</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" name="pro_fctermino" id="pro_fctermino" 
						placeholder="Fecha Termino" value="{{old('pro_fctermino',$proyecto->pro_fctermino)}}" >
					</div>
				</div>

                <div class="form-group row">
					<label for="pro_nresponsable" class="col-sm-2 col-form-label">Nombre Responsable</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="pro_nresponsable" id="pro_nresponsable" 
						placeholder="Nombre del Responsable" value="{{old('pro_nresponsable',$proyecto->pro_nresponsable)}}" >
					</div>
				</div>

                <div class="form-group row">
					<label for="pro_eresponsable" class="col-sm-2 col-form-label">Email responsable</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" name="pro_eresponsable" id="pro_eresponsable" 
						placeholder="Email" value="{{old('pro_eresponsable',$proyecto->pro_eresponsable)}}" >
					</div>
				</div>

                <div class="form-group row">
					<label for="pro_fonoresponsable" class="col-sm-2 col-form-label">Telefono responsable</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="pro_fonoresponsable" id="pro_fonoresponsable"
						 placeholder="Telefono Responsable" value="{{old('pro_fonoresponsable',$proyecto->pro_fonoresponsable)}}" >
					</div>
				</div>

                <div class="form-group row">
					<label for="pro_rubro" class="col-sm-2 col-form-label">Rubro</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="pro_rubro" id="pro_rubro" 
						placeholder="Rubro" value="{{old('pro_rubro',$proyecto->pro_rubro)}}" >
					</div>
				</div>

                <div class="form-group row">
					<label for="pro_subrubro" class="col-sm-2 col-form-label">SubRubro</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="pro_subrubro" id="pro_subrubro"
						 placeholder="SubRubro" value="{{old('pro_subrubro',$proyecto->pro_subrubro)}}" >
					</div>
				</div>

                <div class="form-group row">
					<label for="pro_descripcion" class="col-sm-2 col-form-label">Descripción</label>
					<div class="col-sm-10">
                    <textarea class="form-control" name="pro_descripcion" placeholder="Descripcion del proyecto"
					 id="pro_descripcion" rows="3" >{{old('pro_descripcion',$proyecto->pro_descripcion)}}</textarea>
					</div>
				</div>
			</div>



  
