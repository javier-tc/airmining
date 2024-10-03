<?php

namespace App\Http\Controllers;
Use App\Models\User;
Use App\Models\RoleUser;
Use App\Models\UsersProyectos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MUsuariosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin']);
        
        $usuarios = DB::table('users')
       ->select(DB::raw("users.id,users.name,users.email,rol_descripcion"))
       ->join('role_user', 'role_user.user_id', '=', 'users.id')
       ->join('roles', 'roles.id', '=', 'role_user.role_id')

       ->where('use_estado','=',1)
       ->orderBy('role_id', 'desc')
       ->get();

        
        //dd($proyectos);
        return view('mantenedor.usuarios.listar',compact('usuarios'));

       
    }

    public function create()
    {
        $proyectos=DB::table('proyectos')
        ->select(DB::raw("id_proyecto,pro_nproyecto,pro_estado"))
        ->where('pro_estado','=','1')
        ->get();

        return view('mantenedor.usuarios.agregar',compact('proyectos'),['usuario'=>new User]);
    }

    public function store(Request $request)
    {

        $usuario=new User;
        User::create([
          
            'name'=>$request['name'],
            'email'=>$request['email'],
            'password'=>bcrypt($request['password']),
            'use_estado'=>1,
    
        ]);  

        $usuario=DB::table('users')
        ->where('email','=',$request['email'])
        ->where('use_estado','=','1')
        ->first();

        $id_user=$usuario->id;

        RoleUser::create([
          
            'user_id'=>  $id_user,
            'role_id'=>$request['tipouser'],
            'ru_estado'=>1,
    
        ]);  
        

   

        //session()->flash("status",'Registrado Correctamente');
        //$proyecto->save();

        //return view('mantenedor.proyectos.listar');
        //return view('mantenedor.usuarios.editar',['usuario'=>$usuario]);
        return redirect('/musuarios');




    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $usuario=User::FindOrFail($id);
       return view('mantenedor.usuarios.editar',['usuario'=>$usuario]);
    }

    public function update(Request $request, $id)
    {
        $usuario=User::findOrFail($id);

    

        $usuario->name=$request['name'];
        $usuario->email=$request['email'];
        $usuario->password=bcrypt($request['password']);
        $usuario->update();
        return redirect('/musuarios');
        
    }

    public function destroy($id)
    {
        

        $usuario=DB::table('users_proyectos')
        ->where('user_id','=',$id)
        ->get();
    
        $uu=$usuario->first();
    
        if($uu){
            session()->flash("message",'Debe eliminar proyecto asociado');
            session()->flash('tipomsg','bg-danger');
        }
        else{

           
            //elimino de proyectos          
            //$UsersProyectos = UsersProyectos::find($usuario[0]->id_up);
            //$UsersProyectos->delete();

            $usuario=DB::table('role_user')
            ->where('user_id','=',$id)
            ->get();
            $id_ru=$usuario[0]->id_ru;


            $roleuse = RoleUser::find($id_ru);
            $roleuse->delete();

            $usuario=User::findOrFail($id);
            $usuario->delete();




            
        }


        

       
     
        //$usuario->use_estado='0';
        //$pesajes->pes_id_update=Session::get('id_usuario');
        
        //$usuario->update();
       // Session::flash('tipomsg','alert msg-success');
        //Session::flash('mensaje','Registro de Pesaje eliminado correctamente');
        //return view('mantenedor.proyectos.listar');
        return redirect('/musuarios');
    }
}
