<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Csinopticos;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;




class ResumenPronosticosController extends Controller
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
     

        if ($id_proyecto != null) {
          
            $ayer = date('Y-m-d', strtotime("-1 day"));
            $hoy = date('Y-m-d');
            $manana = date('Y-m-d', strtotime("+1 day"));

            $sinopticos = DB::table('csinopticos')
                ->select(DB::raw("sin_cma1, sin_cma2,sin_cma3"))
                ->where('sin_id_proyecto', '=', $id_proyecto)
                ->where('sin_fecha', '=', $hoy)
                ->orderBy('id_sin', 'asc')
                ->Limit(1)
                ->get();

                if($sinopticos->count()==0){

                    $sinopticos2 = DB::table('csinopticos')
                    ->select(DB::raw("sin_cma4 as sin_cma1, sin_cma5 as sin_cma2,sin_cma6 as sin_cma3"))
                    ->where('sin_id_proyecto', '=', $id_proyecto)
                    ->where('sin_fecha', '=', $ayer)
                    ->orderBy('id_sin', 'asc')
                    ->Limit(1)
                    ->get();
                   

                    if($sinopticos2->count()==0){
                        $das= collect([
                            (object) [
                                'sin_cma1' => '-',
                                'sin_cma2' => '-',
                                'sin_cma3' => '-'
                            ],
                          
                        ]);
                        $sinopticos= $das;

                    }
                    else{

                        
                        $sinopticos= $sinopticos2;

                    }

                    

                }

              

            /*
        1 Catemu
        2 lo campo
        3 Romeral
        4 Sta. Margarita
        5 Meteorologica


        */
            $estacion_1 = 4;
            $estacion_2 = 2;

            $hoy = date('Y-m-d');
            $dhoy = date('d');

            $manana = date('Y-m-d', strtotime("+1 day"));   
            $dmanana = date('d', strtotime("+1 day")); 
 
            $ayer = date('Y-m-d', strtotime("-1 day"));
            $dayer = date('d', strtotime("-1 day"));

            $mes = date('m');
            $anho = date('Y');

            $array_receptor_formatted_dates = '{"' . $hoy . '":"' . $dhoy . '\/' . $mes . '\/' . $anho . '","' . $manana . '":"' . $dmanana . '\/' . $mes . '\/' . $anho . '"}';




            //DATOS NEURONALES MARGARITA
            //-----------------------------------------------------------------------------------------------------
            $est1_neu_hoy = DB::table('registros')
            ->select(DB::raw("*,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
                     DATE_FORMAT(fc_creacion,'%H') as hr_creacion"))
                ->where('id_estacion', '=', $estacion_1)   //margarita
                ->where('tipo_modelo', '=', 1)   //neuronal
                ->where('tipo_dato', '=', 8)
                ->whereBetween('fc_creacion', [$hoy . " 00:00:00", $hoy . " 23:59:59"])
                ->orderBy('serie_modelo', 'desc')
                    ->orderBy('id_registro', 'asc')
                ->limit(24)
                ->get();


            $est1_neu_manana = DB::table('registros')
            ->select(DB::raw("*,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
                     DATE_FORMAT(fc_creacion,'%H') as hr_creacion"))
                ->where('id_estacion', '=', $estacion_1)   //margarita
                ->where('tipo_modelo', '=', 1)   //neuronal
                ->where('tipo_dato', '=', 8)
                ->whereBetween('fc_creacion', [$manana . " 00:00:00", $manana . " 23:59:59"])
                ->orderBy('serie_modelo', 'desc')
                    ->orderBy('id_registro', 'asc')
                ->limit(24)
                ->get();



            //revisar cuando no hay datos

            $data_neu = '{"' . $hoy . '":{';
            $range_neu = '{"' . $hoy . '":{';

            foreach ($est1_neu_hoy as $key => $mar2) {
                if ($mar2->hr_creacion == 23) {
                    $data_neu = $data_neu . '"time_' . $mar2->hr_creacion . '":"' . $mar2->dato . '"';
                    $range_neu = $range_neu . '"time_' . $mar2->hr_creacion . '":"' . $mar2->range . '"';
                } else {
                    $data_neu = $data_neu . '"time_' . $mar2->hr_creacion . '":"' . $mar2->dato . '",';
                    $range_neu = $range_neu . '"time_' . $mar2->hr_creacion . '":"' . $mar2->range . '",';
                }
            }

            $data_neu = $data_neu . '},"' . $manana . '":{';
            $range_neu = $range_neu . '},"' . $manana . '":{';

            foreach ($est1_neu_manana as $key => $mar3) {
                if ($mar3->hr_creacion == 23) {
                    $data_neu = $data_neu . '"time_' . $mar3->hr_creacion . '":"' . $mar3->dato . '"';
                    $range_neu = $range_neu . '"time_' . $mar3->hr_creacion . '":"' . $mar3->range . '"';
                } else {
                    $data_neu = $data_neu . '"time_' . $mar3->hr_creacion . '":"' . $mar3->dato . '",';
                    $range_neu = $range_neu . '"time_' . $mar3->hr_creacion . '":"' . $mar3->range . '",';
                }
            }
            $data_neu = $data_neu . '}}';
            $range_neu = $range_neu . '}}';


            $array_receptor_e1_neur_variable_values_p = $data_neu;
            $array_receptor_e1_neur_variable_ranges_p = $range_neu;


            //DATOS NUMERICOS MARGARITA
            //-----------------------------------------------------------------------------------------------------        
           
            $est1_num_hoy = DB::table('registros')
            ->select(DB::raw("*,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
                     DATE_FORMAT(fc_creacion,'%H') as hr_creacion"))
                ->where('id_estacion', '=', $estacion_1)   //margarita
                ->where('tipo_modelo', '=', 3)   //numerico
                ->where('tipo_dato', '=', 8)
                ->whereBetween('fc_creacion', [$hoy . " 00:00:00", $hoy . " 23:59:59"])
                ->orderBy('serie_modelo', 'desc')
                    ->orderBy('id_registro', 'asc')
                ->limit(24)
                ->get();


            $est1_num_manana = DB::table('registros')
            ->select(DB::raw("*,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
                     DATE_FORMAT(fc_creacion,'%H') as hr_creacion"))
                ->where('id_estacion', '=', $estacion_1)   //margarita
                ->where('tipo_modelo', '=', 3)   //numerico
                ->where('tipo_dato', '=', 8)
                ->whereBetween('fc_creacion', [$manana . " 00:00:00", $manana . " 23:59:59"])
                ->orderBy('serie_modelo', 'desc')
                    ->orderBy('id_registro', 'asc')
                ->limit(24)
                ->get();


            $data = '{"' . $hoy . '":{';
            $range = '{"' . $hoy . '":{';


            foreach ($est1_num_hoy as $key => $mar2) {
                if ($mar2->hr_creacion == 23) {
                    $data = $data . '"time_' . $mar2->hr_creacion . '":"' . $mar2->dato . '"';
                    $range = $range . '"time_' . $mar2->hr_creacion . '":"' . $mar2->range . '"';
                } else {
                    $data = $data . '"time_' . $mar2->hr_creacion . '":"' . $mar2->dato . '",';
                    $range = $range . '"time_' . $mar2->hr_creacion . '":"' . $mar2->range . '",';
                }
            }

            $data = $data . '},"' . $manana . '":{';
            $range = $range . '},"' . $manana . '":{';

            foreach ($est1_num_manana as $key => $mar3) {
                if ($mar3->hr_creacion == 23) {
                    $data = $data . '"time_' . $mar3->hr_creacion . '":"' . $mar3->dato . '"';
                    $range = $range . '"time_' . $mar3->hr_creacion . '":"' . $mar3->range . '"';
                } else {
                    $data = $data . '"time_' . $mar3->hr_creacion . '":"' . $mar3->dato . '",';
                    $range = $range . '"time_' . $mar3->hr_creacion . '":"' . $mar3->range . '",';
                }
            }



            $data = $data . '}}';
            $range = $range . '}}';

            $array_receptor_e1_num_variable_values_p = $data;
            $array_receptor_e1_num_variable_ranges_p = $range;


            //   dd($array_receptor_num_variable_formatted_dates);

            //--------------------------------------------------------------------------------------------------------


            //DATOS NEURONALES LO CAMPO
            //-----------------------------------------------------------------------------------------------------
            
            $est2_neu_hoy = DB::table('registros')
            ->select(DB::raw("*,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
                     DATE_FORMAT(fc_creacion,'%H') as hr_creacion"))
                ->where('id_estacion', '=', $estacion_2)   //margarita
                ->where('tipo_modelo', '=', 1)   //neuronal
                ->where('tipo_dato', '=', 8)
                ->whereBetween('fc_creacion', [$manana . " 00:00:00", $manana . " 23:59:59"])
                ->orderBy('serie_modelo', 'desc')
                    ->orderBy('id_registro', 'asc')
                ->limit(24)
                ->get();

                $est2_neu_manana = DB::table('registros')
                ->select(DB::raw("*,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
                         DATE_FORMAT(fc_creacion,'%H') as hr_creacion"))
                    ->where('id_estacion', '=', $estacion_2)   //margarita
                    ->where('tipo_modelo', '=', 1)   //neuronal
                    ->where('tipo_dato', '=', 8)
                    ->whereBetween('fc_creacion', [$manana . " 00:00:00", $manana . " 23:59:59"])
                    ->orderBy('serie_modelo', 'desc')
                    ->orderBy('id_registro', 'asc')
                    ->limit(24)
                    ->get();

            //revisar cuando no hay datos

            $data_neu = '{"' . $hoy . '":{';
            $range_neu = '{"' . $hoy . '":{';

            foreach ($est2_neu_hoy as $key => $mar2) {
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

            foreach ($est2_neu_manana as $key => $mar3) {
                if ($mar3->hr_creacion == 23) {
                    $data_neu = $data_neu . '"time_' . $mar3->hr_creacion . '":"' . $mar3->dato . '"';
                    $range_neu = $range_neu . '"time_' . $mar3->hr_creacion . '":"' . $mar3->range . '"';
                } else {
                    $data_neu = $data_neu . '"time_' . $mar3->hr_creacion . '":"' . $mar3->dato . '",';
                    $range_neu = $range_neu . '"time_' . $mar3->hr_creacion . '":"' . $mar3->range . '",';
                }
            }
            $data_neu = $data_neu . '}}';
            $range_neu = $range_neu . '}}';


            $array_receptor_e2_neur_variable_values_p = $data_neu;
            $array_receptor_e2_neur_variable_ranges_p = $range_neu;


            //DATOS NUMERICOS LO CAMPO
            //-----------------------------------------------------------------------------------------------------
            $est2_neu_hoy = DB::table('registros')
                ->select(DB::raw("*,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
                         DATE_FORMAT(fc_creacion,'%H') as hr_creacion"))
                    ->where('id_estacion', '=', $estacion_2)   //margarita
                    ->where('tipo_modelo', '=', 3)   //numerico
                    ->where('tipo_dato', '=', 8)
                    ->whereBetween('fc_creacion', [$manana . " 00:00:00", $manana . " 23:59:59"])
                    ->orderBy('serie_modelo', 'desc')
                    ->orderBy('id_registro', 'asc')
                    ->limit(24)
                    ->get();


                    $est2_neu_manana = DB::table('registros')
                    ->select(DB::raw("*,DATE_FORMAT(fc_creacion,'%Y-%m-%d') as fc_creacion,
                             DATE_FORMAT(fc_creacion,'%H') as hr_creacion"))
                        ->where('id_estacion', '=', $estacion_2)   //margarita
                        ->where('tipo_modelo', '=', 2)   //numerico
                        ->where('tipo_dato', '=', 8)
                        ->whereBetween('fc_creacion', [$manana . " 00:00:00", $manana . " 23:59:59"])
                        ->orderBy('serie_modelo', 'desc')
                    ->orderBy('id_registro', 'asc')
                        ->limit(24)
                        ->get();


            $data = '{"' . $hoy . '":{';
            $range = '{"' . $hoy . '":{';


            foreach ($est2_neu_hoy as $key => $mar2) {
                if ($mar2->hr_creacion == 23) {
                    $data = $data . '"time_' . $mar2->hr_creacion . '":"' . $mar2->dato . '"';
                    $range = $range . '"time_' . $mar2->hr_creacion . '":"' . $mar2->range . '"';
                } else {
                    $data = $data . '"time_' . $mar2->hr_creacion . '":"' . $mar2->dato . '",';
                    $range = $range . '"time_' . $mar2->hr_creacion . '":"' . $mar2->range . '",';
                }
            }

            $data = $data . '},"' . $manana . '":{';
            $range = $range . '},"' . $manana . '":{';

            foreach ($est2_neu_manana as $key => $mar3) {
                if ($mar3->hr_creacion == 23) {
                    $data = $data . '"time_' . $mar3->hr_creacion . '":"' . $mar3->dato . '"';
                    $range = $range . '"time_' . $mar3->hr_creacion . '":"' . $mar3->range . '"';
                } else {
                    $data = $data . '"time_' . $mar3->hr_creacion . '":"' . $mar3->dato . '",';
                    $range = $range . '"time_' . $mar3->hr_creacion . '":"' . $mar3->range . '",';
                }
            }

            $data = $data . '}}';
            $range = $range . '}}';

            $array_receptor_e2_num_variable_values_p = $data;
            $array_receptor_e2_num_variable_ranges_p = $range;

           // dd( $array_receptor_e2_num_variable_values_p);

            //--------------------------------------------------------------------------------------------------------




            return view('pronosticos.resumen_pronosticos', compact(
                'array_receptor_formatted_dates',

                'array_receptor_e1_neur_variable_values_p',
                'array_receptor_e1_neur_variable_ranges_p',

                'array_receptor_e1_num_variable_values_p',
                'array_receptor_e1_num_variable_ranges_p',

                'array_receptor_e2_neur_variable_values_p',
                'array_receptor_e2_neur_variable_ranges_p',

                'array_receptor_e2_num_variable_values_p',
                'array_receptor_e2_num_variable_ranges_p',
                'sinopticos',
            ));
        } else {
            return redirect('/proyectos');
        }
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
