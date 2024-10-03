<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
Use App\Models\Proyectos;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;


    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function redirectTo()
    {
        Session::put('id_user',Auth::user()->id);
        Session::put('nom_user',Auth::user()->name);

        //$role = Auth::user()->roles->first();
        $role_admin=DB::table('role_user')
        ->select(DB::raw("role_id"))
        ->where('user_id','=',  Auth::user()->id)
        ->where('role_id','=','1') //si es admin
        ->get();

       

       


        if($role_admin->count()>0){
        

            Session::put('tipo_user','admin');
            return '/cmasiva';
        }
          
        
        else{
            Session::put('tipo_user','user');
            return '/proyectos';
        }      


       
    }

 /*
    public function redirectPath(){

        if(Auth::check()){    //  user is logged in

            Session::put('id_user',Auth::user()->id);
            Session::put('nom_usuario',Auth::user()->name);
           
            $user = Auth::user();
            if ($user->hasRole('admin'))
                Session::put('tipo_usuario','admin');
            else{
                Session::put('tipo_usuario','usuario');
            }

          //busco si tiene predios asociados


            if($select_predio){
                Session::put('nombre_predio',$select_predio->pre_nombre);
                Session::put('id_predio',$select_predio->id_predio);
                return '/ani';
            }
            
            else{
                return '/predios';
           

            return '/musuarios';

        }
    }

 }*/


}
