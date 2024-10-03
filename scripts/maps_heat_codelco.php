<?php
$mysqli = new mysqli("localhost", "cprocl_particulas", "Particulas.12", "cprocl_particulas");
//$mysqli = new mysqli("localhost", "particulas", "Particulas.12", "particulas");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
else{
	//echo $mysqli->host_info . "\n";
	
	$ayer = date('Y-m-d', strtotime("-1 day"));
    $hoy = date('Y-m-d');
    $manana = date('Y-m-d', strtotime("+1 day"));
	$correlativo = 1;
	
	$fechas = [$ayer, $hoy, $manana];
	
        //para guardar datos de longitudes
    $ls = ['', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''];

        //para guardar datos de latitudes procesados.
    $fcor = ['', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''];
	
	$lon = ['0', '-71.57665253','-71.57130432','-71.56595612','-71.56060791','-71.5552597','-71.54990387','-71.54456329','-71.53920746','-71.53385925','-71.52851105','-71.52316284','-71.51781464','-71.51246643','-71.50711823','-71.50177002','-71.49642181','-71.49107361','-71.4857254','-71.4803772','-71.47502899','-71.46967316','-71.46433258','-71.45898438','-71.45363617','-71.44829559','-71.44293976','-71.43759155','-71.43224335','-71.42689514','-71.42154694','-71.41619873','-71.41085052','-71.40550232'];
  
   $lat = ['0', '-32.83994675','-32.83544922','-32.83095169','-32.82645798','-32.82196426','-32.81745911','-32.81296539','-32.80846786','-32.80397034','-32.79947281','-32.79497528','-32.79047775','-32.78598022','-32.7814827','-32.77698517','-32.77248764','-32.76799011','-32.76349258','-32.75899506','-32.75449753','-32.75000381','-32.74550247','-32.74100876','-32.73651505','-32.7320137','-32.72751236','-32.72301865','-32.71852112','-32.71402359','-32.70952606','-32.70502853','-32.70053482','-32.69603348'];
	
	$datos_dia = '{' ;

    for ($dias = 0; $dias < 3; $dias++) {
		$fecha = $fechas[$dias];
        $datos_dia = $datos_dia.'"' . $fecha . '":';

            
//---------------------------------------------------------------------------------------------------------------------------------------------------  

		for ($correlativo==1; $correlativo <= 1; $correlativo++) {

			$ls = ['', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''];
			$i = 1;
			//construir {lat.long}
			for ($i; $i <= 33; $i++) {
				if ($correlativo == 1 && $i==1) $ls[$i] = '{"' . $lat[$correlativo] . ':' . $lon[$i] . '":{';
				else $ls[$i] = '"' . $lat[$correlativo] . ':' . $lon[$i] . '":{';
			}
				

			
			$BD_datos = "SELECT * FROM cprocl_particulas.mapacalors
			WHERE fecha BETWEEN '".$fecha." 00:00:00' AND '".$fecha." 23:59:00'
			and id_sector=2
			and correlativo= ".$correlativo."
			and tipo_dato=1
			order by serie_modelo desc,id_maps  asc
			limit 24";
			
					
			$result1 = $mysqli->query($BD_datos);
				
			if ($result1->num_rows > 0) {


            $row = $result1->fetch_assoc();
					
			foreach ($result1 as $mp) {		
					
					
				$BD_velo = "SELECT * FROM cprocl_particulas.mapacalors
				WHERE fecha BETWEEN '".$fecha." 00:00:00' AND '".$fecha." 23:59:00'
				and id_sector=2
				and correlativo= ".$correlativo."
				and tipo_dato=8
				and idhr =".$mp['idhr']."
				and lat =".$mp['lat']."
				order by serie_modelo desc,id_maps  asc
				limit 1";
				
			
				
				$result2 = $mysqli->query($BD_velo);
				$row2 = $result2->fetch_assoc();
				
				
			

                $idhr = str_pad($mp['idhr'], 2, "0", STR_PAD_LEFT);


                for ($fls = 1; $fls <= 33; $fls++) {
                    $lonn = 'lon' . $fls;

                        
                    if ($mp['idhr'] != 23)
                        $ls[$fls] = $ls[$fls] . '"time_' . $idhr . '":'. $row2[$lonn] . ',';
                    else {
					$ls[$fls] = $ls[$fls] . '"time_' . $idhr . '":'. $row2[$lonn] . '},';
                    }
					
                }//fin $fls    

			}//FOREACH $RESULT1
                        
            for ($fls = 1; $fls <= 33; $fls++) {
                    $fcor[$correlativo] = $fcor[$correlativo] . $ls[$fls];
                }      
				
			} //si result1 >0
			
			
			
			
			
                  
        }//fin correlativo
		
		
        //---------------------------------------------------------------------------------------------------------------------------------------------------
			
	
		
		for ($fls = 1; $fls <= 33; $fls++) {
                $datos_dia = $datos_dia . $fcor[$fls];
            }
			
			 $datos_dia= substr($datos_dia, 0, -1);
            $datos_dia = $datos_dia.'},';

			
		} //FIN DIAS
		
		
            $datos_dia= substr($datos_dia, 0, -1);
            $datos_dia = $datos_dia.'}';
              
	$file=fopen('arch/datos_heat_codelco','w');
    fwrite($file, $datos_dia);
    fclose($file);
		
		
		
		
	}//fin del sino
		    
?>