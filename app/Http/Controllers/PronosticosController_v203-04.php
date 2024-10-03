<?php

namespace App\Http\Controllers;


use App\Http\Controllers\MapacalorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Exception;




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


       // $array_meteo_data_values_p=$obj->maps_pluma();
       //$array_qual_data_values_p=$obj->maps_heat();
        //$array_meteo_data_values_p='{}';


          
          $array_qual_data_values_p='{}';
          $array_meteo_data_values_p='{}';


          try{
          $file1 = fopen('../scripts/arch/datos_pluma_vel', 'r');       
          $d1 = stream_get_line($file1, filesize('../scripts/arch/datos_pluma_vel'));
          $array_meteo_data_values_p=$d1;
          } catch (Exception $e) {
                $array_meteo_data_values_p='{}';
            }
        
        try{
            $file2 = fopen('../scripts/arch/datos_heat_vel', 'r');       
            $d2 = stream_get_line($file2, filesize('../scripts/arch/datos_heat_vel'));
            $array_qual_data_values_p=$d2;
                } catch (Exception $e) {
                    $array_meteo_data_values_p='{}';
                  }
          


          
          


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




                $array_receptor_qual_variable_formatted_dates = '{"' . $ayer . '":"' . $dayer . '\/' . $mes . '\/' . $anho . '","' . $hoy . '":"' . $dhoy . '\/' . $mes . '\/' . $anho . '","' . $manana . '":"' . $dmanana . '\/' . $mes . '\/' . $anho . '","' . $pasado . '":"' . $dpasado . '\/' . $mes . '\/' . $anho . '"}';
                $array_receptor_qual_neur_formatted_dates=$array_receptor_qual_variable_formatted_dates;
                $array_receptor_qual_stat_formatted_dates=$array_receptor_qual_variable_formatted_dates;
                $array_receptor_meteo_variable_formatted_dates=$array_receptor_qual_variable_formatted_dates;
                //dd($array_receptor_qual_neur_model_values_p);
                //-----------------------------------------------------------------------------------------------------



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
