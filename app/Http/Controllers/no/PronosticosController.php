<?php

namespace App\Http\Controllers;


use App\Http\Controllers\MapacalorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;



class PronosticosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index2(Request $request)
    {
    return view('pronosticos.mapa2');
    }
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'user']);
        $id_user = Session::get('id_user');
        $tipo_user = Session::get('tipo_user');
        $id_proyecto = Session::get('id_proyecto');
        $nombre_proyecto = Session::get('nombre_proyecto');

        $obj=new MapacalorController;

        if ($id_proyecto != null) {

//dd($obj->maps());


          //$array_meteo_data_values_p='';


          $array_qual_data_values_p=$obj->maps_heat();
          $array_meteo_data_values_p=$obj->maps_pluma();

          
 




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

                //define la posicion del mapa
                //cambiar a definido fijo al momento de crear el mapa.
                if ($estacion->count() > 0) {
                    $poslat_map = $estacion[0]->est_latitud;
                    $poslong_map = $estacion[0]->est_longitud;
                } else {
                    $poslat_map = '-33.44476474432827';
                    $poslong_map = '-70.6606760759421';
                }

           /*
            1 Catemu
            2 lo campo
            3 Romeral
            4 Sta. Margarita
            5 Meteorologica
            */


        //-----------------------------------------------------------------------------------------------------


        //-----------------------------------------------------------------------------------------------------


        //-----------------------------------------------------------------------------------------------------
/*
                // NEURONAL
                //-----------------------------------------------------------------------------------------------------
                $data_neu_ayer = DB::table('registros')
                    ->select(DB::raw("*,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
                DATE_FORMAT(fc_creacion,'%H') as hr_creacion,DATE_FORMAT(fc_creacion,'%H') as hr"))
                    ->where('id_estacion', '=', $estacion_id)   //margarita
                    ->whereBetween('fc_creacion', [$ayer . " 00:00:00", $ayer . " 23:59:59"])
                    ->where('tipo_modelo', '=', 1)
                    ->where('tipo_dato', '=', 8)
                    ->orderBy('serie_modelo', 'desc')
                    ->orderBy('id_registro', 'asc')
                    ->limit(24)
                    ->get();

                $data_neu_hoy = DB::table('registros')
                    ->select(DB::raw("*,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
            DATE_FORMAT(fc_creacion,'%H') as hr_creacion,DATE_FORMAT(fc_creacion,'%H') as hr"))
                    ->where('id_estacion', '=', $estacion_id)   //margarita
                    ->whereBetween('fc_creacion', [$hoy . " 00:00:00", $hoy . " 23:59:59"])
                    ->where('tipo_modelo', '=', 1)
                    ->where('tipo_dato', '=', 8)
                    ->orderBy('serie_modelo', 'desc')
                    ->orderBy('id_registro', 'asc')
                    ->limit(24)
                    ->get();
                //dd($margarita_neu_hoy);



                $data_neu_manana = DB::table('registros')
                    ->select(DB::raw("*,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
            DATE_FORMAT(fc_creacion,'%H') as hr_creacion,DATE_FORMAT(fc_creacion,'%H') as hr"))
                    ->where('id_estacion', '=', $estacion_id)   //margarita
                    ->whereBetween('fc_creacion', [$manana . " 00:00:00", $manana . " 23:59:59"])
                    ->where('tipo_modelo', '=', 1)
                    ->where('tipo_dato', '=', 8)
                    ->orderBy('serie_modelo', 'desc')
                    ->orderBy('id_registro', 'asc')
                    ->limit(24)
                    ->get();

                // dd($margarita_neu_manana);


                $data_neu_pasado = DB::table('registros')
                    ->select(DB::raw("*,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
            DATE_FORMAT(fc_creacion,'%H') as hr_creacion,DATE_FORMAT(fc_creacion,'%H') as hr"))
                    ->where('id_estacion', '=', $estacion_id)   //margarita
                    ->whereBetween('fc_creacion', [$pasado . " 00:00:00", $pasado . " 23:59:59"])
                    ->where('tipo_modelo', '=', 1)
                    ->where('tipo_dato', '=', 8)
                    ->orderBy('serie_modelo', 'desc')
                    ->orderBy('id_registro', 'asc')
                    ->limit(24)
                    ->get();



                $data_neu = '{"' . $ayer . '":{';
                $range_neu = '{"' . $ayer . '":{';
                foreach ($data_neu_ayer as $key => $mar) {
                    if ($mar->hr_creacion == 23) {
                        $data_neu = $data_neu . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '"';
                        $range_neu = $range_neu . '"time_' . $mar->hr_creacion . '":"' . $mar->range . '"';
                    } else {
                        $data_neu = $data_neu . '"time_' . $mar->hr_creacion . '":"' . $mar->dato . '",';
                        $range_neu = $range_neu . '"time_' . $mar->hr_creacion . '":"' . $mar->range . '",';
                    }
                }

                $data_neu = $data_neu . '},"' . $hoy . '":{';
                $range_neu = $range_neu . '},"' . $hoy . '":{';

                foreach ($data_neu_hoy as $key => $mar2) {
                    if ($mar2->hr_creacion == 23) {
                        $data_neu = $data_neu . '"time_' . $mar2->hr_creacion . '":"' . $mar2->dato . '"';
                        $range_neu = $range_neu . '"time_' . $mar2->hr_creacion . '":"' . $mar2->range . '"';
                    } else {
                        $data_neu = $data_neu . '"time_' . $mar2->hr_creacion . '":"' . $mar2->dato . '",';
                        $range_neu = $range_neu . '"time_' . $mar2->hr_creacion . '":"' . $mar2->range . '",';
                    }
                }
                // dd($data_neu);

                $data_neu = $data_neu . '},"' . $manana . '":{';
                $range_neu = $range_neu . '},"' . $manana . '":{';

                foreach ($data_neu_manana as $key => $mar3) {
                    if ($mar3->hr_creacion == 23) {
                        $data_neu = $data_neu . '"time_' . $mar3->hr_creacion . '":"' . $mar3->dato . '"';
                        $range_neu = $range_neu . '"time_' . $mar3->hr_creacion . '":"' . $mar3->range . '"';
                    } else {
                        $data_neu = $data_neu . '"time_' . $mar3->hr_creacion . '":"' . $mar3->dato . '",';
                        $range_neu = $range_neu . '"time_' . $mar3->hr_creacion . '":"' . $mar3->range . '",';
                    }
                }

                $data_neu = $data_neu . '},"' . $pasado . '":{';
                $range_neu = $range_neu . '},"' . $pasado . '":{';

                foreach ($data_neu_pasado as $key => $mar4) {
                    if ($mar4->hr_creacion == 23) {
                        $data_neu = $data_neu . '"time_' . $mar4->hr_creacion . '":"' . $mar4->dato . '"';
                        $range_neu = $range_neu . '"time_' . $mar4->hr_creacion . '":"' . $mar4->range . '"';
                    } else {
                        $data_neu = $data_neu . '"time_' . $mar4->hr_creacion . '":"' . $mar4->dato . '",';
                        $range_neu = $range_neu . '"time_' . $mar4->hr_creacion . '":"' . $mar4->range . '",';
                    }
                }

                $data_neu = $data_neu . '}}';
                $range_neu = $range_neu . '}}';

                $array_receptor_qual_neur_model_values_p = $data_neu;
                $array_receptor_qual_neur_model_ranges_p = $range_neu;
                $array_receptor_qual_neur_formatted_dates = '{"' . $ayer . '":"' . $dayer . '\/' . $mes . '\/' . $anho . '","' . $hoy . '":"' . $dhoy . '\/' . $mes . '\/' . $anho . '","' . $manana . '":"' . $dmanana . '\/' . $mes . '\/' . $anho . '","' . $pasado . '":"' . $dpasado . '\/' . $mes . '\/' . $anho . '"}';

                //-----------------------------------------------------------------------------------------------------




                // estadisticos
                //-----------------------------------------------------------------------------------------------------
                $data_stat_ayer = DB::table('registros')
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

                $data_stat_hoy = DB::table('registros')
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

                $data_stat_manana = DB::table('registros')
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


                $data_stat_pasado = DB::table('registros')
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

                //dd($margarita_ayer);
                // $margarita = array_merge($margarita_ayer, $margarita_hoy,$margarita_manana);



                $data_stat = '{"' . $ayer . '":{';
                $range_stat = '{"' . $ayer . '":{';
                foreach ($data_stat_ayer as $key => $mar) {
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

                foreach ($data_stat_ayer as $key => $mar2) {
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

                foreach ($data_stat_manana as $key => $mar3) {
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

                foreach ($data_stat_pasado as $key => $mar4) {
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


                $array_receptor_qual_stat_model_values_p = $data_stat;
                $array_receptor_qual_stat_model_ranges_p = $range_stat;
                $array_receptor_qual_stat_formatted_dates = '{"' . $ayer . '":"' . $dayer . '\/' . $mes . '\/' . $anho . '","' . $hoy . '":"' . $dhoy . '\/' . $mes . '\/' . $anho . '","' . $manana . '":"' . $dmanana . '\/' . $mes . '\/' . $anho . '","' . $pasado . '":"' . $dpasado . '\/' . $mes . '\/' . $anho . '"}';
                $array_receptor_meteo_variable_formatted_dates    = $array_receptor_qual_stat_formatted_dates;



                //-----------------------------------------------------------------------------------------------------


                // NUMERICO
                //-----------------------------------------------------------------------------------------------------
                $data_num_ayer = DB::table('registros')
                    ->select(DB::raw("*,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
            DATE_FORMAT(fc_creacion,'%H') as hr_creacion,DATE_FORMAT(fc_creacion,'%H') as hr"))
                    ->where('id_estacion', '=', $estacion_id)   //margarita
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
                    ->where('id_estacion', '=', $estacion_id)   //margarita
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
                    ->where('id_estacion', '=', $estacion_id)   //margarita
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
                    ->where('id_estacion', '=', $estacion_id)   //margarita
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
                    ->where('id_estacion', '=', $estacion_id)   //margarita
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
                    ->where('id_estacion', '=', $estacion_id)   //margarita
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
                    ->where('id_estacion', '=', $estacion_id)   //margarita
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
                    ->where('id_estacion', '=', $estacion_id)   //margarita
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
                    ->where('id_estacion', '=', $estacion_id)   //margarita
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
                    ->where('id_estacion', '=', $estacion_id)   //margarita
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
                    ->where('id_estacion', '=', $estacion_id)   //margarita
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
                    ->where('id_estacion', '=', $estacion_id)   //margarita
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

                $array_receptor_qual_variable_values_p = $data;
                $array_receptor_qual_variable_ranges_p = $range;
                $array_receptor_meteo_data_values_p_vel = $vel;
                $array_receptor_meteo_data_ranges_p_vel = $range_vel;
                $array_receptor_meteo_data_values_p_dir = $dir;

                //dd($dir);
*/


                // dd($array_receptor_qual_variable_ranges_p);
                $array_receptor_qual_variable_formatted_dates = '{"' . $ayer . '":"' . $dayer . '\/' . $mes . '\/' . $anho . '","' . $hoy . '":"' . $dhoy . '\/' . $mes . '\/' . $anho . '","' . $manana . '":"' . $dmanana . '\/' . $mes . '\/' . $anho . '","' . $pasado . '":"' . $dpasado . '\/' . $mes . '\/' . $anho . '"}';
                $array_receptor_qual_neur_formatted_dates=$array_receptor_qual_variable_formatted_dates;
                $array_receptor_qual_stat_formatted_dates=$array_receptor_qual_variable_formatted_dates;
                $array_receptor_meteo_variable_formatted_dates=$array_receptor_qual_variable_formatted_dates;
                //dd($array_receptor_qual_neur_model_values_p);
                //-----------------------------------------------------------------------------------------------------

                //Grafico modelo numerico **
                // $array_receptor_qual_variable_values_p='{"2022-09-16":{"time_00":"17.2937700000","time_01":"15.4892100000","time_02":"15.9348500000","time_03":"12.3404200000","time_04":"11.9444400000","time_05":"15.3342600000","time_06":"22.6848400000","time_07":"46.5607100000","time_08":"48.5222800000","time_09":"23.0943900000","time_10":"23.9398400000","time_11":"22.2694700000","time_12":"9.7697910000","time_13":"7.9352860000","time_14":"7.9209080000","time_15":"7.9206140000","time_16":"7.9200000000","time_17":"7.9200000000","time_18":"7.9200000000","time_19":"13.2545500000","time_20":"12.1339600000","time_21":"409.0884000000","time_22":"138.4181000000","time_23":"70.5138900000"},"2022-09-17":{"time_00":"8.3800850000","time_01":"8.0596540000","time_02":"7.9763380000","time_03":"7.9262040000","time_04":"7.9369640000","time_05":"7.9323310000","time_06":"9.6350720000","time_07":"18.9518800000","time_08":"12.3630100000","time_09":"11.4815300000","time_10":"20.9422200000","time_11":"10.0551700000","time_12":"7.9200000000","time_13":"7.9200000000","time_14":"7.9200000000","time_15":"7.9200000000","time_16":"7.9200000000","time_17":"7.9200000000","time_18":"7.9200000000","time_19":"7.9200000000","time_20":"7.9200000000","time_21":"7.9200000000","time_22":"7.9200000000","time_23":"7.9200000000"},"2022-09-18":{"time_00":"7.9584920000","time_01":"13.8100100000","time_02":"16.8262600000","time_03":"8.4827470000","time_04":"7.9200000000","time_05":"7.9200000000","time_06":"7.9827420000","time_07":"36.8147400000","time_08":"18.5839200000","time_09":"51.3635400000","time_10":"38.2258800000","time_11":"10.8710500000","time_12":"7.9508180000","time_13":"7.9200000000","time_14":"7.9200000000","time_15":"7.9200000000","time_16":"7.9200000000","time_17":"7.9200000000","time_18":"7.9200000000","time_19":"7.9200000000","time_20":"10.7492400000","time_21":"187.3412000000","time_22":"197.0595000000","time_23":"69.9920800000"},"2022-09-19":{"time_00":"21.8738400000","time_01":"32.9057800000","time_02":"13.1141600000","time_03":"33.5815800000","time_04":"23.7580400000","time_05":"15.1055500000","time_06":"11.7125800000","time_07":"7.9200000000","time_08":"8.9178470000","time_09":"13.7662400000","time_10":"23.4995100000","time_11":"9.2954390000","time_12":"7.9480780000","time_13":"7.9200000000","time_14":"7.9200000000","time_15":"7.9200000000","time_16":"7.9200000000","time_17":"7.9200000000","time_18":"7.9200000000","time_19":"7.9200000000","time_20":"7.9200000000","time_21":"7.9200000000","time_22":"8.0595940000","time_23":"11.1401100000"}}';
                // $array_receptor_qual_variable_ranges_p='{"2022-09-16":{"time_00":"entre 0,00 - 100,00","time_01":"entre 0,00 - 100,00","time_02":"entre 0,00 - 100,00","time_03":"entre 0,00 - 100,00","time_04":"entre 0,00 - 100,00","time_05":"entre 0,00 - 100,00","time_06":"entre 0,00 - 100,00","time_07":"entre 0,00 - 100,00","time_08":"entre 0,00 - 100,00","time_09":"entre 0,00 - 100,00","time_10":"entre 0,00 - 100,00","time_11":"entre 0,00 - 100,00","time_12":"entre 0,00 - 100,00","time_13":"entre 0,00 - 100,00","time_14":"entre 0,00 - 100,00","time_15":"entre 0,00 - 100,00","time_16":"entre 0,00 - 100,00","time_17":"entre 0,00 - 100,00","time_18":"entre 0,00 - 100,00","time_19":"entre 0,00 - 100,00","time_20":"entre 0,00 - 100,00","time_21":"entre 400,00 - 500,00","time_22":"entre 100,00 - 200,00","time_23":"entre 0,00 - 100,00"},"2022-09-17":{"time_00":"entre 0,00 - 100,00","time_01":"entre 0,00 - 100,00","time_02":"entre 0,00 - 100,00","time_03":"entre 0,00 - 100,00","time_04":"entre 0,00 - 100,00","time_05":"entre 0,00 - 100,00","time_06":"entre 0,00 - 100,00","time_07":"entre 0,00 - 100,00","time_08":"entre 0,00 - 100,00","time_09":"entre 0,00 - 100,00","time_10":"entre 0,00 - 100,00","time_11":"entre 0,00 - 100,00","time_12":"entre 0,00 - 100,00","time_13":"entre 0,00 - 100,00","time_14":"entre 0,00 - 100,00","time_15":"entre 0,00 - 100,00","time_16":"entre 0,00 - 100,00","time_17":"entre 0,00 - 100,00","time_18":"entre 0,00 - 100,00","time_19":"entre 0,00 - 100,00","time_20":"entre 0,00 - 100,00","time_21":"entre 0,00 - 100,00","time_22":"entre 0,00 - 100,00","time_23":"entre 0,00 - 100,00"},"2022-09-18":{"time_00":"entre 0,00 - 100,00","time_01":"entre 0,00 - 100,00","time_02":"entre 0,00 - 100,00","time_03":"entre 0,00 - 100,00","time_04":"entre 0,00 - 100,00","time_05":"entre 0,00 - 100,00","time_06":"entre 0,00 - 100,00","time_07":"entre 0,00 - 100,00","time_08":"entre 0,00 - 100,00","time_09":"entre 0,00 - 100,00","time_10":"entre 0,00 - 100,00","time_11":"entre 0,00 - 100,00","time_12":"entre 0,00 - 100,00","time_13":"entre 0,00 - 100,00","time_14":"entre 0,00 - 100,00","time_15":"entre 0,00 - 100,00","time_16":"entre 0,00 - 100,00","time_17":"entre 0,00 - 100,00","time_18":"entre 0,00 - 100,00","time_19":"entre 0,00 - 100,00","time_20":"entre 0,00 - 100,00","time_21":"entre 100,00 - 200,00","time_22":"entre 100,00 - 200,00","time_23":"entre 0,00 - 100,00"},"2022-09-19":{"time_00":"entre 0,00 - 100,00","time_01":"entre 0,00 - 100,00","time_02":"entre 0,00 - 100,00","time_03":"entre 0,00 - 100,00","time_04":"entre 0,00 - 100,00","time_05":"entre 0,00 - 100,00","time_06":"entre 0,00 - 100,00","time_07":"entre 0,00 - 100,00","time_08":"entre 0,00 - 100,00","time_09":"entre 0,00 - 100,00","time_10":"entre 0,00 - 100,00","time_11":"entre 0,00 - 100,00","time_12":"entre 0,00 - 100,00","time_13":"entre 0,00 - 100,00","time_14":"entre 0,00 - 100,00","time_15":"entre 0,00 - 100,00","time_16":"entre 0,00 - 100,00","time_17":"entre 0,00 - 100,00","time_18":"entre 0,00 - 100,00","time_19":"entre 0,00 - 100,00","time_20":"entre 0,00 - 100,00","time_21":"entre 0,00 - 100,00","time_22":"entre 0,00 - 100,00","time_23":"entre 0,00 - 100,00"}}';      
                //$array_receptor_qual_variable_formatted_dates='{"2022-09-16":"16\/09\/2022","2022-09-17":"17\/09\/2022","2022-09-18":"18\/09\/2022","2022-09-19":"19\/09\/2022"}';



                //dd($array_receptor_meteo_data_values_p_dir);

/*
                $table_neu = $data_neu_hoy->concat($data_neu_manana);
                $table_neu = $table_neu->concat($data_neu_pasado);

                $table_stat = $data_stat_hoy->concat($data_stat_manana);
                $table_stat = $table_stat->concat($data_stat_pasado);

                $table_num = $data_num_hoy->concat($data_num_manana);
                $table_num = $table_num->concat($data_num_pasado);
*/

                $table_neu='{}';
                $table_stat='{}';
                $table_num='{}';
                $array_receptor_qual_neur_model_values_p='{}';
                $array_receptor_qual_neur_model_ranges_p='{}';
                $array_receptor_qual_stat_model_values_p='{}';
                $array_receptor_qual_stat_model_ranges_p='{}';
                $array_receptor_meteo_data_values_p_vel='{}';
                $array_receptor_meteo_data_values_p_dir='{}';
                $array_receptor_meteo_data_ranges_p_vel='{}';
                $array_receptor_qual_variable_values_p='{}';
                $array_receptor_qual_variable_ranges_p='{}';





/*



*/
                if($id_proyecto ==1){
                return view('pronosticos.index2', compact(
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
                    'array_meteo_data_values_p',
                    'array_qual_data_values_p',

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
            }
            else{
                return redirect('/neuronales');
            }



            } else {

                $mensaje = "No existen estaciones Asociadas al proyecto.";
                return view('error', compact('mensaje'));
            }
        } else {
            return redirect('/proyectos');
        }
    }
}
