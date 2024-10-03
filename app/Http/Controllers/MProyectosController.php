<?php

namespace App\Http\Controllers;
Use App\Models\Proyectos;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class MProyectosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin']);
       
        $proyectos=DB::table('proyectos')
        ->where('pro_estado','=','1')
        ->get();
        //dd($proyectos);
        return view('mantenedor.proyectos.listar',compact('proyectos'));

      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
   
        return view('mantenedor.proyectos.agregar',['proyecto'=>new Proyectos]);
    }

    public function store(Request $request)
    {
        $proyecto=new Proyectos;
        proyectos::create([
          
            'pro_nproyecto'=>$request['pro_nproyecto'],
            'pro_fcinicio'=>$request['pro_fcinicio'],
            'pro_fctermino'=>$request['pro_fctermino'],
            'pro_nresponsable'=>$request['pro_nresponsable'],
            'pro_eresponsable'=>$request['pro_eresponsable'],
            'pro_fonoresponsable'=>$request['pro_fonoresponsable'],
            'pro_rubro'=>$request['pro_rubro'],
            'pro_subrubro'=>$request['pro_subrubro'],
            'pro_descripcion'=>$request['pro_descripcion'],
            'pro_estado'=>1,
    
        ]);  

        //session()->flash("status",'Registrado Correctamente');
        //$proyecto->save();

        //return view('mantenedor.proyectos.listar');
        //return view('mantenedor.proyectos.editar',['proyecto'=>$proyecto]);
        return redirect('/mproyectos');
    }

   

    public function edit($id)
    {
      
        $proyecto=Proyectos::FindOrFail($id);
       
       return view('mantenedor.proyectos.editar',['proyecto'=>$proyecto]);
      
    }


    public function update(Request $request, $id)
    {
        $proyecto=proyectos::findOrFail($id);
        $proyecto->fill($request->all());
       // $animal->ani_id_update=Session::get('id_usuario');
    
        
    
        $proyecto->update();
        return redirect('/mproyectos');
    }


    public function destroy($id)
    {
        $proyecto=Proyectos::findOrFail($id);
        $proyecto->pro_estado='0';
        //$pesajes->pes_id_update=Session::get('id_usuario');
        
        $proyecto->update();
       // Session::flash('tipomsg','alert msg-success');
        //Session::flash('mensaje','Registro de Pesaje eliminado correctamente');
        //return view('mantenedor.proyectos.listar');
        return redirect('/mproyectos');

    }
}
