<?php

$mysqli = new mysqli("localhost", "cprocl_particulas", "Particulas.12", "cprocl_particulas");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
else{
	
		//estacion| variable | modelo| rango| cant |  hora
			$datos=array();
			
			$estacion1=1;
			$name_estacion1="Catemu";
			
			$estacion2=2;
			$name_estacion2="Lo Campo";
			
			$estacion3=3;
			$name_estacion3="Romeral";
			
			$estacion4=4;
			$name_estacion4="Sta. Margarita";
			
			
			$modelo=1;  $name_model="Neuronal"; $tipo=8;$name_tipo="Dioxido de Azufre";
			
			$serie=retorna_serie($estacion1,$modelo,$tipo);
			buscar_datos($serie,$modelo,$tipo,$name_model,$name_tipo,$estacion1,$name_estacion1);
			
			$serie=retorna_serie($estacion2,$modelo,$tipo);
			buscar_datos($serie,$modelo,$tipo,$name_model,$name_tipo,$estacion2,$name_estacion2);
			
			$serie=retorna_serie($estacion3,$modelo,$tipo);
			buscar_datos($serie,$modelo,$tipo,$name_model,$name_tipo,$estacion3,$name_estacion3);
			
			$serie=retorna_serie($estacion4,$modelo,$tipo);
			buscar_datos($serie,$modelo,$tipo,$name_model,$name_tipo,$estacion4,$name_estacion4);
			
			//------------------------------------------
			$modelo=2;  $name_model="Estadistico";
			
			$serie=retorna_serie($estacion1,$modelo,$tipo);
			buscar_datos($serie,$modelo,$tipo,$name_model,$name_tipo,$estacion1,$name_estacion1);
			
			
			$serie=retorna_serie($estacion2,$modelo,$tipo);
			buscar_datos($serie,$modelo,$tipo,$name_model,$name_tipo,$estacion2,$name_estacion2);
			
			$serie=retorna_serie($estacion3,$modelo,$tipo);
			buscar_datos($serie,$modelo,$tipo,$name_model,$name_tipo,$estacion3,$name_estacion3);
			
			$serie=retorna_serie($estacion4,$modelo,$tipo);
			buscar_datos($serie,$modelo,$tipo,$name_model,$name_tipo,$estacion4,$name_estacion4);
			
			//------------------------------------------
			$modelo=3;  $name_model="N&uacute;merico";
			
			$serie=retorna_serie($estacion1,$modelo,$tipo);
			buscar_datos($serie,$modelo,$tipo,$name_model,$name_tipo,$estacion1,$name_estacion1);
			
			
			$serie=retorna_serie($estacion2,$modelo,$tipo);
			buscar_datos($serie,$modelo,$tipo,$name_model,$name_tipo,$estacion2,$name_estacion2);
			
			$serie=retorna_serie($estacion4,$modelo,$tipo);
			buscar_datos($serie,$modelo,$tipo,$name_model,$name_tipo,$estacion4,$name_estacion4);
			//------------------------------------------------------------------------------------
}
//-------------------------------------------- ,

function buscar_datos($serie,$modelo,$tipo,$name_model,$name_tipo,$estacion,$name_estacion){
	
	$hoy = date('Y-m-d');
	$manana = date('Y-m-d', strtotime("+1 day"));
	global $datos;
	
	$mysqli = new mysqli("localhost", "cprocl_particulas", "Particulas.12", "cprocl_particulas");
	if ($mysqli->connect_errno) {
		echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	else{
	
	
			$BD_datos = "SELECT *,DATE_FORMAT(fc_creacion,'%H:%i') as hr_creacion,count(alerta) as nroalertas FROM cprocl_particulas.registros
			WHERE fc_creacion BETWEEN '".$manana." 00:00:00' AND '".$manana." 23:59:00'
			and tipo_modelo= ".$modelo."
			and tipo_dato=".$tipo."
			and id_estacion=".$estacion."
			and alerta>=2
			and serie_modelo=".$serie."
			group by alerta
			order by serie_modelo desc,alerta  asc";
			
			$result1 = $mysqli->query($BD_datos);
			//$result2 = mysqli_fetch_object($result1);
			
			
			if ($result1->num_rows > 0) {
				/*
				
				
				echo($mp['alerta'].'-'.$mp['range'].'--'.$mp['hr_creacion'].'--'.$mp['nroalertas'].'<br>');
				//echo($mp['alerta'].'-'.$mp['range'].'--'.$mp['hr_creacion'].'<br>');
				}
					*/
				//estacion| variable | modelo| rango| cant |  hora	
				
				foreach ($result1 as $mp) {	
				$tmp = array(
							'modelo' => $name_model,
							'variable' => $name_tipo,
							'estacion' => $name_estacion,
							'rango' => $mp['range'],
							'cant' => $mp['nroalertas'],
							'hora' => $mp['hr_creacion']);
		    			array_push($datos,$tmp);  
				}
				
				
				//return $result1;
				
			}
		}
	
}

function retorna_serie($estacion,$modelo,$tipo ){
	$hoy = date('Y-m-d');
	$manana = date('Y-m-d', strtotime("+1 day"));
	$mysqli = new mysqli("localhost", "cprocl_particulas", "Particulas.12", "cprocl_particulas");
	if ($mysqli->connect_errno) {
		echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	else{
		$serie_modelo = "SELECT serie_modelo FROM cprocl_particulas.registros
		WHERE fc_creacion BETWEEN '".$manana." 00:00:00' AND '".$manana." 23:59:00'
		and id_estacion=".$estacion." and tipo_modelo=".$modelo." and tipo_dato=".$tipo."
		order by serie_modelo desc
		limit 1";
		$serie = $mysqli->query($serie_modelo)->fetch_assoc()['serie_modelo'];
		return $serie;
	
	
	}
	
}

?>