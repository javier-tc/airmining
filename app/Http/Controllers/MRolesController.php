<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use App\Models\Users;
Use App\Models\Roles;
use App\Models\RolProyectos;
use App\Models\UsersProyectos;

class MRolesController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin']);
        $proyectos=DB::table('proyectos')
        ->select(DB::raw("id_proyecto,pro_nproyecto,pro_estado"))
        ->where('pro_estado','=','1')
        ->get();

       

        $roles_proyectos=DB::table('roles_proyectos')
        ->select(DB::raw("id_rol,rolp_nombre"))
        ->where('rolp_estado','=','1')
        ->orderBy('id_rol','asc')
        ->get();

        $usuarios=DB::table('users')
        ->select(DB::raw("id,name,email"))
        ->where('use_estado','=','1')
        ->get();
        //dd($roles);

        $usuarios_proyectos=DB::table('users_proyectos')
        ->select(DB::raw("id,name,email,rolp_nombre,pro_nproyecto,id_up"))
        ->join('users', 'users.id', '=', 'users_proyectos.user_id')
        ->join('roles_proyectos', 'roles_proyectos.id_rol', '=', 'users_proyectos.rolep_id')
        ->join('proyectos', 'id_proyecto', '=', 'proyecto_id')
        ->where('use_estado','=','1')
        ->get();

       // dd($usuarios_proyectos);
        
        



        return view('mantenedor.roles.listar',compact('usuarios','proyectos','roles_proyectos','usuarios_proyectos'));
    }

    public function create()
    {
        $proyectos=DB::table('proyectos')
        ->select(DB::raw("id_proyecto,pro_nproyecto,pro_estado"))
        ->where('pro_estado','=','1')
        ->get();

        return view('mantenedor.roles.listar',compact('proyectos'),['usuario'=>new roles]);
    }


    public function store(Request $request)
    {
        $rol_user=new UsersProyectos();

        $user_id=$request['user_id'];
        $proyecto_id=$request['id_proyecto'];
        $role_id=$request['id_rol'];

        $rol_user=DB::table('users_proyectos')
        ->where('id_up','=',$user_id)
        ->where('proyecto_id','=',$proyecto_id)
        ->first();

      // dd($rol_user);

        if($rol_user!=null){
            session()->flash("message",'No es posible registrar Correctamente');
            session()->flash('tipomsg','bg-danger');
        }
        else{
            UsersProyectos::create([
                'user_id'=>$user_id,
                'rolep_id'=>  $role_id,
                'proyecto_id'=>$proyecto_id,
                'up_estado'=>1,
        
            ]);  
            session()->flash("message",'Registrado Correctamente');
            session()->flash('tipomsg','bg-success');

      }

/*
  session()->flash('tipomsg','alert msg-warning');
        session()->flash("status",'No se puede registrar');
        @if ($message = Session::get('status'))


        alert alert-success
 */

        

        
        //$proyecto->save();

        //return view('mantenedor.proyectos.listar');
        //return view('mantenedor.usuarios.editar',['usuario'=>$usuario]);
        return redirect('/mroles');
    }

    
    public function show($id)
    {
        return redirect('/mroles');
    }

  
    public function edit($id)
    {
        return redirect('/mroles');
    }

 
    public function update(Request $request, $id)
    {
        return redirect('/mroles');
    }

  
    public function destroy($id)
    {
        $rol_user = UsersProyectos::find($id);
        $rol_user->delete();

       // Session::flash('tipomsg','alert msg-success');
        //Session::flash('mensaje','Registro de Pesaje eliminado correctamente');
        //return view('mantenedor.proyectos.listar');
        return redirect('/mroles');
    }
}
