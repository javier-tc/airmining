<form class="form-horizontal" action="{{ route('csinopticos.store') }}" method="POST" onsubmit="return VL_sinopticos();">
	@csrf


	<div class="modal fade" id="agregar-sinopticos" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Añadir Dato Sinóptico</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="card-body">
						<div class="form-group row">
							<label for="fecha" class="col-sm-2 col-form-label">Fecha</label>
							<div class="col-sm-10">
								<input type="date" class="form-control" name="fecha" id="fecha" placeholder="Fecha">
							</div>
						</div>

						<div class="form-group row">
							<label for="cma1" class="col-sm-3 col-form-label">24 Hrs 00:00 - 08:00</label>
							<div class="col-sm-3">
								<select class="form-control " id="cma1" name="cma1">
									<option selected value="">-</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select>
							</div>

							<label for="prob1" class="col-sm-2 col-form-label">Prob</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="prob1" id="prob1" placeholder="%">
							</div>
						</div>

						<div class="form-group row">
							<label for="cma2" class="col-sm-3 col-form-label">24 Hrs 08:00 - 16:00</label>
							<div class="col-sm-3">
								<select class="form-control " id="cma2" name="cma2">
									<option selected value="">-</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select>
							</div>

							<label for="prob2" class="col-sm-2 col-form-label">Prob</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="prob2" id="prob2" placeholder="%">
							</div>
						</div>

						<div class="form-group row">
							<label for="cma3" class="col-sm-3 col-form-label">24 Hrs 16:00 - 00:00</label>
							<div class="col-sm-3">
								<select class="form-control " id="cma3" name="cma3">
									<option selected value="">-</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select>
							</div>

							<label for="prob3" class="col-sm-2 col-form-label">Prob</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="prob3" id="prob3" placeholder="%">
							</div>
						</div>

						<div class="form-group row">
							<label for="cma4" class="col-sm-3 col-form-label">48 Hrs 00:00 - 08:00</label>
							<div class="col-sm-3">
								<select class="form-control " id="cma4" name="cma4">
									<option selected value="">-</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select>
							</div>

							<label for="prob4" class="col-sm-2 col-form-label">Prob</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="prob4" id="prob4" placeholder="%">
							</div>
						</div>

						<div class="form-group row">
							<label for="cma5" class="col-sm-3 col-form-label">48 Hrs 08:00 - 16:00</label>
							<div class="col-sm-3">
								<select class="form-control " id="cma5" name="cma5">
									<option selected value="">-</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select>
							</div>

							<label for="prob5" class="col-sm-2 col-form-label">Prob</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="prob5" id="prob5" placeholder="%">
							</div>
						</div>

						<div class="form-group row">
							<label for="cma6" class="col-sm-3 col-form-label">48 Hrs 16:00 - 00:00</label>
							<div class="col-sm-3">
								<select class="form-control " id="cma6" name="cma6">
									<option selected value="">-</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select>
							</div>

							<label for="prob6" class="col-sm-2 col-form-label">Prob</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="prob6" id="prob6" placeholder="%">
							</div>
						</div>










					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
						<button type="submit" class="btn btn-primary">Guardar Cambios</button>
					</div>
				</div>
			</div>
		</div>
</form>