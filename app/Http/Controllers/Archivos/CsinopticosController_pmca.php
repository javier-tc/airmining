<?php

namespace App\Http\Controllers\Archivos;

use App\Http\Controllers\Controller;
use App\Models\Csinopticos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use App\Models\Estaciones;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CSinopticosController extends Controller
{
 
    public function __construct()
    {
        $this->middleware('auth');
    }
        
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin']);

        /*$id_proyecto=Session::get('id_proyecto');
        
        $pro_nombre=DB::table('proyectos')
        ->select(DB::raw("pro_nproyecto"))
        ->where('id_proyecto','=',$id_proyecto)
        ->get();

        $proyectos=DB::table('proyectos')
        ->select(DB::raw("id_proyecto,pro_nproyecto,pro_estado"))
        ->where('pro_estado','=','1')
        ->get();
      */


        $hoy=date('Y-m-d');
        

        $sinopticos=DB::table('csinopticos')
        ->select(DB::raw("DATE_FORMAT(sin_fecha,'%d-%m-%Y') as sin_fecha,sin_cma1, sin_cma2,sin_cma3,sin_cma4,sin_cma5,sin_cma6"))
        ->where('sin_id_proyecto','=', 1)
        ->orderBy('sin_fecha','desc')
        ->limit(30)
        ->get();
     

        return view('archivos.carga_sinopticos',compact('sinopticos'));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        $id_proyecto=Session::get('id_proyecto');
        //dd( $id_proyecto);
 
        Csinopticos::create([

            'sin_fecha'=>$request['fecha'],
            'sin_id_proyecto'=>1,
            'sin_cma1'=>$request['cma1'],
            'sin_cma2'=>$request['cma2'],
            'sin_cma3'=>$request['cma3'],
            'sin_cma4'=>$request['cma4'],
            'sin_cma5'=>$request['cma5'],
            'sin_cma6'=>$request['cma6'],
            'sin_prob1'=>$request['prob1'],
            'sin_prob2'=>$request['prob2'],
            'sin_prob3'=>$request['prob3'],
            'sin_prob4'=>$request['prob4'],
            'sin_prob5'=>$request['prob5'],
            'sin_prob6'=>$request['prob6'],
            'sin_estado'=>1    
        ]);  

        return redirect('/csinopticos');
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
