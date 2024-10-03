<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\estaciones;


class MapacalorController extends Controller
{
    public function maps_pluma()
    {


        $mes = date('m');
        $anho = date('Y');
        $ayer = date('Y-m-d', strtotime("-1 day"));
        $hoy = date('Y-m-d');
        $manana = date('Y-m-d', strtotime("+1 day"));
        $pasado = date('Y-m-d', strtotime("+2 day"));
        $correlativo = 1;


        $fecha = '2022-12-20';

        $fechas = [$ayer, $hoy, $manana];
        //para guardar datos de longitudes
        $ls = ['', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''];

        //para guardar datos de latitudes procesados.
        $fcor = ['', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''];



        $lon = ['0', '-71.04462', '-71.03918', '-71.03378', '-71.02838', '-71.02295', '-71.01755', '-71.01215', '-71.00671', '-71.00131', '-70.99591', '-70.99048', '-70.98508', '-70.97964', '-70.97424', '-70.96884', '-70.96341', '-70.95801', '-70.95261', '-70.94717', '-70.94177', '-70.93637', '-70.93094', '-70.92554', '-70.9201', '-70.9147', '-70.9093', '-70.90387', '-70.89847', '-70.89307', '-70.88763', '-70.88223', '-70.87683', '-70.8714'];
        $lat = ['0', '-32.88079', '-32.87624', '-32.8717', '-32.86715', '-32.8626', '-32.85806', '-32.85349', '-32.84896', '-32.84441', '-32.83986', '-32.8353', '-32.83076', '-32.82622','-32.82166', '-32.81711', '-32.81257', '-32.80802', '-32.80347', '-32.79892', '-32.79438', '-32.78983', '-32.78529', '-32.78074', '-32.77619', '-32.77164', '-32.76709', '-32.76254', '-32.758', '-32.75345', '-32.74891', '-32.74435', '-32.73981', '-32.73526'];

        //dd($ls);


       
        //  DIA 1
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

                $BD_datos = DB::table('mapacalors')
                    ->where('id_sector', '=', 1)   //chagres.
                    ->whereBetween('fecha', [$fecha . " 00:00:00", $fecha . " 23:59:59"])
                    ->where('correlativo', '=', $correlativo)
                    ->where('tipo_dato', '=', 1)
                    ->orderBy('serie_modelo', 'desc')
                    ->orderBy('id_maps', 'asc')
                    ->limit(24)
                    ->get();


                foreach ($BD_datos as $mp) {

                    $BD_velo = DB::table('mapacalors')
                        ->where('id_sector', '=', 1)   //chagres.
                        ->whereBetween('fecha', [$fecha . " 00:00:00", $fecha . " 23:59:59"])
                        ->where('correlativo', '=', $correlativo)
                        ->where('tipo_dato', '=', 2)
                        ->where('idhr', '=', $mp->idhr)
                        ->where('lat', '=', $mp->lat)
                        ->orderBy('serie_modelo', 'desc')
                        ->orderBy('id_maps', 'asc')
                        ->limit(1)
                        ->get();


                    $idhr = str_pad($mp->idhr, 2, "0", STR_PAD_LEFT);


                    for ($fls = 1; $fls <= 33; $fls++) {
                        $lonn = 'lon' . $fls;

                        
                            if ($mp->idhr != 23)
                                $ls[$fls] = $ls[$fls] . '"time_' . $idhr . '":{"velocity":"' . $mp->$lonn . '","direction":"' . $BD_velo[0]->$lonn . '"},';
                            else {
                                if($dias==2)dd("aca");
                                $ls[$fls] = $ls[$fls] . '"time_' . $idhr . '":{"velocity":"' . $mp->$lonn . '","direction":"' . $BD_velo[0]->$lonn . '"}},';
                            }
                        


                        
                    }//fin $fls

                  
                }//fin foreach $BD_datos
               


                for ($fls = 1; $fls <= 33; $fls++) {
                    $fcor[$correlativo] = $fcor[$correlativo] . $ls[$fls];
                }

               
         

               
            } //fin correlativo
                


            //---------------------------------------------------------------------------------------------------------------------------------------------------
            
            
            for ($fls = 1; $fls <= 33; $fls++) {
                $datos_dia = $datos_dia . $fcor[$fls];
            }

            $datos_dia= substr($datos_dia, 0, -1);
            $datos_dia = $datos_dia.'},';

        }//fin dias

        $cadena = substr($datos_dia, 0, -1);
        $cadena = $cadena.'}';

        return  $cadena;
    }

    public function maps_heat()
    {


        $mes = date('m');
        $anho = date('Y');
        $ayer = date('Y-m-d', strtotime("-1 day"));
        $hoy = date('Y-m-d');
        $manana = date('Y-m-d', strtotime("+1 day"));
        $pasado = date('Y-m-d', strtotime("+2 day"));
        $correlativo = 1;


        $fecha = '2022-12-20';

        $fechas = [$ayer, $hoy, $manana];
        //para guardar datos de longitudes
        $ls = ['', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''];

        //para guardar datos de latitudes procesados.
        $fcor = ['', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''];



        $lon = ['0', '-71.04462', '-71.03918', '-71.03378', '-71.02838', '-71.02295', '-71.01755', '-71.01215', '-71.00671', '-71.00131', '-70.99591', '-70.99048', '-70.98508', '-70.97964', '-70.97424', '-70.96884', '-70.96341', '-70.95801', '-70.95261', '-70.94717', '-70.94177', '-70.93637', '-70.93094', '-70.92554', '-70.9201', '-70.9147', '-70.9093', '-70.90387', '-70.89847', '-70.89307', '-70.88763', '-70.88223', '-70.87683', '-70.8714'];
        $lat = ['0', '-32.88079', '-32.87624', '-32.8717', '-32.86715', '-32.8626', '-32.85806', '-32.85349', '-32.84896', '-32.84441', '-32.83986', '-32.8353', '-32.83076', '-32.82622','-32.82166', '-32.81711', '-32.81257', '-32.80802', '-32.80347', '-32.79892', '-32.79438', '-32.78983', '-32.78529', '-32.78074', '-32.77619', '-32.77164', '-32.76709', '-32.76254', '-32.758', '-32.75345', '-32.74891', '-32.74435', '-32.73981', '-32.73526'];

        //dd($ls);


       
        //  DIA 1
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

                $BD_datos = DB::table('mapacalors')
                    ->where('id_sector', '=', 1)   //chagres.
                    ->whereBetween('fecha', [$fecha . " 00:00:00", $fecha . " 23:59:59"])
                    ->where('correlativo', '=', $correlativo)
                    ->where('tipo_dato', '=', 1)
                    ->orderBy('serie_modelo', 'desc')
                    ->orderBy('id_maps', 'asc')
                    ->limit(24)
                    ->get();


                foreach ($BD_datos as $mp) {

                    $BD_sm2 = DB::table('mapacalors')
                    ->where('id_sector', '=', 1)   //chagres.
                    ->whereBetween('fecha', [$fecha . " 00:00:00", $fecha . " 23:59:59"])
                    ->where('correlativo', '=', $correlativo)
                    ->where('tipo_dato', '=', 8)
                    ->where('idhr', '=', $mp->idhr)
                    ->where('lat', '=', $mp->lat)
                    ->orderBy('serie_modelo', 'desc')
                    ->orderBy('id_maps', 'asc')
                    ->limit(1)
                    ->get();

                  //  dd($BD_sm2);


                   $idhr = str_pad($mp->idhr, 2, "0", STR_PAD_LEFT);


                    for ($fls = 1; $fls <= 33; $fls++) {
                        $lonn = 'lon' . $fls;

                        
                            if ($mp->idhr != 23)
                                $ls[$fls] = $ls[$fls] . '"time_' . $idhr . '":'.$BD_sm2[0]->$lonn.',';


                               


                            else {
                                if($dias==2)dd("aca");
                                $ls[$fls] = $ls[$fls] . '"time_' . $idhr . '":15},';
                            }
                        


                        
                    }//fin $fls

                  
                }//fin foreach $BD_datos
               
              

                for ($fls = 1; $fls <= 33; $fls++) {
                    $fcor[$correlativo] = $fcor[$correlativo] . $ls[$fls];
                }

               
         

               
            } //fin correlativo
                

       
            //---------------------------------------------------------------------------------------------------------------------------------------------------
            
            
            for ($fls = 1; $fls <= 33; $fls++) {
                $datos_dia = $datos_dia . $fcor[$fls];
            }

            $datos_dia= substr($datos_dia, 0, -1);
            $datos_dia = $datos_dia.'},';

        }//fin dias

        $cadena = substr($datos_dia, 0, -1);
        $cadena = $cadena.'}';

        return  $cadena;
    }
}

