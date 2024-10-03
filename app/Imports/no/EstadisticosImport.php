<?php

namespace App\Imports;

use App\Models\Estadisticos;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EstadisticosImport implements ToModel,WithHeadingRow
{

    public function  __construct($id_modelo,$receptor,$estacion)
    {
        $this->id_modelo=$id_modelo;
        $this->receptor=$receptor;
        $this->estacion=$estacion;

    }

    public function model(array $row)
    {

        $id_modelo=  $this->id_modelo;
        $receptor=  $this->receptor;
        $estacion = $this->estacion;


        if ($row['fecha_creacion_modelo'] != '' && $row['so2'] != '') {      

            $date = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['fecha_creacion_modelo'])->format('Y-m-d H:i:s');
            $rangeso2="entre 0,00 - 100,00";
            $rangepm10="entre 0,00 - 100,00";
            if($row['so2']<100) $range="entre 0,00 - 100,00";
            else if ($row['so2']>=100 and $row['so2']<=200) $rangeso2="entre 100,00 - 200,00";
            else if ($row['so2']>200 and $row['so2']<=300) $rangeso2="entre 200,00 - 300,00";
            else if ($row['so2']>300 and $row['so2']<=400) $rangeso2="entre 300,00 - 400,00";
            else if ($row['so2']>400) $rangeso2="más de 400,00";

            if($row['pm10']<100) $rangepm10="entre 0,00 - 100,00";
            else if ($row['pm10']>=100 and $row['pm10']<=200) $rangepm10="entre 100,00 - 200,00";
            else if ($row['pm10']>200 and $row['pm10']<=300) $rangepm10="entre 200,00 - 300,00";
            else if ($row['pm10']>300 and $row['pm10']<=400) $rangepm10="entre 300,00 - 400,00";
            else if ($row['pm10']>400) $rangepm10="más de 400,00";



            return new Estadisticos([
    
                'esta_fc_creacion' =>$date,
                'esta_id_modelo' =>$id_modelo,
                'esta_datoso2' =>$row['so2'],
                'esta_rangeso2' =>$rangeso2,
                'esta_datopm10' =>$row['pm10'],
                'esta_rangepm10' =>$rangepm10,
                'esta_estacion'=> $estacion,
                'esta_estado' =>1
    
    
                //
            ]);
        }
    }
}
