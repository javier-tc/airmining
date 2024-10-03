<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Api2Controller extends Controller
{
    public function get_data_receptor(Request $request)
    {

        $id_estacion = $request['id_receptor'];                           //estacion  
        $id_air_quality_variable = $request['air_quality_variable'];   //so2 o pm10
        $id_meteorological_variable = $request['meteorological_variable'];
        $id_sector = $request['id_sector'];

        $tipo_dato = 0;   //8 so2; 9 pm10

        $mes = date('m');
        $anho = date('Y');

        $ayer = date('Y-m-d', strtotime("-1 day"));
        $dayer = date('d', strtotime("-1 day"));

        $hoy = date('Y-m-d');
        $dhoy = date('d');

        $manana = date('Y-m-d', strtotime("+1 day"));
        $dmanana = date('d', strtotime("+1 day"));


        $pasado = date('Y-m-d', strtotime("+2 day"));
        $dpasado = date('d', strtotime("+2 day"));
        $array_formatted_dates = '{"' . $ayer . '":"' . $dayer . '\/' . $mes . '\/' . $anho . '","' . $hoy . '":"' . $dhoy . '\/' . $mes . '\/' . $anho . '","' . $manana . '":"' . $dmanana . '\/' . $mes . '\/' . $anho . '","' . $pasado . '":"' . $dpasado . '\/' . $mes . '\/' . $anho . '"}';
        $first_datetime = $ayer . ' 00:00';


       //$temp = $this->get_temperatura();
        //$presion = $this->get_presion();
        $meteo = "";
        $array="";




        if ($id_air_quality_variable == 8) {
            $air = $this->get_data($id_estacion, 8);
            $name = '"Di\u00f3xido de azufre","sigla":"SO2","icono":"air_sulfur_dioxide.png","alias":"Diox azufre"';
        } else {
            $air = $this->get_data($id_estacion, 9);
            $name = '"Material particulado respirable","sigla":"PM10","icono":"air_pm10.png","alias":"Mat part resp"';
        }



        switch ($id_meteorological_variable) {

            case 1:
                $meteo = $this->get_veldir($id_estacion);

                $array = '{"air_quality_variable":{"id":"8","id_air_variable_type":"2","id_unit_type":"15",
                "name":' . $name . ',"deleted":"0","name_variable_type":"air_quality","name_unit_type":"Concentraci\u00f3n"},"meteorological_variable":{"id":"2","id_air_variable_type":"1","id_unit_type":"11","name":"Direcci\u00f3n del viento","sigla":"WD","icono":"air_wind_direction.png","alias":"Dir viento","deleted":"0","name_variable_type":"meteorological","name_unit_type":"Direcci\u00f3n"},"unit_qual":{"id":"40","id_tipo_unidad":"15","nombre":"\u00b5g\/m3","nombre_real":"Microgramo por metro c\u00fabico","indicador":null,"deleted":"0"},"unit_type_qual":"Concentraci\u00f3n","unit_meteo":{"id":"30","id_tipo_unidad":"11","nombre":"\u00b0","nombre_real":"Grados","indicador":null,"deleted":"0"},"unit_type_meteo":"Direcci\u00f3n",
                "sector_info":{"id":"1","name":"Chagres","id_client":"1","id_project":"1","air_models":"[\"1\",\"2\",\"3\"]","latitude":"-32.8061616","longitude":"-70.9586498","description":"Sector que contiene todas las instalaciones de la fundici\u00f3n","created_by":"1","modified_by":"1","created":"2020-07-29 16:02:55","modified":"2020-09-03 20:07:44","deleted":"0"},
                "first_datetime":"' . $first_datetime . '",
                "array_alerts_qual_chart":[{"color":"#299426","value":"100"},{"color":"#a4cf29","value":"195"},{"color":"#ad5f26","value":"240"},{"color":"#a12727","value":"330"},{"color":"#5e1994"}],
                "array_alerts_qual_calheatmap_colors":["#299426","#a4cf29","#ad5f26","#a12727","#5e1994"],
                "array_alerts_qual_calheatmap_ranges":["100","195","240","330"],
                "array_receptor_qual_variable_values_p":' . $air[0] . ',
                "array_receptor_qual_variable_ranges_p":' . $air[1] . ',
                "array_receptor_qual_variable_formatted_dates":' . $array_formatted_dates . ',
                "variable_vel_viento":{"id":"1","id_air_variable_type":"1","id_unit_type":"10","name":"Velocidad del viento","sigla":"WS","icono":"air_wind_speed.png","alias":"Vel viento","deleted":"0"},"array_alerts_meteo_chart":[{"color":"#d298ed","value":"2"},{"color":"#7152a3","value":"4"},{"color":"#6a2782","value":"6"},{"color":"#44136b"}],"array_alerts_meteo_calheatmap_colors":["#d298ed","#7152a3","#6a2782","#44136b"],"array_alerts_meteo_calheatmap_ranges":["2","4","6"],"unit_meteo_vel":{"id":"26","id_tipo_unidad":"10","nombre":"m\/s","nombre_real":"Metros por segundo","indicador":null,"deleted":"0"},"unit_type_meteo_vel":"Velocidad","unit_meteo_dir":{"id":"30","id_tipo_unidad":"11","nombre":"\u00b0","nombre_real":"Grados","indicador":null,"deleted":"0"},"unit_type_meteo_dir":"Direcci\u00f3n",
                "array_receptor_meteo_data_values_p_dir":' . $meteo[0] . ',
                "array_receptor_meteo_data_values_p_vel":' . $meteo[1] . ',
                "array_receptor_meteo_data_ranges_p_vel":' . $meteo[2] . ',
                "array_receptor_meteo_variable_formatted_dates":' . $array_formatted_dates . '}';
                break;
            case 2:
                $meteo = $this->get_veldir($id_estacion);
                $array = '{"air_quality_variable":{"id":"8","id_air_variable_type":"2","id_unit_type":"15",
                "name":' . $name . ',"deleted":"0",,"name_variable_type":"air_quality","name_unit_type":"Concentraci\u00f3n"},
                "meteorological_variable":{"id":"2","id_air_variable_type":"1","id_unit_type":"11",
                "name":"Direcci\u00f3n del viento","sigla":"WD","icono":"air_wind_direction.png","alias":"Dir viento","deleted":"0","name_variable_type":"meteorological","name_unit_type":"Direcci\u00f3n"},"unit_qual":{"id":"40","id_tipo_unidad":"15","nombre":"\u00b5g\/m3","nombre_real":"Microgramo por metro c\u00fabico","indicador":null,"deleted":"0"},"unit_type_qual":"Concentraci\u00f3n","unit_meteo":{"id":"30","id_tipo_unidad":"11","nombre":"\u00b0","nombre_real":"Grados","indicador":null,"deleted":"0"},"unit_type_meteo":"Direcci\u00f3n",
                "sector_info":{"id":"1","name":"Chagres","id_client":"1","id_project":"1","air_models":"[\"1\",\"2\",\"3\"]","latitude":"-32.8061616","longitude":"-70.9586498","description":"Sector que contiene todas las instalaciones de la fundici\u00f3n","created_by":"1","modified_by":"1","created":"2020-07-29 16:02:55","modified":"2020-09-03 20:07:44","deleted":"0"},
                "first_datetime":"' . $first_datetime . '",
                "array_alerts_qual_chart":[{"color":"#299426","value":"100"},{"color":"#a4cf29","value":"195"},{"color":"#ad5f26","value":"240"},{"color":"#a12727","value":"330"},{"color":"#5e1994"}],
                "array_alerts_qual_calheatmap_colors":["#299426","#a4cf29","#ad5f26","#a12727","#5e1994"],
                "array_alerts_qual_calheatmap_ranges":["100","195","240","330"],
                "array_receptor_qual_variable_values_p":' . $air[0] . ',
                "array_receptor_qual_variable_ranges_p":' . $air[1] . ',
                "array_receptor_qual_variable_formatted_dates":' . $array_formatted_dates . ',
                "variable_vel_viento":{"id":"1","id_air_variable_type":"1","id_unit_type":"10","name":"Velocidad del viento","sigla":"WS","icono":"air_wind_speed.png","alias":"Vel viento","deleted":"0"},"array_alerts_meteo_chart":[{"color":"#d298ed","value":"2"},{"color":"#7152a3","value":"4"},{"color":"#6a2782","value":"6"},{"color":"#44136b"}],"array_alerts_meteo_calheatmap_colors":["#d298ed","#7152a3","#6a2782","#44136b"],"array_alerts_meteo_calheatmap_ranges":["2","4","6"],"unit_meteo_vel":{"id":"26","id_tipo_unidad":"10","nombre":"m\/s","nombre_real":"Metros por segundo","indicador":null,"deleted":"0"},"unit_type_meteo_vel":"Velocidad","unit_meteo_dir":{"id":"30","id_tipo_unidad":"11","nombre":"\u00b0","nombre_real":"Grados","indicador":null,"deleted":"0"},"unit_type_meteo_dir":"Direcci\u00f3n",
                "array_receptor_meteo_data_values_p_dir":' . $meteo[0] . ',
                "array_receptor_meteo_data_values_p_vel":' . $meteo[1] . ',
                "array_receptor_meteo_data_ranges_p_vel":' . $meteo[2] . ',
                "array_receptor_meteo_variable_formatted_dates":' . $array_formatted_dates . '}';
                break;

            case 3:
                $meteo = $this->get_temperatura($id_estacion);
                $array = '{"air_quality_variable":{"id":"8","id_air_variable_type":"2","id_unit_type":"15",
                    "name":' . $name . ',"deleted":"0","name_variable_type":"air_quality","name_unit_type":"Concentraci\u00f3n"},
                    "meteorological_variable":{"id":"3","id_air_variable_type":"1","id_unit_type":"12",
                    "name":"Temperatura","sigla":"Temp","icono":"air_temperature.png","alias":"Temp","deleted":"0","name_variable_type":"meteorological","name_unit_type":"Temperatura"},"unit_qual":{"id":"40","id_tipo_unidad":"15","nombre":"\u00b5g\/m3","nombre_real":"Microgramo por metro c\u00fabico","indicador":null,"deleted":"0"},"unit_type_qual":"Concentraci\u00f3n","unit_meteo":{"id":"31","id_tipo_unidad":"12","nombre":"\u00b0C","nombre_real":"Grados Celsius","indicador":null,"deleted":"0"},"unit_type_meteo":"Temperatura","sector_info":{"id":"1","name":"Chagres","id_client":"1","id_project":"1","air_models":"[\"1\",\"2\",\"3\"]","latitude":"-32.8061616","longitude":"-70.9586498","description":"Sector que contiene todas las instalaciones de la fundici\u00f3n","created_by":"1","modified_by":"1","created":"2020-07-29 16:02:55","modified":"2020-09-03 20:07:44","deleted":"0"},
                    "first_datetime":"' . $first_datetime . '",
                    "array_alerts_qual_chart":[{"color":"#299426","value":"100"},{"color":"#a4cf29","value":"195"},{"color":"#ad5f26","value":"240"},{"color":"#a12727","value":"330"},{"color":"#5e1994"}],
                    "array_alerts_qual_calheatmap_colors":["#299426","#a4cf29","#ad5f26","#a12727","#5e1994"],
                    "array_alerts_qual_calheatmap_ranges":["100","195","240","330"],
                    "array_receptor_qual_variable_values_p":' . $air[0] . ',
                    "array_receptor_qual_variable_ranges_p":' . $air[1] . ',
                    "array_receptor_qual_variable_formatted_dates":' . $array_formatted_dates . ',
                    "array_alerts_meteo_chart":[{"color":"#cafae6","value":"5"},{"color":"#8de3c4","value":"10"},{"color":"#58cca2","value":"15"},{"color":"#37b093","value":"20"},{"color":"#2e997f","value":"25"},{"color":"#1d705c","value":"30"},{"color":"#0d3d2f"}],
                    "array_alerts_meteo_calheatmap_colors":["#cafae6","#8de3c4","#58cca2","#37b093","#2e997f","#1d705c","#0d3d2f"],
                    "array_alerts_meteo_calheatmap_ranges":["5","10","15","20","25","30"],
                    "array_receptor_meteo_data_values_p":' . $meteo[0] . ',
                    "array_receptor_meteo_data_ranges_p":' . $meteo[1] . ',
                    "array_receptor_meteo_variable_formatted_dates":' . $array_formatted_dates . '}';
                break;
            case 7:
                $meteo = $this->get_presion();
                $array='{"air_quality_variable":{"id":"9","id_air_variable_type":"2","id_unit_type":"15",
                    "name":' . $name . ',"deleted":"0",
                    "name_variable_type":"air_quality","name_unit_type":"Concentraci\u00f3n"},"meteorological_variable":{"id":"7","id_air_variable_type":"1","id_unit_type":"14",
                    "name":"Presi\u00f3n barom\u00e9trica","sigla":"PR","icono":"air_barometric_pressure.png","alias":"Pres barom","deleted":"0","name_variable_type":"meteorological","name_unit_type":"Presi\u00f3n"},"unit_qual":{"id":"40","id_tipo_unidad":"15","nombre":"\u00b5g\/m3","nombre_real":"Microgramo por metro c\u00fabico","indicador":null,"deleted":"0"},"unit_type_qual":"Concentraci\u00f3n","unit_meteo":{"id":"35","id_tipo_unidad":"14","nombre":"atm","nombre_real":"Atm\u00f3sfera","indicador":null,"deleted":"0"},"unit_type_meteo":"Presi\u00f3n","sector_info":{"id":"1","name":"Chagres","id_client":"1","id_project":"1","air_models":"[\"1\",\"2\",\"3\"]","latitude":"-32.8061616","longitude":"-70.9586498","description":"Sector que contiene todas las instalaciones de la fundici\u00f3n","created_by":"1","modified_by":"1","created":"2020-07-29 16:02:55","modified":"2020-09-03 20:07:44","deleted":"0"},
                    "first_datetime":"' . $first_datetime . '",
                    "array_alerts_qual_chart":[{"color":"#229427","value":"100"},{"color":"#a6b035","value":"195"},{"color":"#b5642a","value":"240"},{"color":"#a12820","value":"330"},{"color":"#511c94"}],
                    "array_alerts_qual_calheatmap_colors":["#229427","#a6b035","#b5642a","#a12820","#511c94"],"array_alerts_qual_calheatmap_ranges":["100","195","240","330"],
                    "array_receptor_qual_variable_values_p":' . $air[0] . ',
                    "array_receptor_qual_variable_ranges_p":' . $air[1] . ',
                    "array_receptor_qual_variable_formatted_dates":' . $array_formatted_dates . ',
                    "array_alerts_meteo_chart":[{"color":null}],
                    "array_alerts_meteo_calheatmap_colors":[],
                    "array_alerts_meteo_calheatmap_ranges":[],
                    "array_receptor_meteo_data_values_p":' . $meteo[0] . ',
                    "array_receptor_meteo_data_ranges_p":' . $meteo[1] . ',
                    "array_receptor_meteo_variable_formatted_dates":' . $array_formatted_dates . '}';
                break;
        }

        return $array;
    }

    public function get_data($id_estacion, $tipo_dato)
    {
        $ayer = date('Y-m-d', strtotime("-1 day"));
        $hoy = date('Y-m-d');
        $manana = date('Y-m-d', strtotime("+1 day"));
        $pasado = date('Y-m-d', strtotime("+2 day"));

        $data_num_ayer = DB::table('registros')
            ->select(DB::raw("*,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
                DATE_FORMAT(fc_creacion,'%H') as hr_creacion,DATE_FORMAT(fc_creacion,'%H') as hr"))
            ->where('id_estacion', '=', $id_estacion)   //margarita
            ->whereBetween('fc_creacion', [$ayer . " 00:00:00", $ayer . " 23:59:59"])
            ->where('tipo_modelo', '=', 3)
            ->where('tipo_dato', '=', $tipo_dato)
            ->orderBy('serie_modelo', 'desc')
            ->orderBy('id_registro', 'asc')
            ->limit(24)
            ->get();

        $data_num_hoy = DB::table('registros')
            ->select(DB::raw("*,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
                DATE_FORMAT(fc_creacion,'%H') as hr_creacion,DATE_FORMAT(fc_creacion,'%H') as hr"))
            ->where('id_estacion', '=', $id_estacion)   //margarita
            ->whereBetween('fc_creacion', [$hoy . " 00:00:00", $hoy . " 23:59:59"])
            ->where('tipo_modelo', '=', 3)
            ->where('tipo_dato', '=', $tipo_dato)
            ->orderBy('serie_modelo', 'desc')
            ->orderBy('id_registro', 'asc')
            ->limit(24)
            ->get();

        $data_num_manana = DB::table('registros')
            ->select(DB::raw("*,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
                DATE_FORMAT(fc_creacion,'%H') as hr_creacion,DATE_FORMAT(fc_creacion,'%H') as hr"))
            ->where('id_estacion', '=', $id_estacion)   //margarita
            ->whereBetween('fc_creacion', [$manana . " 00:00:00", $manana . " 23:59:59"])
            ->where('tipo_modelo', '=', 3)
            ->where('tipo_dato', '=', $tipo_dato)
            ->orderBy('serie_modelo', 'desc')
            ->orderBy('id_registro', 'asc')
            ->limit(24)
            ->get();

        $data_num_pasado = DB::table('registros')
            ->select(DB::raw("*,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
                DATE_FORMAT(fc_creacion,'%H') as hr_creacion,DATE_FORMAT(fc_creacion,'%H') as hr"))
            ->where('id_estacion', '=', $id_estacion)   //margarita
            ->whereBetween('fc_creacion', [$pasado . " 00:00:00", $pasado . " 23:59:59"])
            ->where('tipo_modelo', '=', 3)
            ->where('tipo_dato', '=', $tipo_dato)
            ->orderBy('serie_modelo', 'desc')
            ->orderBy('id_registro', 'asc')
            ->limit(24)
            ->get();
          

        $data =  '{"' . $ayer . '":{';
        $range = '{"' . $ayer . '":{';

        if ($data_num_ayer->count() != 0) {
        foreach ($data_num_ayer as $key => $mar) {
            if ($mar->hr_creacion == 23) {
                $data = $data . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '"';
                $range = $range . '"time_' . $mar->hr_creacion . '":"' . $mar->range . '"';
            } else {
                $data = $data . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '",';
                $range = $range . '"time_' . $mar->hr_creacion . '":"' . $mar->range . '",';
            }
        }
    } else {
        $vacio = $this->rtrn_vacio();
        $data = $data . $vacio[0];
        $range = $range . $vacio[1];
    }
        

        $data = $data . '},"' . $hoy . '":{';
        $range = $range . '},"' . $hoy . '":{';

            if ($data_num_hoy->count() != 0) {
        foreach ($data_num_hoy as $key => $mar) {
            if ($mar->hr_creacion == 23) {
                $data = $data . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '"';
                $range = $range . '"time_' . $mar->hr_creacion . '":"' . $mar->range . '"';
            } else {
                $data = $data . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '",';
                $range = $range . '"time_' . $mar->hr_creacion . '":"' . $mar->range . '",';
            }
        }
    } else {
        $vacio = $this->rtrn_vacio();
        $data = $data . $vacio[0];
        $range = $range . $vacio[1];
    }
        $data = $data . '},"' . $manana . '":{';
        $range = $range . '},"' . $manana . '":{';

            if ($data_num_manana->count() != 0) {    
        foreach ($data_num_manana as $key => $mar) {
            if ($mar->hr_creacion == 23) {
                $data = $data . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '"';
                $range = $range . '"time_' . $mar->hr_creacion . '":"' . $mar->range . '"';
            } else {
                $data = $data . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '",';
                $range = $range . '"time_' . $mar->hr_creacion . '":"' . $mar->range . '",';
            }
        }
    } else {
        $vacio = $this->rtrn_vacio();
        $data = $data . $vacio[0];
        $range = $range . $vacio[1];
    }
        $data = $data . '},"' . $pasado . '":{';
        $range = $range . '},"' . $pasado . '":{';

            if ($data_num_pasado->count() != 0) {   
             
        foreach ($data_num_pasado as $key => $mar) {
            if ($mar->hr_creacion == 23) {
                $data = $data . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '"';
                $range = $range . '"time_' . $mar->hr_creacion . '":"' . $mar->range . '"';
            } else {
                $data = $data . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '",';
                $range = $range . '"time_' . $mar->hr_creacion . '":"' . $mar->range . '",';
            }
        }
    } else {

        $vacio = $this->rtrn_vacio();
        $data = $data . $vacio[0];
        $range = $range . $vacio[1];
    }
        $data = $data . '}}';
        $range = $range . '}}';
        $datos[0] = $data;
        $datos[1] = $range;

        return $datos;
    }


    public function get_veldir($id_estacion)
    {

        //---------------------------------------------------------
        //velocidad
        $ayer = date('Y-m-d', strtotime("-1 day"));
        $hoy = date('Y-m-d');
        $manana = date('Y-m-d', strtotime("+1 day"));
        $pasado = date('Y-m-d', strtotime("+2 day"));

        $data_vel_ayer = DB::table('registros')
            ->select(DB::raw("*,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
            DATE_FORMAT(fc_creacion,'%H') as hr_creacion,DATE_FORMAT(fc_creacion,'%H') as hr"))
            ->where('id_estacion', '=', $id_estacion)   //margarita
            ->whereBetween('fc_creacion', [$ayer . " 00:00:00", $ayer . " 23:59:59"])
            ->where('tipo_modelo', '=', 3)
            ->where('tipo_dato', '=', 1)
            ->orderBy('serie_modelo', 'desc')
            ->orderBy('id_registro', 'asc')
            ->limit(24)
            ->get();



        $data_vel_hoy = DB::table('registros')
            ->select(DB::raw("*,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
            DATE_FORMAT(fc_creacion,'%H') as hr_creacion,DATE_FORMAT(fc_creacion,'%H') as hr"))
            ->where('id_estacion', '=', $id_estacion)   //margarita
            ->whereBetween('fc_creacion', [$hoy . " 00:00:00", $hoy . " 23:59:59"])
            ->where('tipo_modelo', '=', 3)
            ->where('tipo_dato', '=', 1)
            ->orderBy('serie_modelo', 'desc')
            ->orderBy('id_registro', 'asc')
            ->limit(24)
            ->get();

        $data_vel_manana = DB::table('registros')
            ->select(DB::raw("*,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
            DATE_FORMAT(fc_creacion,'%H') as hr_creacion,DATE_FORMAT(fc_creacion,'%H') as hr"))
            ->where('id_estacion', '=', $id_estacion)   //margarita
            ->whereBetween('fc_creacion', [$manana . " 00:00:00", $manana . " 23:59:59"])
            ->where('tipo_modelo', '=', 3)
            ->where('tipo_dato', '=', 1)
            ->orderBy('serie_modelo', 'desc')
            ->orderBy('id_registro', 'asc')
            ->limit(24)
            ->get();

        $data_vel_pasado = DB::table('registros')
            ->select(DB::raw("*,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
            DATE_FORMAT(fc_creacion,'%H') as hr_creacion,DATE_FORMAT(fc_creacion,'%H') as hr"))
            ->where('id_estacion', '=', $id_estacion)   //margarita
            ->whereBetween('fc_creacion', [$pasado . " 00:00:00", $pasado . " 23:59:59"])
            ->where('tipo_modelo', '=', 3)
            ->where('tipo_dato', '=', 1)
            ->orderBy('serie_modelo', 'desc')
            ->orderBy('id_registro', 'asc')
            ->limit(24)
            ->get();



        $vel =  '{"' . $ayer . '":{';
        $range_vel = '{"' . $ayer . '":{';

        foreach ($data_vel_ayer as $key => $mar) {
            if ($mar->hr_creacion == 23) {
                $vel = $vel . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '"';
                $range_vel = $range_vel . '"time_' . $mar->hr_creacion . '":"' . $mar->range . '"';
            } else {
                $vel = $vel . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '",';
                $range_vel = $range_vel . '"time_' . $mar->hr_creacion . '":"' . $mar->range . '",';
            }
        }

        $vel = $vel . '},"' . $hoy . '":{';
        $range_vel = $range_vel . '},"' . $hoy . '":{';
        foreach ($data_vel_hoy as $key => $mar) {
            if ($mar->hr_creacion == 23) {
                $vel = $vel . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '"';
                $range_vel = $range_vel . '"time_' . $mar->hr_creacion . '":"' . $mar->range . '"';
            } else {
                $vel = $vel . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '",';
                $range_vel = $range_vel . '"time_' . $mar->hr_creacion . '":"' . $mar->range . '",';
            }
        }
        $vel = $vel . '},"' . $manana . '":{';
        $range_vel = $range_vel . '},"' . $manana . '":{';

        foreach ($data_vel_manana as $key => $mar) {
            if ($mar->hr_creacion == 23) {
                $vel = $vel . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '"';
                $range_vel = $range_vel . '"time_' . $mar->hr_creacion . '":"' . $mar->range . '"';
            } else {
                $vel = $vel . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '",';
                $range_vel = $range_vel . '"time_' . $mar->hr_creacion . '":"' . $mar->range . '",';
            }
        }
        $vel = $vel . '},"' . $pasado . '":{';
        $range_vel = $range_vel . '},"' . $pasado . '":{';

        foreach ($data_vel_pasado as $key => $mar) {
            if ($mar->hr_creacion == 23) {
                $vel = $vel . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '"';
                $range_vel = $range_vel . '"time_' . $mar->hr_creacion . '":"' . $mar->range . '"';
            } else {
                $vel = $vel . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '",';
                $range_vel = $range_vel . '"time_' . $mar->hr_creacion . '":"' . $mar->range . '",';
            }
        }
        $vel = $vel . '}}';
        $range_vel = $range_vel . '}}';

        $data_dir_ayer = DB::table('registros')
            ->select(DB::raw("TRUNCATE(dato,2) as dato,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
            DATE_FORMAT(fc_creacion,'%H') as hr_creacion,DATE_FORMAT(fc_creacion,'%H') as hr"))
            ->where('id_estacion', '=', $id_estacion)   //margarita
            ->whereBetween('fc_creacion', [$ayer . " 00:00:00", $ayer . " 23:59:59"])
            ->where('tipo_modelo', '=', 3)
            ->where('tipo_dato', '=', 2)
            ->orderBy('serie_modelo', 'desc')
            ->orderBy('id_registro', 'asc')
            ->limit(24)
            ->get();

        $data_dir_hoy = DB::table('registros')
            ->select(DB::raw("TRUNCATE(dato,2) as dato,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
            DATE_FORMAT(fc_creacion,'%H') as hr_creacion,DATE_FORMAT(fc_creacion,'%H') as hr"))
            ->where('id_estacion', '=', $id_estacion)   //margarita
            ->whereBetween('fc_creacion', [$hoy . " 00:00:00", $hoy . " 23:59:59"])
            ->where('tipo_modelo', '=', 3)
            ->where('tipo_dato', '=', 2)
            ->orderBy('serie_modelo', 'desc')
            ->orderBy('id_registro', 'asc')
            ->limit(24)
            ->get();

        $data_dir_manana = DB::table('registros')
            ->select(DB::raw("TRUNCATE(dato,2) as dato,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
            DATE_FORMAT(fc_creacion,'%H') as hr_creacion,DATE_FORMAT(fc_creacion,'%H') as hr"))
            ->where('id_estacion', '=', $id_estacion)   //margarita
            ->whereBetween('fc_creacion', [$manana . " 00:00:00", $manana . " 23:59:59"])
            ->where('tipo_modelo', '=', 3)
            ->where('tipo_dato', '=', 2)
            ->orderBy('serie_modelo', 'desc')
            ->orderBy('id_registro', 'asc')
            ->limit(24)
            ->get();

        $data_dir_pasado = DB::table('registros')
            ->select(DB::raw("TRUNCATE(dato,2) as dato,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
            DATE_FORMAT(fc_creacion,'%H') as hr_creacion,DATE_FORMAT(fc_creacion,'%H') as hr"))
            ->where('id_estacion', '=', $id_estacion)   //margarita
            ->whereBetween('fc_creacion', [$pasado . " 00:00:00", $pasado . " 23:59:59"])
            ->where('tipo_modelo', '=', 3)
            ->where('tipo_dato', '=', 2)
            ->orderBy('serie_modelo', 'desc')
            ->orderBy('id_registro', 'asc')
            ->limit(24)
            ->get();

        $dir = '{"' . $ayer . '":{';

        foreach ($data_dir_ayer as $key => $mar) {
            if ($mar->hr_creacion == 23) {
                $dir = $dir . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '"';
            } else {
                $dir = $dir . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '",';
            }
        }

        $dir = $dir . '},"' . $hoy . '":{';
        foreach ($data_dir_hoy as $key => $mar) {
            if ($mar->hr_creacion == 23) {
                $dir = $dir . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '"';
            } else {
                $dir = $dir . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '",';
            }
        }

        $dir = $dir . '},"' . $manana . '":{';

        foreach ($data_dir_manana as $key => $mar) {
            if ($mar->hr_creacion == 23) {
                $dir = $dir . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '"';
            } else {
                $dir = $dir . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '",';
            }
        }
        $dir = $dir . '},"' . $pasado . '":{';

        foreach ($data_dir_pasado as $key => $mar) {
            if ($mar->hr_creacion == 23) {
                $dir = $dir . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '"';
            } else {
                $dir = $dir . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '",';
            }
        }
        $dir = $dir . '}}';


        $datos[0] = $dir;
        $datos[1] = $vel;
        $datos[2] = $range_vel;

        return $datos;
    }

    public function get_temperatura($id_estacion)
    {
        $ayer = date('Y-m-d', strtotime("-1 day"));
        $hoy = date('Y-m-d');
        $manana = date('Y-m-d', strtotime("+1 day"));
        $pasado = date('Y-m-d', strtotime("+2 day"));

        $data_num_ayer = DB::table('registros')
            ->select(DB::raw("*,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
                DATE_FORMAT(fc_creacion,'%H') as hr_creacion,DATE_FORMAT(fc_creacion,'%H') as hr"))
            ->where('id_estacion', '=', $id_estacion)   //meteo
            ->whereBetween('fc_creacion', [$ayer . " 00:00:00", $ayer . " 23:59:59"])
            ->where('tipo_modelo', '=', 3)
            ->where('tipo_dato', '=', 3)
            ->orderBy('serie_modelo', 'desc')
            ->orderBy('id_registro', 'asc')
            ->limit(24)
            ->get();

        $data_num_hoy = DB::table('registros')
            ->select(DB::raw("*,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
                DATE_FORMAT(fc_creacion,'%H') as hr_creacion,DATE_FORMAT(fc_creacion,'%H') as hr"))
            ->where('id_estacion', '=', $id_estacion)   //meteo
            ->whereBetween('fc_creacion', [$hoy . " 00:00:00", $hoy . " 23:59:59"])
            ->where('tipo_modelo', '=', 3)
            ->where('tipo_dato', '=', 3)
            ->orderBy('serie_modelo', 'desc')
            ->orderBy('id_registro', 'asc')
            ->limit(24)
            ->get();

        $data_num_manana = DB::table('registros')
            ->select(DB::raw("*,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
                DATE_FORMAT(fc_creacion,'%H') as hr_creacion,DATE_FORMAT(fc_creacion,'%H') as hr"))
            ->where('id_estacion', '=', $id_estacion)   //meteo
            ->whereBetween('fc_creacion', [$manana . " 00:00:00", $manana . " 23:59:59"])
            ->where('tipo_modelo', '=', 3)
            ->where('tipo_dato', '=', 3)
            ->orderBy('serie_modelo', 'desc')
            ->orderBy('id_registro', 'asc')
            ->limit(24)
            ->get();

        $data_num_pasado = DB::table('registros')
            ->select(DB::raw("*,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
                DATE_FORMAT(fc_creacion,'%H') as hr_creacion,DATE_FORMAT(fc_creacion,'%H') as hr"))
            ->where('id_estacion', '=', $id_estacion)   //meteo
            ->whereBetween('fc_creacion', [$pasado . " 00:00:00", $pasado . " 23:59:59"])
            ->where('tipo_modelo', '=', 3)
            ->where('tipo_dato', '=', 3)
            ->orderBy('serie_modelo', 'desc')
            ->orderBy('id_registro', 'asc')
            ->limit(24)
            ->get();

        $data =  '{"' . $ayer . '":{';
        $range = '{"' . $ayer . '":{';


        if ($data_num_ayer->count() != 0) {
            foreach ($data_num_ayer as $key => $mar) {
                if ($mar->hr_creacion == 23) {
                    $data = $data . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '"';
                    $range = $range . '"time_' . $mar->hr_creacion . '":"' . $mar->range . '"';
                } else {
                    $data = $data . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '",';
                    $range = $range . '"time_' . $mar->hr_creacion . '":"' . $mar->range . '",';
                }
            }
        } else {
            $vacio = $this->rtrn_vacio();
            $data = $data . $vacio[0];
            $range = $range . $vacio[1];
        }

        $data = $data . '},"' . $hoy . '":{';
        $range = $range . '},"' . $hoy . '":{';

        if ($data_num_hoy->count() != 0) {
            foreach ($data_num_hoy as $key => $mar) {
                if ($mar->hr_creacion == 23) {
                    $data = $data . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '"';
                    $range = $range . '"time_' . $mar->hr_creacion . '":"' . $mar->range . '"';
                } else {
                    $data = $data . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '",';
                    $range = $range . '"time_' . $mar->hr_creacion . '":"' . $mar->range . '",';
                }
            }
        } else {
            $vacio = $this->rtrn_vacio();
            $data = $data . $vacio[0];
            $range = $range . $vacio[1];
        }
        $data = $data . '},"' . $manana . '":{';
        $range = $range . '},"' . $manana . '":{';

        if ($data_num_manana->count() != 0) {
            foreach ($data_num_manana as $key => $mar) {
                if ($mar->hr_creacion == 23) {
                    $data = $data . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '"';
                    $range = $range . '"time_' . $mar->hr_creacion . '":"' . $mar->range . '"';
                } else {
                    $data = $data . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '",';
                    $range = $range . '"time_' . $mar->hr_creacion . '":"' . $mar->range . '",';
                }
            }
        } else {
            $vacio = $this->rtrn_vacio();
            $data = $data . $vacio[0];
            $range = $range . $vacio[1];
        }
        $data = $data . '},"' . $pasado . '":{';
        $range = $range . '},"' . $pasado . '":{';

        if ($data_num_pasado->count() != 0) {
            foreach ($data_num_pasado as $key => $mar) {
                if ($mar->hr_creacion == 23) {
                    $data = $data . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '"';
                    $range = $range . '"time_' . $mar->hr_creacion . '":"' . $mar->range . '"';
                } else {
                    $data = $data . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '",';
                    $range = $range . '"time_' . $mar->hr_creacion . '":"' . $mar->range . '",';
                }
            }
        } else {
            $vacio = $this->rtrn_vacio();
            $data = $data . $vacio[0];
            $range = $range . $vacio[1];
        }
        $data = $data . '}}';
        $range = $range . '}}';

        $datos[0] = $data;
        $datos[1] = $range;

        return $datos;
    }

    public function get_presion()
    {
        $ayer = date('Y-m-d', strtotime("-1 day"));
        $hoy = date('Y-m-d');
        $manana = date('Y-m-d', strtotime("+1 day"));
        $pasado = date('Y-m-d', strtotime("+2 day"));

        $datime = '"time_00":0,"time_01":0,"time_02":0,"time_03":0,"time_04":0,"time_05":0,"time_06":0,"time_07":0,"time_08":0,"time_09":0,"time_10":0,"time_11":0,"time_12":0,"time_13":0,"time_14":0,"time_15":0,"time_16":0,"time_17":0,"time_18":0,"time_19":0,"time_20":0,"time_21":0,"time_22":0,"time_23":0';
        $darange = '"time_00":"entre 0,00 - 0,00","time_01":"entre 0,00 - 0,00","time_02":"entre 0,00 - 0,00","time_03":"entre 0,00 - 0,00","time_04":"entre 0,00 - 0,00","time_05":"entre 0,00 - 0,00","time_06":"entre 0,00 - 0,00","time_07":"entre 0,00 - 0,00","time_08":"entre 0,00 - 0,00","time_09":"entre 0,00 - 0,00","time_10":"entre 0,00 - 0,00","time_11":"entre 0,00 - 0,00","time_12":"entre 0,00 - 0,00","time_13":"entre 0,00 - 0,00","time_14":"entre 0,00 - 0,00","time_15":"entre 0,00 - 0,00","time_16":"entre 0,00 - 0,00","time_17":"entre 0,00 - 0,00","time_18":"entre 0,00 - 0,00","time_19":"entre 0,00 - 0,00","time_20":"entre 0,00 - 0,00","time_21":"entre 0,00 - 0,00","time_22":"entre 0,00 - 0,00","time_23":"entre 0,00 - 0,00"';


        $data =  '{"' . $ayer . '":{';
        $range = '{"' . $ayer . '":{';

        $data =  $data . $datime . '},"' . $hoy . '":{';
        $range = $range . $darange . '},"' . $hoy . '":{';

        $data = $data . $datime . '},"' . $manana . '":{';
        $range = $range . $darange . '},"' . $manana . '":{';

        $data = $data . $datime . '},"' . $pasado . '":{';
        $range = $range . $darange . '},"' . $pasado . '":{';

        $data = $data . $datime . '}}';
        $range = $range . $darange . '}}';

        $datos[0] = $data;
        $datos[1] = $range;

        return $datos;
    }
    public function rtrn_vacio()
    {

        $datime = '"time_00":0,"time_01":0,"time_02":0,"time_03":0,"time_04":0,"time_05":0,"time_06":0,"time_07":0,"time_08":0,"time_09":0,"time_10":0,"time_11":0,"time_12":0,"time_13":0,"time_14":0,"time_15":0,"time_16":0,"time_17":0,"time_18":0,"time_19":0,"time_20":0,"time_21":0,"time_22":0,"time_23":0';
        $darange = '"time_00":"entre 0,00 - 0,00","time_01":"entre 0,00 - 0,00","time_02":"entre 0,00 - 0,00","time_03":"entre 0,00 - 0,00","time_04":"entre 0,00 - 0,00","time_05":"entre 0,00 - 0,00","time_06":"entre 0,00 - 0,00","time_07":"entre 0,00 - 0,00","time_08":"entre 0,00 - 0,00","time_09":"entre 0,00 - 0,00","time_10":"entre 0,00 - 0,00","time_11":"entre 0,00 - 0,00","time_12":"entre 0,00 - 0,00","time_13":"entre 0,00 - 0,00","time_14":"entre 0,00 - 0,00","time_15":"entre 0,00 - 0,00","time_16":"entre 0,00 - 0,00","time_17":"entre 0,00 - 0,00","time_18":"entre 0,00 - 0,00","time_19":"entre 0,00 - 0,00","time_20":"entre 0,00 - 0,00","time_21":"entre 0,00 - 0,00","time_22":"entre 0,00 - 0,00","time_23":"entre 0,00 - 0,00"';



        $datos[0] = $datime;
        $datos[1] = $darange;

        return $datos;
    }
}
