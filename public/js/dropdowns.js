//----------------------------------------------------------------------------------------------------------------------------------------
//SELECT MODAL IA
$("#cub_tipo_servicio").change(event=>{
	var id_tipo=event.target.value;

	$.get('../iatoros/'+id_tipo,function(res,tipo){
		$("#cub_sltoros").empty();
			res.forEach(element=>{
				$("#cub_sltoros").append('<option value="'+element.id_toro+'">'+element.codigo+' | '+element.nombre+' </option>');
			});
	});
});
//----------------------------------------------------------------------------------------------------------------------------------------
//SELECT PARA POSITIVA O NEGATIVA
$("#pal_est_palpacion").change(event=>{
	var estado=event.target.value;
	if(estado=='1'){
document.getElementById('pal_input_dias').style.display = 'block';
document.getElementById('pal_input_cubierta').style.display = 'block';
	}else
	{
document.getElementById('pal_input_dias').style.display = 'none';
document.getElementById('pal_input_cubierta').style.display = 'none';
	}
});
//----------------------------------------------------------------------------------------------------------------------------------------
//SELECT PARA NACIMIENTO MUERTO
$("#par_id_cod_parto").change(event=>{
    var estado=event.target.value;
    if(estado=='5'){
document.getElementById('div_par_diio').style.display = 'none';
    }else
    {
document.getElementById('div_par_diio').style.display = 'block';
    }
});


//----------------------------------------------------------------------------------------------------------------------------------------
//SELECT ID RAZA CUBIERTA
$("#par_id_cubierta").change(event=>{
	var id_tipo=event.target.value;
		if(id_tipo!='0'){
			$.get('../sl_cubierta_raza_toro/'+id_tipo,function(res,tipo){
			$("#par_id_raza").empty();
				res.forEach(element=>{
					$("#par_id_raza").append('<option value="'+element.id_raza+'">'+element.nombre+' </option>');
				});
		});

	}else{
		 document.getElementById("par_id_raza").innerHTML = '<option value="13"> HI | HIBRIDO </option>';
	}
	
});
//----------------------------------------------------------------------------------------------------------------------------------------
//RETORNA CATEGORIA
$("#ani_fc_nacimiento").change(event=>{
	var fc_nacimiento=document.getElementById("ani_fc_nacimiento").value;

retorna_categoria();
});

$("#ani_sexo").change(event=>{
	var sexo=document.getElementById("ani_sexo").value;

retorna_categoria();
});

function retorna_categoria(){ 

	var sexo=document.getElementById("ani_sexo").value;
	var fc_nacimiento=document.getElementById("ani_fc_nacimiento").value;
	var castrado=document.getElementById("castrado").value;
	var crias=document.getElementById("crias").value;
	

	if(fc_nacimiento!="" && sexo!=""){
	
		$.get('../retorna_categoria_animal/'+fc_nacimiento+'/'+sexo+'/'+castrado+'/'+crias,function(res){
			
				document.getElementById("ani_categoria").value = res.ide;
				document.getElementById("ani_nom_categoria").placeholder = res.nombre;

		});
	}//fc_nacimiento &&
}