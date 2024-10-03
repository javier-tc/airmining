<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class Api1Controller extends Controller
{
    public function get_data_by_model(Request $request){

        $id_receptor=$request['id_receptor'];                           //estacion  
        $id_sector=$request['id_sector'];                               //Proyecto
        $id_model=$request['id_model'];   
        $id_air_quality_variable=$request['id_air_quality_variable'];   //so2 o pm10
        

       
        $proyectos=DB::table('estaciones')
        ->join('proyectos', 'proyectos.id_proyecto', '=', 'est_id_proyecto')
        ->where('id_estacion','=',$id_receptor)
        ->get();

        $id_proyecto =$proyectos[0]->id_proyecto;
        $pronombre = $proyectos[0]->pro_nproyecto;

        $poslat='-33.446237144974';
        $poslong='-70.66065394524051';        
       

        $mes = date('m');
        $anho = date('Y');
        $ayer_esp = date('d-m-Y', strtotime("-1 day"));
        $manana_esp = date('d-m-Y', strtotime("+1 day"));

        $ayer = date('Y-m-d', strtotime("-1 day"));
        $dayer = date('d', strtotime("-1 day"));

        $hoy = date('Y-m-d');
        $dhoy = date('d');

        $manana = date('Y-m-d', strtotime("+1 day"));
        $dmanana = date('d', strtotime("+1 day"));

        $pasado = date('Y-m-d', strtotime("+2 day"));
        $dpasado = date('d', strtotime("+2 day"));

        $first_datetime = $ayer . ' 00:00';


        $array_receptor_qual_variable_formatted_dates = '{"' . $ayer . '":"' . $dayer . '\/' . $mes . '\/' . $anho . '","' . $hoy . '":"' . $dhoy . '\/' . $mes . '\/' . $anho . '","' . $manana . '":"' . $dmanana . '\/' . $mes . '\/' . $anho . '","' . $pasado . '":"' . $dpasado . '\/' . $mes . '\/' . $anho . '"}}';

        $data_ayer = DB::table('registros')
        ->select(DB::raw("*,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
        DATE_FORMAT(fc_creacion,'%H') as hr_creacion,DATE_FORMAT(fc_creacion,'%H') as hr"))
        ->where('id_estacion', '=',$id_receptor)   //margarita
        ->whereBetween('fc_creacion', [$ayer . " 00:00:00", $ayer . " 23:59:59"])
        ->where('tipo_modelo', '=', $id_model)
        ->where('tipo_dato', '=', $id_air_quality_variable)
        ->orderBy('serie_modelo', 'desc')
        ->orderBy('id_registro', 'asc')
        ->limit(24)
        ->get();     
           

        $data_hoy = DB::table('registros')
        ->select(DB::raw("*,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
        DATE_FORMAT(fc_creacion,'%H') as hr_creacion,DATE_FORMAT(fc_creacion,'%H') as hr"))
        ->where('id_estacion', '=', $id_receptor)   
        ->whereBetween('fc_creacion', [$hoy . " 00:00:00", $hoy . " 23:59:59"])
        ->where('tipo_modelo', '=', $id_model)
        ->where('tipo_dato', '=', $id_air_quality_variable)
        ->orderBy('serie_modelo', 'desc')
        ->orderBy('id_registro', 'asc')
        ->limit(24)
        ->get();

        


        $data_manana = DB::table('registros')
        ->select(DB::raw("*,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
        DATE_FORMAT(fc_creacion,'%H') as hr_creacion,DATE_FORMAT(fc_creacion,'%H') as hr"))
        ->where('id_estacion', '=', $id_receptor)  
        ->whereBetween('fc_creacion', [$manana . " 00:00:00", $manana . " 23:59:59"])
        ->where('tipo_modelo', '=',  $id_model)
        ->where('tipo_dato', '=', $id_air_quality_variable)
        ->orderBy('serie_modelo', 'desc')
        ->orderBy('id_registro', 'asc')
        ->limit(24)
        ->get();
        

        $data_pasado = DB::table('registros')
        ->select(DB::raw("*,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
        DATE_FORMAT(fc_creacion,'%H') as hr_creacion,DATE_FORMAT(fc_creacion,'%H') as hr"))
        ->where('id_estacion', '=', $id_receptor)   //margarita
        ->whereBetween('fc_creacion', [$pasado . " 00:00:00", $pasado . " 23:59:59"])
        ->where('tipo_modelo', '=',  $id_model)
        ->where('tipo_dato', '=',  $id_air_quality_variable)
        ->orderBy('serie_modelo', 'desc')
        ->orderBy('id_registro', 'asc')
        ->limit(24)
        ->get();
       
        $data = '{"' . $ayer . '":{';
            $range = '{"' . $ayer . '":{';
            foreach ($data_ayer as $key => $mar) {
                if ($mar->hr_creacion == 23) {
                    $data = $data . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '"';
                    $range = $range . '"time_' . $mar->hr_creacion . '":"' . $mar->range . '"';
                } else {
                    $data = $data . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '",';
                    $range = $range . '"time_' . $mar->hr_creacion . '":"' . $mar->range . '",';
                }
            }

            $data = $data . '},"' . $hoy . '":{';
            $range = $range . '},"' . $hoy . '":{';

            foreach ($data_hoy as $key => $mar2) {
                if ($mar2->hr_creacion == 23) {
                    $data = $data . '"time_' . $mar2->hr_creacion . '":"' . $mar2->dato . '"';
                    $range = $range . '"time_' . $mar2->hr_creacion . '":"' . $mar2->range . '"';
                } else {
                    $data = $data . '"time_' . $mar2->hr_creacion . '":"' . $mar2->dato . '",';
                    $range = $range . '"time_' . $mar2->hr_creacion . '":"' . $mar2->range . '",';
                }
            }
            // dd($data_neu);

            $data = $data . '},"' . $manana . '":{';
            $range = $range . '},"' . $manana . '":{';

            foreach ($data_manana as $key => $mar3) {
                if ($mar3->hr_creacion == 23) {
                    $data = $data . '"time_' . $mar3->hr_creacion . '":"' . $mar3->dato . '"';
                    $range = $range . '"time_' . $mar3->hr_creacion . '":"' . $mar3->range . '"';
                } else {
                    $data = $data . '"time_' . $mar3->hr_creacion . '":"' . $mar3->dato . '",';
                    $range = $range . '"time_' . $mar3->hr_creacion . '":"' . $mar3->range . '",';
                }
            }

            $data = $data . '},"' . $pasado . '":{';
            $range = $range . '},"' . $pasado . '":{';

            foreach ($data_pasado as $key => $mar4) {
                if ($mar4->hr_creacion == 23) {
                    $data = $data . '"time_' . $mar4->hr_creacion . '":"' . $mar4->dato . '"';
                    $range = $range . '"time_' . $mar4->hr_creacion . '":"' . $mar4->range . '"';
                } else {
                    $data = $data . '"time_' . $mar4->hr_creacion . '":"' . $mar4->dato . '",';
                    $range = $range . '"time_' . $mar4->hr_creacion . '":"' . $mar4->range . '",';
                }
            }

            $data = $data . '}}';
            $range = $range . '}}';

            $array_receptor_qual_neur_model_values_p = $data;
            $array_receptor_qual_neur_model_ranges_p = $range;


           
       
        if($id_air_quality_variable==8)

        {
            $ori='{"sector_info":{"id":"1","name":"'.$pronombre.'","id_client":"1","id_project":"1","air_models":"[\"1\",\"2\",\"3\"]","latitude":"'.$poslat.'","longitude":"'. $poslong.'","description":"Sector que contiene todas las instalaciones de la fundici\u00f3n","created_by":"1","modified_by":"1","created":"2022-07-29 16:02:55","modified":"2022-09-03 20:07:44","deleted":"0"},
            
            "air_quality_variable":{"id":"9","id_air_variable_type":"2","id_unit_type":"15","name":"Material particulado respirable","sigla":"SO2","icono":"air_pm10.png","alias":"Mat part resp","deleted":"0","name_variable_type":"air_quality","name_unit_type":"Concentraci\u00f3n"},"unit_qual":{"id":"40","id_tipo_unidad":"15","nombre":"\u00b5g\/m3","nombre_real":"Microgramo por metro c\u00fabico","indicador":null,"deleted":"0"},"unit_type_qual":"Concentraci\u00f3n","first_datetime":"'.$first_datetime.'",
            
            "array_alerts_qual_chart":[{"color":"#299426","value":"100"},{"color":"#a4cf29","value":"195"},{"color":"#ad5f26","value":"240"},{"color":"#a12727","value":"330"},{"color":"#5e1994"}],
            
            "array_alerts_qual_calheatmap_colors":["#299426","#a4cf29","#ad5f26","#a12727","#5e1994"],
            
            "array_alerts_qual_calheatmap_ranges":["100","195","240","330"],
            "array_receptor_qual_variable_values_p":'.$data.',
            "array_receptor_qual_variable_ranges_p":'.$range.',
            "array_receptor_qual_variable_formatted_dates":'.$array_receptor_qual_variable_formatted_dates;
        }
        if($id_air_quality_variable==9){
            $ori='{"sector_info":{"id":"1","name":"'.$pronombre.'","id_client":"1","id_project":"1","air_models":"[\"1\",\"2\",\"3\"]","latitude":"'.$poslat.'","longitude":"'. $poslong.'","description":"Sector que contiene todas las instalaciones de la fundici\u00f3n","created_by":"1","modified_by":"1","created":"2022-07-29 16:02:55","modified":"2022-09-03 20:07:44","deleted":"0"},
            
            "air_quality_variable":{"id":"9","id_air_variable_type":"2","id_unit_type":"15","name":"Material particulado respirable","sigla":"PM10","icono":"air_pm10.png","alias":"Mat part resp","deleted":"0","name_variable_type":"air_quality","name_unit_type":"Concentraci\u00f3n"},"unit_qual":{"id":"40","id_tipo_unidad":"15","nombre":"\u00b5g\/m3","nombre_real":"Microgramo por metro c\u00fabico","indicador":null,"deleted":"0"},"unit_type_qual":"Concentraci\u00f3n","first_datetime":"'.$first_datetime.'",
            
            "array_alerts_qual_chart":[{"color":"#299426","value":"100"},{"color":"#a4cf29","value":"195"},{"color":"#ad5f26","value":"240"},{"color":"#a12727","value":"330"},{"color":"#5e1994"}],
            
            "array_alerts_qual_calheatmap_colors":["#299426","#a4cf29","#ad5f26","#a12727","#5e1994"],
            
            "array_alerts_qual_calheatmap_ranges":["100","195","240","330"],
            "array_receptor_qual_variable_values_p":'.$data.',
            "array_receptor_qual_variable_ranges_p":'.$range.',
            "array_receptor_qual_variable_formatted_dates":'.$array_receptor_qual_variable_formatted_dates;

        }

        return $ori;


    }
}
