<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Proyectos;


use Illuminate\Support\Facades\DB;

class InfoProyectoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Request $request)
    {
        /*

1 operador
2 supervisor
3 comunidad 

*/
        $id_proyecto = Session::get('id_proyecto');
      
        $request->user()->authorizeRoles(['admin', 'user']);
        $id_user = Session::get('id_user');
        
       
       

        if ($id_proyecto != null) {

            $pro = DB::table('proyectos')
                ->select(DB::raw("pro_nproyecto,
                    DATE_FORMAT(pro_fcinicio,'%d-%m-%Y') as pro_fcinicio,
                    DATE_FORMAT(pro_fctermino,'%d-%m-%Y') as pro_fctermino,
                    pro_nresponsable,
                    pro_eresponsable,
                    pro_fonoresponsable,
                    pro_rubro,
                    pro_subrubro,
                    pro_descripcion,
                    pro_estado"))
                ->where('id_proyecto', '=', $id_proyecto)
                ->where('pro_estado', '=', '1')
                ->first();


            $miembros = DB::table('users')
                ->join('users_proyectos', 'users_proyectos.id_up', '=', 'users.id')
                ->select(DB::raw("name,email"))
                ->where('users_proyectos.proyecto_id', '=', '1')
                ->where('use_estado', '=', '1')
                ->get();

            if ($miembros->count() == 0) {
                $das = collect([
                    (object) [
                        'name' => '-',
                        'email' => '-',
                    ],

                ]);
                $miembros = $das;
            }


            return view('proyectos.infoproyecto', compact('pro', 'miembros'));
        } else {
            return redirect('/proyectos');
        }
    }
}
