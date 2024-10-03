<?php

namespace App\Imports\Sheets;

use App\Models\Registros;
use Maatwebsite\Excel\Concerns\ToModel;

class NumericosFifthImport implements ToModel
{
    public function  __construct($nro_modelo,$id_modelo,$id_receptor)
    {
        $this->nro_modelo=$nro_modelo;
        $this->id_modelo=$id_modelo;
        $this->id_receptor=$id_receptor;
       
    }

    public function model(array $row)
    {
        $nro_modelo=  $this->nro_modelo;
        $id_modelo=  $this->id_modelo;
        $id_estacion=  $this->id_receptor;

        /*
        1 velocidad del viento
        2 Direccion del viento
        3 temperatura
        7 Presion Barometrica
        8 Dioxido de azufre
        9 Material particulado
        */
        if ($row[0] != 'Fecha creacion modelo') {    
            $date = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[0])->format('Y-m-d H:i:s');
        
        $rangeso2="entre 0,00 - 10,00";
        if($row[1]<10) {$range="entre 0,00 - 10,00";$alerta=1;}
        else if ($row[1]>=10 and $row[1]<=20) {$rangeso2="entre 10,00 - 20,00";$alerta=2;}
        else if ($row[1]>20 and $row[1]<=30) {$rangeso2="entre 20,00 - 30,00";$alerta=3;}
        else if ($row[1]>30 and $row[1]<=40){ $rangeso2="entre 30,00 - 40,00";$alerta=4;}
        else if ($row[1]>40) {$rangeso2="más de 40,00";$alerta=5;}
    


        return Registros::create([
    
            'fc_creacion' =>$date,
            'serie_modelo' =>$nro_modelo,
            'tipo_modelo' => $id_modelo,
            'tipo_dato' =>3,
            'dato' =>$row[1],
            'range' =>$rangeso2,
            'alerta' =>$alerta,
            'id_estacion' =>$id_estacion,
            'estado' =>1,
            'id_user' =>1
        ]);
     }
    }
}
