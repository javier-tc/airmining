<?php

namespace App\Imports\Sheets;
use App\Models\Registros;
use Maatwebsite\Excel\Concerns\ToModel;

class FirstNeuronalesImport implements ToModel
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
   

     
        if ($row[0] != 'Fecha creacion modelo') {    
            $date = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[0])->format('Y-m-d H:i:s');
        
        $range="entre 0,00 - 100,00";
      
        if($row[1]<100) {$range="entre 0,00 - 100,00";$alerta=1;}
        else if ($row[1]>=100 and $row[1]<=200){ $range="entre 100,00 - 200,00";$alerta=2;}
        else if ($row[1]>200 and $row[1]<=300) {$range="entre 200,00 - 300,00";$alerta=3;}
        else if ($row[1]>300 and $row[1]<=400) {$range="entre 300,00 - 400,00";$alerta=4;}
        else if ($row[1]>400) {$range="más de 400,00";$alerta=5;}

  


        return Registros::create([
    
            'fc_creacion' =>$date,
            'serie_modelo' =>$nro_modelo,
            'tipo_modelo' => $id_modelo,
            'tipo_dato' =>8,
            'dato' =>$row[1],
            'range' =>$range,
            'alerta' =>$alerta,
            'id_estacion' =>$id_estacion,
            'estado' =>1,
            'id_user' =>1
        ]);
        }//fin si
    }
}





