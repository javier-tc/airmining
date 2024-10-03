<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $id_proyecto = Session::get('id_proyecto');
        $tipo_user = Session::get('tipo_user');

        if ($tipo_user == "user") {
            $ruta = '/dashboard/' . $id_proyecto;
            return redirect($ruta);
        } else {
            return redirect('/proyectos');
        }
    }
    /*
         1 Catemu
         2 lo campo
         3 Romeral
         4 Sta. Margarita
         5 Meteorologica
         */

    /*catemu, lo campo , romeral, sta martggarita*/


    //dd($hoyhr);


    public function show(Request $request, $id)
    {
        /*
        1 Operador
        2 Supervisor
        3 Comunidad
        */
        Session::put('id_proyecto', $id);

        $request->user()->authorizeRoles(['admin', 'user']);
        $id_user = Session::get('id_user');

        $id_proyecto = $id;                  //id del proyecto
        $nombre_proyecto = '';
        

        $pro_nombre = DB::table('proyectos')
            ->select(DB::raw("pro_nproyecto"))
            ->where('id_proyecto', '=', $id_proyecto)
            ->get();

           // dd($pro_nombre);

         $nombre_proyecto=$pro_nombre[0]->pro_nproyecto;

        $tipo_rol_proyecto = DB::table('users_proyectos')
            ->select(DB::raw("rolep_id,rolp_nombre"))
            ->join('roles_proyectos', 'roles_proyectos.id_rol', '=', 'rolep_id')
            ->where('proyecto_id', '=', $id_proyecto)
            ->where('user_id', '=', $id_user)
            ->Limit(1)
            ->get();




        Session::put('nombre_proyecto', $pro_nombre[0]->pro_nproyecto);

        if ($tipo_rol_proyecto->count() == 0) {

            Session::put('tipo_rol_proyecto', '');
        } else {
            Session::put('tipo_rol_proyecto', $tipo_rol_proyecto[0]->rolp_nombre); // Operador Supervidor
        }

        $das = collect([
            (object) [
                'sin_cma1' => '-',
                'sin_cma2' => '-',
                'sin_cma3' => '-',
                'sin_prob1' => '-',
                'sin_prob2' => '-',
                'sin_prob3' => '-'
            ],

        ]);
        $sinopticos = $das;




        $hoy = date('Y-m-d');
        $hoyhr = date('Y-m-d H:00:00');
        $hoyhrmas = date("Y-m-d H:00", strtotime('+1 hours'));
        $hr = date("H:00", strtotime('+1 hours'));
        //dd($hoyhrmas);


        $sinopticos = DB::table('csinopticos')
            ->select(DB::raw("sin_cma1, sin_cma2,sin_cma3,sin_prob1,sin_prob2,sin_prob3"))
            ->where('sin_id_proyecto', '=', $id_proyecto)
            ->where('sin_fecha', '=', $hoy)
            ->orderBy('id_sin', 'asc')
            ->Limit(1)
            ->get();

           
          

        if ($sinopticos->count() == 0) {

            $das = collect([
                (object) [
                    'sin_cma1' => '-',
                    'sin_cma2' => '-',
                    'sin_cma3' => '-',
                    'sin_prob1' => '-',
                    'sin_prob2' => '-',
                    'sin_prob3' => '-'
                ],

            ]);
            $sinopticos = $das;
        }




        //retorno estaciones asociadas al proyecto
        $DBestaciones = DB::table('estaciones')
            ->select(DB::raw("id_estacion, est_nombre"))
            ->where('est_tipo', '=', 1)               //tipo estacion
            ->where('est_estado', '=', 1)
            ->where('est_id_proyecto', '=', $id_proyecto)
            ->get();


          

         //dd($DBestaciones);

        $largo = $DBestaciones->count();

        if ($largo != 0) {

            $i = 0;

            switch ($id_proyecto) {

                case 1:
                    foreach ($DBestaciones as $est) {

                        $DBdata = DB::select("select 
   
               (select est_nombre from estaciones 
               left join registros on estaciones.id_estacion=registros.id_estacion
               where fc_creacion ='" . $hoyhrmas . "'
               and tipo_modelo = 3
               and tipo_dato = 8
               and registros.id_estacion=" . $est->id_estacion . "
               and estado=1
               order by id_registro asc
               limit 1) as est_nombre,
            
            
               (select TRUNCATE(dato,2) from registros 
               left join estaciones on estaciones.id_estacion=registros.id_estacion
               where fc_creacion ='" . $hoyhrmas . "'
               and tipo_modelo = 3
               and tipo_dato = 1
               and registros.id_estacion=" . $est->id_estacion . "
               and estado=1
               order by id_registro asc
               limit 1) as ws,
               
               (select TRUNCATE(dato,2) from registros 
               left join estaciones on estaciones.id_estacion=registros.id_estacion
               where fc_creacion ='" . $hoyhrmas . "'
               and tipo_modelo = 3
               and tipo_dato = 2
               and registros.id_estacion=" . $est->id_estacion . "
               and estado=1
               order by id_registro asc
               limit 1) as wd,
   
               (select TRUNCATE(dato,2) from registros 
               left join estaciones on estaciones.id_estacion=registros.id_estacion
               where fc_creacion ='" . $hoyhrmas . "'
               and tipo_modelo = 3
               and tipo_dato = 8
               and registros.id_estacion=" . $est->id_estacion . "
               and estado=1
               order by id_registro asc
               limit 1) as so2,
   
               (select TRUNCATE(dato,2) from registros 
               left join estaciones on estaciones.id_estacion=registros.id_estacion
               where fc_creacion ='" . $hoyhrmas . "'
               and tipo_modelo = 3
               and tipo_dato = 9
               and registros.id_estacion=" . $est->id_estacion . "
               and estado=1
               order by id_registro asc
               limit 1) as pm10,
   
               (select alerta from registros 
               left join estaciones on estaciones.id_estacion=registros.id_estacion
               where fc_creacion ='" . $hoyhrmas . "'
               and tipo_modelo = 1
               and tipo_dato = 8
               and registros.id_estacion=" . $est->id_estacion . "
               and estado=1
               order by id_registro asc
               limit 1) as so2_neu,
   
               (select alerta from registros 
               left join estaciones on estaciones.id_estacion=registros.id_estacion
               where fc_creacion ='" . $hoyhrmas . "'
               and tipo_modelo = 2
               and tipo_dato = 8
               and registros.id_estacion=" . $est->id_estacion . "
               and estado=1
               order by id_registro asc
               limit 1) as so2_stat,
   
               (select alerta from registros 
               left join estaciones on estaciones.id_estacion=registros.id_estacion
               where fc_creacion ='" . $hoyhrmas . "'
               and tipo_modelo = 3
               and tipo_dato = 8
               and registros.id_estacion=" . $est->id_estacion . "
               and estado=1
               order by id_registro asc
               limit 1) as so2_num             
               ");

             

/*  if($est->id_estacion==2)
                        dd($DBdata);
 */
                       
               //si data null muestro lo sgte.
                        if ($DBdata[0]->est_nombre == null) {

                            $data1 =
                                (object) [
                                    'est_nombre' => $est->est_nombre,
                                    'ws' => '-',
                                    'wd' => '-',
                                    'so2' => '-',
                                    'pm10' => '-',
                                    'so2_neu' => '-',
                                    'so2_stat' => '-',
                                    'so2_num' => '-'
                                ];

                              
                            $data_estaciones[$i] = $data1;
                        }
                        else{

                            $data2 =
                            (object) [
                                'est_nombre' => $est->est_nombre,
                                'ws' => $DBdata[0]->ws,
                                'wd' => $DBdata[0]->wd,
                                'so2' => $DBdata[0]->so2,
                                'pm10' => $DBdata[0]->pm10,
                                'so2_neu' => $DBdata[0]->so2_neu,
                                'so2_stat' => $DBdata[0]->so2_stat,
                                'so2_num' => $DBdata[0]->so2_num,
                            ];
                        $data_estaciones[$i] = $data2;

                        }
                        $i++;
                    }
                    $data_estaciones = collect($data_estaciones);
                 

                    break;
                case 2:
                    //recorro cada estacion para obtener los datos
                    foreach ($DBestaciones as $est) {
                        $DBdata = DB::select("select 
   
                        (select est_nombre from estaciones 
                        left join registros on estaciones.id_estacion=registros.id_estacion
                        where fc_creacion ='" . $hoyhrmas . "'
                        and tipo_modelo = 1
                        and tipo_dato = 8
                        and registros.id_estacion=" . $est->id_estacion . "
                        and estado=1
                        order by id_registro asc
                        limit 1) as est_nombre,
                       
                        (select TRUNCATE(dato,2) from registros 
                        left join estaciones on estaciones.id_estacion=registros.id_estacion
                        where fc_creacion ='" . $hoyhrmas . "'
                        and tipo_modelo = 1
                        and tipo_dato = 8
                        and registros.id_estacion=" . $est->id_estacion . "
                        and estado=1
                        order by id_registro asc
                        limit 1) as so2,
               
                        (select alerta from registros 
                        left join estaciones on estaciones.id_estacion=registros.id_estacion
                        where fc_creacion ='" . $hoyhrmas . "'
                        and tipo_modelo = 1
                        and tipo_dato = 8
                        and registros.id_estacion=" . $est->id_estacion . "
                        and estado=1
                        order by id_registro asc
                        limit 1) as so2_neu,
            
                        (select alerta from registros 
                        left join estaciones on estaciones.id_estacion=registros.id_estacion
                        where fc_creacion ='" . $hoyhrmas . "'
                        and tipo_modelo = 2
                        and tipo_dato = 8
                        and registros.id_estacion=" . $est->id_estacion . "
                        and estado=1
                        order by id_registro asc
                        limit 1) as so2_stat          
                        ");

                    //si data null muestro lo null.
                    if ($DBdata[0]->est_nombre == null) {

                        $data1 =
                            (object) [
                                'est_nombre' => $est->est_nombre,
                                'so2' => '-',
                                'so2_neu' => '-',
                                'so2_stat' => '-',
                            ];


                        $data_estaciones[$i] = $data1;
                   
                    }
                    else{
                            //si hay dato se crea el objeto.
                        $data2 =
                        (object) [
                            'est_nombre' => $est->est_nombre,
                            'so2' => $DBdata[0]->so2,
                            'so2_neu' => $DBdata[0]->so2_neu,
                            'so2_stat' => $DBdata[0]->so2_stat,
                        ];
                    $data_estaciones[$i] = $data2;
                    }
                    $i++;
                    
                }//end foreach

                $data_estaciones = collect($data_estaciones);

                //dd($data_estaciones);
                break;

            } //switch


            if ($id_proyecto == 2) {
                return view('dashboard.show_codelco', compact('sinopticos', 'data_estaciones', 'nombre_proyecto', 'hr'));
            } else {
                return view('dashboard.show', compact('sinopticos', 'data_estaciones', 'nombre_proyecto', 'hr'));
            }
        } else {

            $mensaje = "No existen Estaciones Asociadas al proyecto";
            return view('error', compact('mensaje'));
        }
    }
}
