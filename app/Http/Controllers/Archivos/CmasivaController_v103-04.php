<?php

namespace App\Http\Controllers\Archivos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\Registros1hImport;
use App\Imports\Registros2hImport;
use App\Imports\Numericos2hImport;
use App\Imports\Numericos4hImport;
use App\Imports\Numericos5hImport;
use App\Imports\MapacalorImport;
use App\Imports\CodelcoImport;
Use App\Models\Estaciones;
Use Illuminate\Support\Facades\Route;


class CMasivaController extends Controller
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

        $estaciones=Estaciones::all();
        return view('archivos.carga_masiva',compact('estaciones','proyectos'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $tipo= $request['tipo'];
        $id_modelo= $request['modelo'];
        $id_sector= $request['receptor'];
        $id_receptor= $request['estacion'];  
        $file=$request->file('excel');
        $nro_modelo=strtotime("now"); 

        /*
        id_modelo 
        -1 mapa
        1 neurononal 
        2 estadistico 
        3 numerico

         */



         switch($id_sector){

                //sector 1 Chagres
                case 1:
                    if($id_receptor==-1){
                     
                        Excel::import(new MapacalorImport($nro_modelo,$id_modelo,$id_sector),$file);
                        
                    }
                    else{
            
            
                       
            
                        switch($id_modelo){
            
                            //NEURONAL
                            
                            case 1:  if($id_receptor!=3 && $id_receptor!=4){
                                        Excel::import(new Registros2hImport($nro_modelo,$id_modelo,$id_receptor),$file);
                                        }
                                        else{

                                      
                                        Excel::import(new Registros1hImport($nro_modelo,$id_modelo,$id_receptor),$file);}
                          break;
            
                            //estadistico
                            case 2: if($id_receptor!=3 && $id_receptor!=4)
                                        {Excel::import(new Registros2hImport($nro_modelo,$id_modelo,$id_receptor),$file);}
                                    else{
                                     
                                        Excel::import(new Registros1hImport($nro_modelo,$id_modelo,$id_receptor),$file);
                                        }
                            break;
            
                            //numerico
                            case 3:

                                if($id_receptor==5)
                                        Excel::import(new Numericos5hImport($nro_modelo,$id_modelo,$id_receptor),$file);
                                else
                                    if($id_receptor>=1 && $id_receptor<=4)
                                       { Excel::import(new Numericos4hImport($nro_modelo,$id_modelo,$id_receptor),$file);}
                                        else
                                        { Excel::import(new Numericos2hImport($nro_modelo,$id_modelo,$id_receptor),$file);}
                                break;                  
                        }
                        
                    }//if



                break;


                //sector codelco
                case 2:

                    Excel::import(new CodelcoImport($nro_modelo,$id_modelo,$id_receptor),$file);
                    
                    break;


         }//fin switch
        
       
        






        return redirect('/cmasiva');
        
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
