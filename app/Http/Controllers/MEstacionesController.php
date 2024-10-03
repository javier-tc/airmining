<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use App\Models\Estaciones;

class MEstacionesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin']);
        //1 Estacion
        //2 Receptor
        $estaciones=DB::table('estaciones')
        ->select(DB::raw("id_proyecto,pro_nproyecto, est_id_proyecto,id_estacion,est_nombre,est_latitud,est_longitud,if(est_tipo = 1, 'Estación', 'Receptor') as est_tipo,est_visible, est_estado"))
        ->join('proyectos', 'proyectos.id_proyecto', '=', 'est_id_proyecto')
        ->where('est_estado','=','1')
        ->get();
        





        //dd($proyectos);
        return view('mantenedor.estaciones.listar',compact('estaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proyectos=DB::table('proyectos')
        ->select(DB::raw("id_proyecto,pro_nproyecto,pro_estado"))
        ->where('pro_estado','=','1')
        ->get();


        return view('mantenedor.estaciones.agregar',compact('proyectos'),['estacion'=>new Estaciones]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $estacion=new Estaciones;
        Estaciones::create([
            'est_id_proyecto'=>$request['est_id_proyecto'],
            'est_nombre'=>$request['est_nombre'],
            'est_latitud'=>$request['est_latitud'],
            'est_longitud'=>$request['est_longitud'],
            'est_tipo'=>$request['est_tipo'],
            'est_visible'=>$request['est_visible'],
            'est_estado'=>1,
    
        ]);  

        return redirect('/mestaciones');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $proyectos=DB::table('proyectos')
        ->select(DB::raw("id_proyecto,pro_nproyecto,pro_estado"))
        ->where('pro_estado','=','1')
        ->get();
        
        $estacion=Estaciones::FindOrFail($id);
       // dd($estacion);
        //dd( $estacion->est_id_proyecto);
        return view('mantenedor.estaciones.editar',compact('proyectos'),['estacion'=>$estacion]);
    }


    public function update(Request $request, $id)
    {
        $estacion=Estaciones::findOrFail($id);

        $estacion->est_id_proyecto=$request['est_id_proyecto'];
        $estacion->est_nombre=$request['est_nombre'];
        $estacion->est_latitud=$request['est_latitud'];
        $estacion->est_longitud=$request['est_longitud'];
        $estacion->est_tipo=$request['est_tipo'];
        $estacion->est_visible=$request['est_visible'];
        $estacion->update();

        return redirect('/mestaciones');
    }


    public function destroy($id)
    {
        $estacion=Estaciones::findOrFail($id);
        $estacion->est_estado='0';
        $estacion->update();
        return redirect('/mestaciones');
    }
}
