<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProestadisticosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'user']);
        $id_user = Session::get('id_user');
        $tipo_user = Session::get('tipo_user');
        $id_proyecto = Session::get('id_proyecto');
        $nombre_proyecto = Session::get('nombre_proyecto');

        if ($id_proyecto != null) {

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


            $timeInterval = $ayer . 'T00:00:00Z/' . $manana . 'T23:00:00Z';
            $first_datetime = $ayer . ' 00:00';

            
            $estaciones_list = DB::table('estaciones')
                ->select(DB::raw("id_estacion,est_nombre,est_latitud,est_longitud,est_tipo"))
                ->where('est_id_proyecto', '=', $id_proyecto)
                ->where('est_visible', '=', '1')
                ->where('est_tipo', '=', '1')
                ->where('est_estado', '=', '1')
                ->get();
             

            if ($estaciones_list->count() != 0) {

                $estaciones_map = "";
                foreach ($estaciones_list as $key => $est) {

                    //estacion
                    if ($est->est_tipo == 1)
                        $estaciones_map = $estaciones_map . 'L.marker([' . $est->est_latitud . ',' . $est->est_longitud . '], {icon: stationIcon}).addTo(map).bindPopup("' . $est->est_nombre . '");';
                    else
                        $estaciones_map = $estaciones_map . 'L.marker([' . $est->est_latitud . ',' . $est->est_longitud . '], {icon: receptorIcon}).addTo(map).bindPopup("' . $est->est_nombre . '");';
                }


                $list_estaciones_estacion = DB::table('estaciones')     //para mostrar en el select.
                    ->select(DB::raw("id_estacion,est_nombre"))
                    ->where('est_id_proyecto', '=', $id_proyecto)  //cambiar
                    ->where('est_visible', '=', '1')
                    ->where('est_tipo', '=', 1) //estacion
                    ->where('est_estado', '=', '1')
                    ->orderBy('est_nombre', 'asc')
                    ->get();

                $estacion = DB::table('estaciones')

                    ->where('est_id_proyecto', '=', $id_proyecto)
                    ->where('est_visible', '=', '1')
                    ->where('est_tipo', '=', 1)               //tipo estacion
                    ->where('est_estado', '=', 1)
                    ->orderBy('id_estacion', 'desc')
                    ->limit(1)
                    ->get();


                //se debe cambiar para automatizar proyectos.
                if($id_proyecto==1){
                    $estacion_id=4;
                    $poslat_map = '-33.44476474432827';
                    $poslong_map = '-70.6606760759421';
                }
                else {
                    $estacion_id=15;
                    $poslat_map = '-33.44476474432827';
                    $poslong_map = '-70.6606760759421';
                }
                /*

                if ($estacion->count() > 0) {
                    $poslat_map = $estacion[0]->est_latitud;
                    $poslong_map = $estacion[0]->est_longitud;
                } else {
                    $poslat_map = '-33.44476474432827';
                    $poslong_map = '-70.6606760759421';
                }*/


                // dd($first_datetime);

                /*
            1 Catemu
            2 lo campo
            3 Romeral
            4 Sta. Margarita
            5 Meteorologica


         */
                



                // estadisticos
                //-----------------------------------------------------------------------------------------------------
                $estacion_stat_ayer = DB::table('registros')
                    ->select(DB::raw("*,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
            DATE_FORMAT(fc_creacion,'%H') as hr_creacion,DATE_FORMAT(fc_creacion,'%H') as hr"))
                    ->where('id_estacion', '=', $estacion_id)   //margarita
                    ->whereBetween('fc_creacion', [$ayer . " 00:00:00", $ayer . " 23:59:59"])
                    ->where('tipo_modelo', '=', 2)
                    ->where('tipo_dato', '=', 8)
                    ->orderBy('serie_modelo', 'desc')
                    ->orderBy('id_registro', 'asc')
                    ->limit(24)
                    ->get();

                $estacion_stat_hoy = DB::table('registros')
                    ->select(DB::raw("*,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
            DATE_FORMAT(fc_creacion,'%H') as hr_creacion,DATE_FORMAT(fc_creacion,'%H') as hr"))
                    ->where('id_estacion', '=', $estacion_id)   //margarita
                    ->whereBetween('fc_creacion', [$hoy . " 00:00:00", $hoy . " 23:59:59"])
                    ->where('tipo_modelo', '=', 2)
                    ->where('tipo_dato', '=', 8)
                    ->orderBy('serie_modelo', 'desc')
                    ->orderBy('id_registro', 'asc')
                    ->limit(24)
                    ->get();

                $estacion_stat_manana = DB::table('registros')
                    ->select(DB::raw("*,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
            DATE_FORMAT(fc_creacion,'%H') as hr_creacion,DATE_FORMAT(fc_creacion,'%H') as hr"))
                    ->where('id_estacion', '=', $estacion_id)   //margarita
                    ->whereBetween('fc_creacion', [$manana . " 00:00:00", $manana . " 23:59:59"])
                    ->where('tipo_modelo', '=', 2)
                    ->where('tipo_dato', '=', 8)
                    ->orderBy('serie_modelo', 'desc')
                    ->orderBy('id_registro', 'asc')
                    ->limit(24)
                    ->get();


                $estacion_stat_pasado = DB::table('registros')
                    ->select(DB::raw("*,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
            DATE_FORMAT(fc_creacion,'%H') as hr_creacion,DATE_FORMAT(fc_creacion,'%H') as hr"))
                    ->where('id_estacion', '=', $estacion_id)   //margarita
                    ->whereBetween('fc_creacion', [$pasado . " 00:00:00", $pasado . " 23:59:59"])
                    ->where('tipo_modelo', '=', 2)
                    ->where('tipo_dato', '=', 8)
                    ->orderBy('serie_modelo', 'desc')
                    ->orderBy('id_registro', 'asc')
                    ->limit(24)
                    ->get();


                
                if ($id_proyecto==2){

                    $data_stat = '{"' . $ayer . '":{';
                $range_stat = '{"' . $ayer . '":{';
                foreach ($estacion_stat_ayer as $key => $mar) {
                    if ($mar->hr_creacion == 23) {
                        $data_stat = $data_stat . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '"';
                        $range_stat = $range_stat . '"time_' . $mar->hr_creacion . '":"' . $mar->range . ' ['.round($mar->dato).']"';
                    } else {
                        $data_stat = $data_stat . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '",';
                        $range_stat = $range_stat . '"time_' . $mar->hr_creacion . '":"' . $mar->range . ' ['.round($mar->dato).']",';
                    }
                }
                $data_stat = $data_stat . '},"' . $hoy . '":{';
                $range_stat = $range_stat . '},"' . $hoy . '":{';

                foreach ($estacion_stat_hoy as $key => $mar2) {
                    if ($mar2->hr_creacion == 23) {
                        $data_stat = $data_stat . '"time_' . $mar2->hr_creacion . '":"' . $mar2->dato . '"';
                        $range_stat = $range_stat . '"time_' . $mar2->hr_creacion . '":"' . $mar2->range . ' ['.round($mar2->dato).']"';
                    } else {
                        $data_stat = $data_stat . '"time_' . $mar2->hr_creacion . '":"' . $mar2->dato . '",';
                        $range_stat = $range_stat . '"time_' . $mar2->hr_creacion . '":"' . $mar2->range . ' ['.round($mar2->dato).']",';
                    }
                }

                $data_stat = $data_stat . '},"' . $manana . '":{';
                $range_stat = $range_stat . '},"' . $manana . '":{';

                foreach ($estacion_stat_manana as $key => $mar3) {
                    if ($mar3->hr_creacion == 23) {
                        $data_stat = $data_stat . '"time_' . $mar3->hr_creacion . '":"' . $mar3->dato . '"';
                        $range_stat = $range_stat . '"time_' . $mar3->hr_creacion . '":"' . $mar3->range . ' ['.round($mar3->dato).']"';
                    } else {
                        $data_stat = $data_stat . '"time_' . $mar3->hr_creacion . '":"' . $mar3->dato . '",';
                        $range_stat = $range_stat . '"time_' . $mar3->hr_creacion . '":"' . $mar3->range . ' ['.round($mar3->dato).']",';
                    }
                }

                $data_stat = $data_stat . '},"' . $pasado . '":{';
                $range_stat = $range_stat . '},"' . $pasado . '":{';

                foreach ($estacion_stat_pasado as $key => $mar4) {
                    if ($mar4->hr_creacion == 23) {
                        $data_stat = $data_stat . '"time_' . $mar4->hr_creacion . '":"' . $mar4->dato . '"';
                        $range_stat = $range_stat . '"time_' . $mar4->hr_creacion . '":"' . $mar4->range . ' ['.round($mar4->dato).']"';
                    } else {
                        $data_stat = $data_stat . '"time_' . $mar4->hr_creacion . '":"' . $mar4->dato . '",';
                        $range_stat = $range_stat . '"time_' . $mar4->hr_creacion . '":"' . $mar4->range . ' ['.round($mar4->dato).']",';
                    }
                }

                $data_stat = $data_stat . '}}';
                $range_stat = $range_stat . '}}';

                }
                //--------------------------------------------------------------------------------------------------------
                else{

                    $data_stat = '{"' . $ayer . '":{';
                        $range_stat = '{"' . $ayer . '":{';
                        foreach ($estacion_stat_ayer as $key => $mar) {
                            if ($mar->hr_creacion == 23) {
                                $data_stat = $data_stat . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '"';
                                $range_stat = $range_stat . '"time_' . $mar->hr_creacion . '":"' . $mar->range . '"';
                            } else {
                                $data_stat = $data_stat . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '",';
                                $range_stat = $range_stat . '"time_' . $mar->hr_creacion . '":"' . $mar->range . '",';
                            }
                        }
                        $data_stat = $data_stat . '},"' . $hoy . '":{';
                        $range_stat = $range_stat . '},"' . $hoy . '":{';
        
                        foreach ($estacion_stat_hoy as $key => $mar2) {
                            if ($mar2->hr_creacion == 23) {
                                $data_stat = $data_stat . '"time_' . $mar2->hr_creacion . '":"' . $mar2->dato . '"';
                                $range_stat = $range_stat . '"time_' . $mar2->hr_creacion . '":"' . $mar2->range . '"';
                            } else {
                                $data_stat = $data_stat . '"time_' . $mar2->hr_creacion . '":"' . $mar2->dato . '",';
                                $range_stat = $range_stat . '"time_' . $mar2->hr_creacion . '":"' . $mar2->range . '",';
                            }
                        }
        
                        $data_stat = $data_stat . '},"' . $manana . '":{';
                        $range_stat = $range_stat . '},"' . $manana . '":{';
        
                        foreach ($estacion_stat_manana as $key => $mar3) {
                            if ($mar3->hr_creacion == 23) {
                                $data_stat = $data_stat . '"time_' . $mar3->hr_creacion . '":"' . $mar3->dato . '"';
                                $range_stat = $range_stat . '"time_' . $mar3->hr_creacion . '":"' . $mar3->range . '"';
                            } else {
                                $data_stat = $data_stat . '"time_' . $mar3->hr_creacion . '":"' . $mar3->dato . '",';
                                $range_stat = $range_stat . '"time_' . $mar3->hr_creacion . '":"' . $mar3->range . '",';
                            }
                        }
        
                        $data_stat = $data_stat . '},"' . $pasado . '":{';
                        $range_stat = $range_stat . '},"' . $pasado . '":{';
        
                        foreach ($estacion_stat_pasado as $key => $mar4) {
                            if ($mar4->hr_creacion == 23) {
                                $data_stat = $data_stat . '"time_' . $mar4->hr_creacion . '":"' . $mar4->dato . '"';
                                $range_stat = $range_stat . '"time_' . $mar4->hr_creacion . '":"' . $mar4->range . '"';
                            } else {
                                $data_stat = $data_stat . '"time_' . $mar4->hr_creacion . '":"' . $mar4->dato . '",';
                                $range_stat = $range_stat . '"time_' . $mar4->hr_creacion . '":"' . $mar4->range . '",';
                            }
                        }
        
                        $data_stat = $data_stat . '}}';
                        $range_stat = $range_stat . '}}';

                }

                //--------------------------------------------------------------------------------------------------------
                

                $array_receptor_qual_stat_model_values_p = $data_stat;
                $array_receptor_qual_stat_model_ranges_p = $range_stat;
                $array_receptor_qual_stat_formatted_dates = '{"' . $ayer . '":"' . $dayer . '\/' . $mes . '\/' . $anho . '","' . $hoy . '":"' . $dhoy . '\/' . $mes . '\/' . $anho . '","' . $manana . '":"' . $dmanana . '\/' . $mes . '\/' . $anho . '","' . $pasado . '":"' . $dpasado . '\/' . $mes . '\/' . $anho . '"}';
                $array_receptor_meteo_variable_formatted_dates    = $array_receptor_qual_stat_formatted_dates;



                //-----------------------------------------------------------------------------------------------------


                $array_receptor_qual_neur_model_values_p= '{}';
                $array_receptor_qual_neur_model_ranges_p= '{}';
                $array_receptor_qual_neur_formatted_dates= '{}';
                $array_receptor_qual_neur_formatted_dates= '{}';

                $array_receptor_qual_variable_values_p = '{}';
                $array_receptor_qual_variable_ranges_p = '{}';
                $array_receptor_meteo_data_values_p_vel = '{}';
                $array_receptor_meteo_data_ranges_p_vel = '{}';
                $array_receptor_meteo_data_values_p_dir = '{}';
                $table_neu = '{}';
                $table_stat = '{}';
                $table_num = '{}';

                $array_receptor_qual_variable_formatted_dates = '{"' . $ayer . '":"' . $dayer . '\/' . $mes . '\/' . $anho . '","' . $hoy . '":"' . $dhoy . '\/' . $mes . '\/' . $anho . '","' . $manana . '":"' . $dmanana . '\/' . $mes . '\/' . $anho . '","' . $pasado . '":"' . $dpasado . '\/' . $mes . '\/' . $anho . '"}';

                


                return view('pronosticos.estadisticos', compact(
                    'ayer',
                    'manana',
                    'first_datetime',
                    'timeInterval',
                    'estaciones_map',
                    'estaciones_list',
                    'list_estaciones_estacion',
                    'table_neu',
                    'table_stat',
                    'table_num',
                    'poslat_map',
                    'poslong_map',

                    'array_receptor_qual_neur_model_values_p',
                    'array_receptor_qual_neur_model_ranges_p',
                    'array_receptor_qual_neur_formatted_dates',

                    'array_receptor_qual_stat_model_values_p',
                    'array_receptor_qual_stat_model_ranges_p',
                    'array_receptor_qual_stat_formatted_dates',

                    'array_receptor_meteo_data_values_p_vel',
                    'array_receptor_meteo_data_values_p_dir',
                    'array_receptor_meteo_data_ranges_p_vel',

                    'array_receptor_qual_variable_values_p',
                    'array_receptor_qual_variable_ranges_p',
                    'array_receptor_qual_variable_formatted_dates',

                    'array_receptor_meteo_variable_formatted_dates'
                ));
            } else {

                $mensaje = "No existen estaciones Asociadas al proyecto.";
                return view('error', compact('mensaje'));
            }
        } else {
            return redirect('/proyectos');
        }
    }
}
