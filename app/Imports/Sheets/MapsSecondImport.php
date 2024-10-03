<?php

namespace App\Imports\Sheets;

use App\Models\Mapacalor;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class MapsSecondImport implements ToCollection
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
        $lons=$rows[2];   //2-34
        $linea=3;
        $grupo=1;

        $fecha = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($rows[3][0])->format('Y-m-d H:i:s');
        $hr = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($rows[3][0])->format('H');


     
        Mapacalor::create([

            'id_sector' =>$id_sector,
            'serie_modelo'=>$nro_modelo,
            'fecha' =>$fecha,
            'idhr' =>$hr,
            'tipo_dato'=>2,              //Dirección del viento.
            'correlativo' =>0,
            'lat' =>0,
            'lon1' =>$lons[2],
            'lon2' =>$lons[3],
            'lon3' =>$lons[4],
            'lon4' =>$lons[5],
            'lon5' =>$lons[6],
            'lon6' =>$lons[7],
            'lon7' =>$lons[8],
            'lon8' =>$lons[9],
            'lon9' =>$lons[10],
            'lon10' =>$lons[11],
            'lon11' =>$lons[12],
            'lon12' =>$lons[13],
            'lon13' =>$lons[14],
            'lon14' =>$lons[15],
            'lon15' =>$lons[16],
            'lon16' =>$lons[17],
            'lon17' =>$lons[18],
            'lon18' =>$lons[19],
            'lon19' =>$lons[20],
            'lon20' =>$lons[21],
            'lon21' =>$lons[22],
            'lon22' =>$lons[23],
            'lon23' =>$lons[24],
            'lon24' =>$lons[25],
            'lon25' =>$lons[26],
            'lon26' =>$lons[27],
            'lon27' =>$lons[28],
            'lon28' =>$lons[29],
            'lon29' =>$lons[30],
            'lon30' =>$lons[31],
            'lon31' =>$lons[32],
            'lon32' =>$lons[33],
            'lon33' =>$lons[34],                       
        ]);
        

        for($grupo;$grupo<=72;$grupo++){

            if($rows[$linea][0]!=null && $rows[$linea][1]!=null) {

                $fecha = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($rows[$linea][0])->format('Y-m-d H:i:s');
                $hr = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($rows[$linea][0])->format('H');
                $fil=1;

                for($fil;$fil<=33;$fil++){   
    
                        Mapacalor::create([
    
                            'id_sector' =>$id_sector,
                            'serie_modelo'=>$nro_modelo,
                            'fecha' =>$fecha,
                            'idhr' =>$hr,
                            'tipo_dato'=>2,              //Dirección del viento.
                            'correlativo' =>$fil,
                            'lat' =>$rows[$linea][1],
                            'lon1' =>$rows[$linea][2],
                            'lon2' =>$rows[$linea][3],
                            'lon3' =>$rows[$linea][4],
                            'lon4' =>$rows[$linea][5],
                            'lon5' =>$rows[$linea][6],
                            'lon6' =>$rows[$linea][7],
                            'lon7' =>$rows[$linea][8],
                            'lon8' =>$rows[$linea][9],
                            'lon9' =>$rows[$linea][10],
                            'lon10' =>$rows[$linea][11],
                            'lon11' =>$rows[$linea][12],
                            'lon12' =>$rows[$linea][13],
                            'lon13' =>$rows[$linea][14],
                            'lon14' =>$rows[$linea][15],
                            'lon15' =>$rows[$linea][16],
                            'lon16' =>$rows[$linea][17],
                            'lon17' =>$rows[$linea][18],
                            'lon18' =>$rows[$linea][19],
                            'lon19' =>$rows[$linea][20],
                            'lon20' =>$rows[$linea][21],
                            'lon21' =>$rows[$linea][22],
                            'lon22' =>$rows[$linea][23],
                            'lon23' =>$rows[$linea][24],
                            'lon24' =>$rows[$linea][25],
                            'lon25' =>$rows[$linea][26],
                            'lon26' =>$rows[$linea][27],
                            'lon27' =>$rows[$linea][28],
                            'lon28' =>$rows[$linea][29],
                            'lon29' =>$rows[$linea][30],
                            'lon30' =>$rows[$linea][31],
                            'lon31' =>$rows[$linea][32],
                            'lon32' =>$rows[$linea][33],
                            'lon33' =>$rows[$linea][34],                   
                        ]);
    
                        $linea=$linea+1;
                }
            }   //fin del if
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
