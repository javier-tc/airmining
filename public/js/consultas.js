

function VL_proyecto(){ 
    
    if($("#pro_nproyecto").val() == ""){
        alert("El campo Nombre no puede estar vacío.");
        $("#pro_nproyecto").focus();       
        return false;
    }

    if($("#pro_fcinicio").val() == ""){
        alert("El campo Fecha de Inicio no puede estar vacío.");
        $("#pro_fcinicio").focus();       
        return false;
    }

    if($("#pro_fctermino").val() == ""){
        alert("El campo Fecha de Termino no puede estar vacío.");
        $("#pro_fctermino").focus();       
        return false;
    }

    var f1=$("#pro_fcinicio").val();
    var f2=$("#pro_fctermino").val();

    if(f2<f1){
        alert("La fecha de Termino no puede ser anterior a la fecha de Inicio del Proyecto.");
        $("#pro_fcinicio").focus();       
        return false;
    }

    if($("#pro_nresponsable").val() == ""){
        alert("El campo Nombre Responsable no puede estar vacío.");
        $("#pro_nresponsable").focus();       
        return false;
    }


    if($("#pro_eresponsable").val() == ""){
        alert("El campo Email Responsable no puede estar vacío.");
        $("#pro_eresponsable").focus();       
        return false;
    }

    if($("#pro_fonoresponsable").val() == ""){
        alert("El campo Fono Responsable no puede estar vacío.");
        $("#pro_fonoresponsable").focus();       
        return false;
    }

    if($("#pro_rubro").val() == ""){
        alert("El campo Rubro no puede estar vacío.");
        $("#pro_rubro").focus();       
        return false;
    }

    if($("#pro_subrubro").val() == ""){
        alert("El campo SubRubro no puede estar vacío.");
        $("#pro_subrubro").focus();       
        return false;
    }

}
//--------------------------------------------------------------------------------
function VL_edit_proyecto(){ 
    
    if($("#pro_nproyecto").val() == ""){
        alert("El campo Nombre no puede estar vacío.");
        $("#pro_nproyecto").focus();       
        return false;
    }

    if($("#pro_fcinicio").val() == ""){
        alert("El campo Fecha de Inicio no puede estar vacío.");
        $("#pro_fcinicio").focus();       
        return false;
    }

    if($("#pro_fctermino").val() == ""){
        alert("El campo Fecha de Termino no puede estar vacío.");
        $("#pro_fctermino").focus();       
        return false;
    }

    var f1=$("#pro_fcinicio").val();
    var f2=$("#pro_fctermino").val();

    if(f2<f1){
        alert("La fecha de Termino no puede ser anterior a la fecha de Inicio del Proyecto.");
        $("#pro_fcinicio").focus();       
        return false;
    }

    if($("#pro_nresponsable").val() == ""){
        alert("El campo Nombre Responsable no puede estar vacío.");
        $("#pro_nresponsable").focus();       
        return false;
    }


    if($("#pro_eresponsable").val() == ""){
        alert("El campo Email Responsable no puede estar vacío.");
        $("#pro_eresponsable").focus();       
        return false;
    }

    if($("#pro_fonoresponsable").val() == ""){
        alert("El campo Fono Responsable no puede estar vacío.");
        $("#pro_fonoresponsable").focus();       
        return false;
    }

    if($("#pro_rubro").val() == ""){
        alert("El campo Rubro no puede estar vacío.");
        $("#pro_rubro").focus();       
        return false;
    }

    if($("#pro_subrubro").val() == ""){
        alert("El campo SubRubro no puede estar vacío.");
        $("#pro_subrubro").focus();       
        return false;
    }

}
//--------------------------------------------------------------------------------

function VL_estacion(){ 

    var proyecto=$("#est_id_proyecto").val();

    if(proyecto==0){
        alert("Debe seleccionar un Proyecto.");
        $("#est_id_proyecto").focus();       
        return false;
    }

    if($("#est_nombre").val() == ""){
        alert("El campo Nombre del Proyecto no puede estar vacío.");
        $("#est_nombre").focus();       
        return false;
    }

    if($("#est_latitud").val() == ""){
        alert("El campo Latitud no puede estar vacío.");
        $("#est_latitud").focus();       
        return false;
    }
    if($("#est_longitud").val() == ""){
        alert("El campo Longitud no puede estar vacío.");
        $("#est_longitud").focus();       
        return false;
    }
    
    if($("#est_tipo").val() == ""){
        alert("Debe seleccionar un tipo.");
        $("#est_tipo").focus();       
        return false;
    }

    if($("#est_visible").val() == ""){
        alert("Debe Indicar si es visible la Estación o Receptor.");
        $("#est_visible").focus();       
        return false;
    }

}
//--------------------------------------------------------------------------------

function VL_edit_estacion(){ 

    if($("#est_id_proyecto").val() == ""){
        alert("Debe seleccionar un Proyecto.");
        $("#est_id_proyecto").focus();       
        return false;
    }

    if($("#est_nombre").val() == ""){
        alert("El campo Nombre del Proyecto no puede estar vacío.");
        $("#est_nombre").focus();       
        return false;
    }

    if($("#est_latitud").val() == ""){
        alert("El campo Latitud no puede estar vacío.");
        $("#est_latitud").focus();       
        return false;
    }
    if($("#est_longitud").val() == ""){
        alert("El campo Longitud no puede estar vacío.");
        $("#est_longitud").focus();       
        return false;
    }
    
    if($("#est_tipo").val() == ""){
        alert("Debe seleccionar un tipo.");
        $("#est_tipo").focus();       
        return false;
    }

    if($("#est_visible").val() == ""){
        alert("Debe Indicar si es visible la Estación o Receptor.");
        $("#est_visible").focus();       
        return false;
    }

}

//--------------------------------------------------------------------------------

function VL_usuario(){ 


    if($("#name").val() == ""){
        alert("El campo Nombre no puede estar vacío.");
        $("#name").focus();       
        return false;
    }

    if($("#email").val() == ""){
        alert("El campo Email no puede estar vacío.");
        $("#email").focus();       
        return false;
    }
    if($("#password").val() == ""){
        alert("El campo contraseña no puede estar vacío.");
        $("#password").focus();       
        return false;
    }

    if($("#password_confirmation").val() == ""){
        alert("El campo confirmar contraseña no puede estar vacío.");
        $("#password_confirmation").focus();       
        return false;
    }
    
    var pass1=$("#password").val();
    var pass2=$("#password_confirmation").val();

    if(pass1!=pass2){
        alert("Las contraseñas no coinciden.");
        $("#password").focus();       
        return false;
    }

}

//--------------------------------------------------------------------------------

function VL_edit_usuario(){ 

    if($("#name").val() == ""){
        alert("El campo Nombre no puede estar vacío.");
        $("#name").focus();       
        return false;
    }

    if($("#email").val() == ""){
        alert("El campo Email no puede estar vacío.");
        $("#email").focus();       
        return false;
    }
    if($("#password").val() == ""){
        alert("El campo contraseña no puede estar vacío.");
        $("#password").focus();       
        return false;
    }

}
//--------------------------------------------------------------------------------
function VL_rol(){ 

    if($("#user_id").val() == ""){
        alert("El campo Nombre Usuario no puede estar vacío.");
        $("#user_id").focus();       
        return false;
    }

    if($("#est_id_proyecto").val() == ""){
        alert("El campo Proyecto no puede estar vacío.");
        $("#id_nproyecto").focus();       
        return false;
    }
    if($("#ru_id_rol").val() == ""){
        alert("El campo Rol en el proyecto no puede estar vacío.");
        $("#ru_id_rol").focus();       
        return false;
    }

}
//--------------------------------------------------------------------------------
function VL_edit_rol(){ 

    if($("#user_id").val() == ""){
        alert("El campo Nombre Usuario no puede estar vacío.");
        $("#user_id").focus();       
        return false;
    }

    if($("#id_nproyecto").val() == ""){
        alert("El campo Proyecto no puede estar vacío.");
        $("#id_nproyecto").focus();       
        return false;
    }
    if($("#ru_id_rol").val() == ""){
        alert("El campo Rol en el proyecto no puede estar vacío.");
        $("#ru_id_rol").focus();       
        return false;
    }

}
//--------------------------------------------------------------------------------

//--------------------------------------------------------------------------------
function VL_masiva(){ 

    if($("#tipo").val() == ""){
        alert("El campo Tipo no puede estar vacío.");
        $("#user_id").focus();       
        return false;
    }

    if($("#modelo").val() == ""){
        alert("El campo Modelo no puede estar vacío.");
        $("#id_nproyecto").focus();       
        return false;
    }
    if($("#receptor").val() == ""){
        alert("El campo Receptor no puede estar vacío.");
        $("#ru_id_rol").focus();       
        return false;
    }
    if($("#estacion").val() == ""){
        alert("El campo Estación no puede estar vacío.");
        $("#ru_id_rol").focus();       
        return false;
    }
    if($("#excel").val() == ""){
        alert("Debe seleccionar un archivo.");
        $("#ru_id_rol").focus();       
        return false;
    }

}

//--------------------------------------------------------------------------------

function VL_sinopticos(){ 


    if($("#fecha").val() == ""){
        alert("El campo Fecha no puede estar vacío.");
        $("#fecha").focus();       
        return false;
    }

    if($("#cma1").val() == ""){
        alert("El campo Cma1 no puede estar vacío.");
        $("#cma1").focus();       
        return false;
    }

    if($("#cma2").val() == ""){
        alert("El campo Cma2 no puede estar vacío.");
        $("#cma2").focus();       
        return false;
    }
    if($("#cma3").val() == ""){
        alert("El campo Cma3 no puede estar vacío.");
        $("#cma3").focus();       
        return false;
    }

    if($("#cma4").val() == ""){
        alert("El campo Cma4 no puede estar vacío.");
        $("#cma4").focus();       
        return false;
    }

    if($("#cma5").val() == ""){
        alert("El campo Cma5 no puede estar vacío.");
        $("#cma5").focus();       
        return false;
    }

    if($("#cma6").val() == ""){
        alert("El campo Cma6 no puede estar vacío.");
        $("#cma6").focus();       
        return false;
    }
    if($("#prob1").val() == ""){
        alert("El campo Prob1 no puede estar vacío.");
        $("#prob1").focus();       
        return false;
    }
    if($("#prob2").val() == ""){
        alert("El campo Prob2 no puede estar vacío.");
        $("#prob2").focus();       
        return false;
    }

    if($("#prob3").val() == ""){
        alert("El campo Prob3 no puede estar vacío.");
        $("#prob3").focus();       
        return false;
    }

    if($("#prob4").val() == ""){
        alert("El campo Prob4 no puede estar vacío.");
        $("#prob4").focus();       
        return false;
    }
    if($("#prob5").val() == ""){
        alert("El campo Prob5 no puede estar vacío.");
        $("#prob5").focus();       
        return false;
    }
    if($("#prob6").val() == ""){
        alert("El campo Prob6 no puede estar vacío.");
        $("#prob6").focus();       
        return false;
    }

    

}

//--------------------------------------------------------------------------------
function VL_MN_Excel_Ext() {


    var filename = $("#excel").val();


    var extension = filename.replace(/^.*\./, '');    


    if (extension == filename){
     extension = '';
     return false;
 }
 else{
     extension = extension.toLowerCase();

     if((extension != 'xls') && (extension != 'xlsx') ){
        alert("extencion no valida");
        return false;
    }
}

}

function VL_MN_Excel() {
   var archivo = document.getElementById('excel').value;
   if(archivo==''){
    alert("Debe seleccionar un archivo.");
    $("#excel").focus();       
    return false;
}  
else{
    if(VL_MN_Excel_Ext()==false)
        return false;
}


}

//--------------------------------------------------------------------------------
//--------------------------------------------------------------------------------
function ver() {

	document.getElementById('mas_vacunas').style.display = 'block';
	}




//-------------------------------------------------------------------------------------------
    
//SELECT MODAL IA

function validar_diio(){   
    var id=document.getElementById("tor_diio").value;

       $.ajax({
               
                url:   '../bsdiio/'+id,
                type:  'get',
                success:  function (response) {
                     
            var data = jQuery.parseJSON(response);
         
    if (data==1) {
       document.getElementById('msg_diio').style.display = 'block';
document.getElementById('msg_diio2').style.display = 'none';
    }else
    {
document.getElementById('msg_diio').style.display = 'none';
document.getElementById('msg_diio2').style.display = 'block';
    }
}
        });

}



//------------------------------------------------------------------------------------------
