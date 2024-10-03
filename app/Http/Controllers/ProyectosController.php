<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProyectosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'user']);
        $id_user=Session::get('id_user');
        $tipo_user= Session::get('tipo_user');
       
       
        if( $tipo_user=='admin'){
        

            $proyectos=DB::table('proyectos')
            ->select(DB::raw("id_proyecto,pro_nproyecto,
            DATE_FORMAT(pro_fcinicio,'%d-%m-%Y') as pro_fcinicio,
            DATE_FORMAT(pro_fctermino,'%d-%m-%Y') as pro_fctermino,
            pro_rubro,
            pro_descripcion,
            pro_estado"))
            ->where('pro_estado','=','1')
            ->get();
         

        }
        else{

            $proyectos=DB::table('proyectos')
            ->select(DB::raw("id_proyecto,pro_nproyecto,
            DATE_FORMAT(pro_fcinicio,'%d-%m-%Y') as pro_fcinicio,
            DATE_FORMAT(pro_fctermino,'%d-%m-%Y') as pro_fctermino,
            pro_rubro,
            pro_descripcion,
            pro_estado"))
            ->join('users_proyectos', 'users_proyectos.proyecto_id', '=', 'id_proyecto')
            ->where('pro_estado','=','1')
            ->where('user_id','=',$id_user)
            ->get();
          
        }

       return view('proyectos.listarproyectos',compact('proyectos'));
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
