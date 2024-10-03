<?php
$mysqli = new mysqli("localhost", "cprocl_particulas", "Particulas.12", "cprocl_particulas");
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
	
	$lon = ['0', '-71.04462', '-71.03918', '-71.03378', '-71.02838', '-71.02295', '-71.01755', '-71.01215', '-71.00671', '-71.00131', '-70.99591', '-70.99048', '-70.98508', '-70.97964', '-70.97424', '-70.96884', '-70.96341', '-70.95801', '-70.95261', '-70.94717', '-70.94177', '-70.93637', '-70.93094', '-70.92554', '-70.9201', '-70.9147', '-70.9093', '-70.90387', '-70.89847', '-70.89307', '-70.88763', '-70.88223', '-70.87683', '-70.8714'];
    
	$lat = ['0', '-32.88079', '-32.87624', '-32.8717', '-32.86715', '-32.8626', '-32.85806', '-32.85349', '-32.84896', '-32.84441', '-32.83986', '-32.8353', '-32.83076', '-32.82622','-32.82166', '-32.81711', '-32.81257', '-32.80802', '-32.80347', '-32.79892', '-32.79438', '-32.78983', '-32.78529', '-32.78074', '-32.77619', '-32.77164', '-32.76709', '-32.76254', '-32.758', '-32.75345', '-32.74891', '-32.74435', '-32.73981', '-32.73526'];
	
	$datos_dia = '{' ;

    for ($dias = 0; $dias < 3; $dias++) {
		$fecha = $fechas[$dias];
        $datos_dia = $datos_dia.'"' . $fecha . '":';

            
//---------------------------------------------------------------------------------------------------------------------------------------------------  

		for ($correlativo==1; $correlativo <= 33; $correlativo++) {

			$ls = ['', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''];
			$i = 1;
			//construir {lat.long}
			for ($i; $i <= 33; $i++) {
				if ($correlativo == 1 && $i==1) $ls[$i] = '{"' . $lat[$correlativo] . ':' . $lon[$i] . '":{';
				else $ls[$i] = '"' . $lat[$correlativo] . ':' . $lon[$i] . '":{';
			}
				

			
			$BD_datos = "SELECT * FROM cprocl_particulas.mapacalors
			WHERE fecha BETWEEN '".$fecha." 00:00:00' AND '".$fecha." 23:59:00'
			and id_sector=1
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
				and id_sector=1
				and correlativo= ".$correlativo."
				and tipo_dato=2
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
                        $ls[$fls] = $ls[$fls] . '"time_' . $idhr . '":{"velocity":"' . $mp[$lonn] . '","direction":"' . $row2[$lonn] . '"},';
                    else {
						
                        $ls[$fls] = $ls[$fls] . '"time_' . $idhr . '":{"velocity":"' . $mp[$lonn] . '","direction":"' . $row2[$lonn]. '"}},';
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
              
	$file=fopen('arch/datos_pluma_vel','w');
    fwrite($file, $datos_dia);
    fclose($file);
		
		
		
		
	}//fin del sino
		    
?>