<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PronumericosController extends Controller
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

            //21-09
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
                $estacion_id = $estacion[0]->id_estacion;


                if ($estacion->count() > 0) {
                    $poslat_map = $estacion[0]->est_latitud;
                    $poslong_map = $estacion[0]->est_longitud;
                } else {
                    $poslat_map = '-33.44476474432827';
                    $poslong_map = '-70.6606760759421';
                }


                // dd($first_datetime);

                /*
            1 Catemu
            2 lo campo
            3 Romeral
            4 Sta. Margarita
            5 Meteorologica
*/


                // NUMERICO
                //-----------------------------------------------------------------------------------------------------
                $data_num_ayer = DB::table('registros')
                    ->select(DB::raw("*,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
            DATE_FORMAT(fc_creacion,'%H') as hr_creacion,DATE_FORMAT(fc_creacion,'%H') as hr"))
                    ->where('id_estacion', '=', 4)   //margarita
                    ->whereBetween('fc_creacion', [$ayer . " 00:00:00", $ayer . " 23:59:59"])
                    ->where('tipo_modelo', '=', 3)
                    ->where('tipo_dato', '=', 8)
                    ->orderBy('serie_modelo', 'desc')
                    ->orderBy('id_registro', 'asc')
                    ->limit(24)
                    ->get();

                $data_num_hoy = DB::table('registros')
                    ->select(DB::raw("*,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
            DATE_FORMAT(fc_creacion,'%H') as hr_creacion,DATE_FORMAT(fc_creacion,'%H') as hr"))
                    ->where('id_estacion', '=', 4)   //margarita
                    ->whereBetween('fc_creacion', [$hoy . " 00:00:00", $hoy . " 23:59:59"])
                    ->where('tipo_modelo', '=', 3)
                    ->where('tipo_dato', '=', 8)
                    ->orderBy('serie_modelo', 'desc')
                    ->orderBy('id_registro', 'asc')
                    ->limit(24)
                    ->get();

                $data_num_manana = DB::table('registros')
                    ->select(DB::raw("*,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
            DATE_FORMAT(fc_creacion,'%H') as hr_creacion,DATE_FORMAT(fc_creacion,'%H') as hr"))
                    ->where('id_estacion', '=', 4)   //margarita
                    ->whereBetween('fc_creacion', [$manana . " 00:00:00", $manana . " 23:59:59"])
                    ->where('tipo_modelo', '=', 3)
                    ->where('tipo_dato', '=', 8)
                    ->orderBy('serie_modelo', 'desc')
                    ->orderBy('id_registro', 'asc')
                    ->limit(24)
                    ->get();

                $data_num_pasado = DB::table('registros')
                    ->select(DB::raw("*,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
            DATE_FORMAT(fc_creacion,'%H') as hr_creacion,DATE_FORMAT(fc_creacion,'%H') as hr"))
                    ->where('id_estacion', '=', 4)   //margarita
                    ->whereBetween('fc_creacion', [$pasado . " 00:00:00", $pasado . " 23:59:59"])
                    ->where('tipo_modelo', '=', 3)
                    ->where('tipo_dato', '=', 8)
                    ->orderBy('serie_modelo', 'desc')
                    ->orderBy('id_registro', 'asc')
                    ->limit(24)
                    ->get();



                $data =  '{"' . $ayer . '":{';
                $range = '{"' . $ayer . '":{';

                foreach ($data_num_ayer as $key => $mar) {
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
                foreach ($data_num_hoy as $key => $mar) {
                    if ($mar->hr_creacion == 23) {
                        $data = $data . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '"';
                        $range = $range . '"time_' . $mar->hr_creacion . '":"' . $mar->range . '"';
                    } else {
                        $data = $data . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '",';
                        $range = $range . '"time_' . $mar->hr_creacion . '":"' . $mar->range . '",';
                    }
                }
                $data = $data . '},"' . $manana . '":{';
                $range = $range . '},"' . $manana . '":{';

                foreach ($data_num_manana as $key => $mar) {
                    if ($mar->hr_creacion == 23) {
                        $data = $data . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '"';
                        $range = $range . '"time_' . $mar->hr_creacion . '":"' . $mar->range . '"';
                    } else {
                        $data = $data . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '",';
                        $range = $range . '"time_' . $mar->hr_creacion . '":"' . $mar->range . '",';
                    }
                }
                $data = $data . '},"' . $pasado . '":{';
                $range = $range . '},"' . $pasado . '":{';
                foreach ($data_num_pasado as $key => $mar) {
                    if ($mar->hr_creacion == 23) {
                        $data = $data . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '"';
                        $range = $range . '"time_' . $mar->hr_creacion . '":"' . $mar->range . '"';
                    } else {
                        $data = $data . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '",';
                        $range = $range . '"time_' . $mar->hr_creacion . '":"' . $mar->range . '",';
                    }
                }
                $data = $data . '}}';
                $range = $range . '}}';
                //---------------------------------------------------------
                //velocidad

                $data_vel_ayer = DB::table('registros')
                    ->select(DB::raw("*,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
            DATE_FORMAT(fc_creacion,'%H') as hr_creacion,DATE_FORMAT(fc_creacion,'%H') as hr"))
                    ->where('id_estacion', '=', 4)   //margarita
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
                    ->where('id_estacion', '=', 4)   //margarita
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
                    ->where('id_estacion', '=', 4)   //margarita
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
                    ->where('id_estacion', '=', 4)   //margarita
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

                //dd( $vel);





                //-------------------------------------------------------------------------
                //direccion

                $data_dir_ayer = DB::table('registros')
                    ->select(DB::raw("TRUNCATE(dato,2) as dato,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
            DATE_FORMAT(fc_creacion,'%H') as hr_creacion,DATE_FORMAT(fc_creacion,'%H') as hr"))
                    ->where('id_estacion', '=', 4)   //margarita
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
                    ->where('id_estacion', '=', 4)   //margarita
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
                    ->where('id_estacion', '=', 4)   //margarita
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
                    ->where('id_estacion', '=', 4)   //margarita
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

                $array_receptor_qual_neur_model_values_p= '{}';
                $array_receptor_qual_neur_model_ranges_p= '{}';
                $array_receptor_qual_neur_formatted_dates= '{}';
                $array_receptor_qual_neur_formatted_dates= '{}';

                $array_receptor_qual_stat_model_values_p= '{}';
                $array_receptor_qual_stat_model_ranges_p= '{}';
                $array_receptor_qual_stat_formatted_dates= '{}';
                $array_receptor_meteo_variable_formatted_dates= '{}';

                $array_receptor_qual_variable_values_p = $data;
                $array_receptor_qual_variable_ranges_p = $range;
                $array_receptor_meteo_data_values_p_vel = $vel;
                $array_receptor_meteo_data_ranges_p_vel = $range_vel;
                $array_receptor_meteo_data_values_p_dir = $dir;

                $table_neu = '{}';
                $table_stat = '{}';
                $table_num = '{}';

                $array_receptor_qual_variable_formatted_dates = '{"' . $ayer . '":"' . $dayer . '\/' . $mes . '\/' . $anho . '","' . $hoy . '":"' . $dhoy . '\/' . $mes . '\/' . $anho . '","' . $manana . '":"' . $dmanana . '\/' . $mes . '\/' . $anho . '","' . $pasado . '":"' . $dpasado . '\/' . $mes . '\/' . $anho . '"}';

               


                return view('pronosticos.numericos', compact(
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