<?php

namespace App\Imports\Sheets;

use App\Models\Mapacalor;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class MapsFifthImport implements ToCollection
{
  
    public function  __construct($nro_modelo,$id_modelo,$id_sector)
    {
        $this->nro_modelo=$nro_modelo;
        $this->id_modelo=$id_modelo;
        $this->id_sector=$id_sector;
    }


    public function collection(Collection $rows)
    {
        $nro_modelo=  $this->nro_modelo;
        $id_modelo=  $this->id_modelo;
        $id_sector=  $this->id_sector;
        $lats=$rows[2];   //2-34
        $lons=$rows[3]; 
        $linea=4;
        $grupo=1;
        $fil=1;

        $fecha = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($rows[4][0])->format('Y-m-d H:i:s');
        $hr = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($rows[4][0])->format('H');
               
        for($fil;$fil<=72;$fil++){ 
            $grupo=1;
            $col=0;
        
           
            if($rows[$linea][0]!=null) {

                $fecha = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($rows[$linea][0])->format('Y-m-d H:i:s');
                $hr = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($rows[$linea][0])->format('H');               
              
                for($grupo;$grupo<=33;$grupo++){     
                          

                        Mapacalor::create([
    
                            'id_sector' =>$id_sector,
                            'serie_modelo'=>$nro_modelo,
                            'fecha' =>$fecha,
                            'idhr' =>$hr,
                            'tipo_dato'=>9,              //sm02.
                            'correlativo' =>$grupo,
                            'lat' =>$rows[2][$col+1],
                            'lon1' =>$rows[$linea][$col+1],
                            'lon2' =>$rows[$linea][$col+2],
                            'lon3' =>$rows[$linea][$col+3], //4
                            'lon4' =>$rows[$linea][$col+4],
                            'lon5' =>$rows[$linea][$col+5],
                            'lon6' =>$rows[$linea][$col+6],
                            'lon7' =>$rows[$linea][$col+7],
                            'lon8' =>$rows[$linea][$col+8],
                            'lon9' =>$rows[$linea][$col+9],
                            'lon10' =>$rows[$linea][$col+10],
                            'lon11' =>$rows[$linea][$col+11],
                            'lon12' =>$rows[$linea][$col+12],
                            'lon13' =>$rows[$linea][$col+13],
                            'lon14' =>$rows[$linea][$col+14],
                            'lon15' =>$rows[$linea][$col+15],
                            'lon16' =>$rows[$linea][$col+16],
                            'lon17' =>$rows[$linea][$col+17],
                            'lon18' =>$rows[$linea][$col+18],
                            'lon19' =>$rows[$linea][$col+19],
                            'lon20' =>$rows[$linea][$col+20],
                            'lon21' =>$rows[$linea][$col+21],
                            'lon22' =>$rows[$linea][$col+22],
                            'lon23' =>$rows[$linea][$col+23],
                            'lon24' =>$rows[$linea][$col+24],
                            'lon25' =>$rows[$linea][$col+25],
                            'lon26' =>$rows[$linea][$col+26],
                            'lon27' =>$rows[$linea][$col+27],
                            'lon28' =>$rows[$linea][$col+28],
                            'lon29' =>$rows[$linea][$col+29],
                            'lon30' =>$rows[$linea][$col+30],
                            'lon31' =>$rows[$linea][$col+31],
                            'lon32' =>$rows[$linea][$col+32],
                            'lon33' =>$rows[$linea][$col+33],                       
                        ]);
    
                    $col=$col+33;   
                }

            }   //fin del if
            $linea=$linea +1;
           // dd($linea);
        }//fin for grupos

    }

        /*
        1 velocidad del viento Ws
        2 Direccion del viento wd   
        3 temperatura           temp
        7 Presion Barometrica   
        8 Dioxido de azufre
        9 Material particulado
        */

        /* 
        Meteorological_variable:
        1 Velocidad del viento
        2 Dirección del viento
        3 Temperatura
        7 Presion Barometrica

        */


    
}

