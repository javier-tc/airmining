<?php

namespace App\Imports;

use App\Models\Numericos;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class NumericosImport implements ToModel,WithHeadingRow
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
            $rangews="entre 0,00 - 2,00";
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

            if($row['ws']<2) $rangews="entre 0,00 - 2,00";
            else if ($row['ws']>=2 and $row['ws']<=4) $rangews="entre 2,00 - 4,00";
            else if ($row['ws']>4 and $row['ws']<=6) $rangews="entre 4,00 - 6,00";
            else if ($row['ws']>6) $rangews="más de 6,00";

            return new Numericos([
    
                'num_fc_creacion' =>$date,
                'num_id_modelo' =>$id_modelo,
                'num_datoso2' =>$row['so2'],
                'num_rangeso2' =>$rangeso2,
                'num_datopm10'=>$row['pm10'],
                'num_rangepm10' =>$rangepm10,
                'num_datows'=>$row['ws'],
                'num_rangews' =>$rangews,
                'num_datowd' =>$row['wd'],
                'num_estacion'=> $estacion,
                'num_estado' =>1
    
    
                //
            ]);
        }

    }
}
