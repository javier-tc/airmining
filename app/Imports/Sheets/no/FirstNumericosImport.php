<?php

namespace App\Imports\Sheets;
use App\Models\Registros;
use App\Models\FirstNumericos;
use Maatwebsite\Excel\Concerns\ToModel;

class FirstNumericosImport implements ToModel
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
        1 velocidad del viento Ws
        2 Direccion del viento wd   
        3 temperatura           temp
        7 Presion Barometrica   
        8 Dioxido de azufre
        9 Material particulado
        */
        if ($row[0] != 'Fecha creacion modelo') {    
            $date = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[0])->format('Y-m-d H:i:s');
        
        $rangews="entre 0,00 - 2,00";
        if($row[1]<2){ $rangews="entre 0,00 - 2,00";$alerta=1;}
        else if ($row[1]>=2 and $row[1]<=4){ $rangews="entre 2,00 - 4,00"; $alerta=2;}
        else if ($row[1]>4 and $row[1]<=6) { $rangews="entre 4,00 - 6,00"; $alerta=3;}
        else if ($row[1]>6) {$rangews="más de 6,00";$alerta=4;}
    


        return Registros::create([
    
            'fc_creacion' =>$date,
            'serie_modelo' =>$nro_modelo,
            'tipo_modelo' => $id_modelo,
            'tipo_dato' =>1,
            'dato' =>$row[1],
            'range' =>$rangews,
            'alerta' =>$alerta,
            'id_estacion' =>$id_estacion,
            'estado' =>1,
            'id_user' =>1
        ]);
     }
    }
}