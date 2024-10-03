<?php

namespace App\Imports\Sheets;
use App\Models\Registros;
use App\Models\SecondNumericos;
use Maatwebsite\Excel\Concerns\ToModel;

class SecondNumericosImport implements ToModel
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
        
        return Registros::create([
    
            'fc_creacion' =>$date,
            'serie_modelo' =>$nro_modelo,
            'tipo_modelo' => $id_modelo,
            'tipo_dato' =>2,
            'dato' =>$row[1],
            'range' =>0,
            'alerta' =>0,
            'id_estacion' =>$id_estacion,
            'estado' =>1,
            'id_user' =>1
        ]);
     }
    }
}
