<?php

namespace App\Imports;

use App\Models\Neuronales;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class NeuronalesImport implements ToModel,WithHeadingRow
{

    public function  __construct($id_modelo,$receptor,$estacion)
    {
        $this->id_modelo=$id_modelo;
        $this->receptor=$receptor;
        $this->estacion=$estacion;

    }

    public function model(array $row){
    
       
        $id_modelo=  $this->id_modelo;
        $receptor=  $this->receptor;
        $estacion = $this->estacion;

        //dd("aqui");


        if ($row['fecha_creacion_modelo'] != '' && $row['so2'] != '') {      

            $date = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['fecha_creacion_modelo'])->format('Y-m-d H:i:s');
            $rangeso2="entre 0,00 - 100,00";
            $rangepm10="entre 0,00 - 100,00";
            if($row['so2']<100) {$rangeso2="entre 0,00 - 100,00";$alertso2=1;}
            else if ($row['so2']>=100 and $row['so2']<=200){ $rangeso2="entre 100,00 - 200,00";$alertso2=2;}
            else if ($row['so2']>200 and $row['so2']<=300) {$rangeso2="entre 200,00 - 300,00";$alertso2=3;}
            else if ($row['so2']>300 and $row['so2']<=400) {$rangeso2="entre 300,00 - 400,00";$alertso2=4;}
            else if ($row['so2']>400) {$rangeso2="más de 400,00";$alertso2=5;}

            if($row['pm10']<100) {$rangepm10="entre 0,00 - 100,00";$alertpm10=1;}
            else if ($row['pm10']>=100 and $row['pm10']<=200) {$rangepm10="entre 100,00 - 200,00";$alertpm10=2;}
            else if ($row['pm10']>200 and $row['pm10']<=300) {$rangepm10="entre 200,00 - 300,00";$alertpm10=3;}
            else if ($row['pm10']>300 and $row['pm10']<=400){ $rangepm10="entre 300,00 - 400,00";$alertpm10=4;}
            else if ($row['pm10']>400) {$rangepm10="más de 400,00";$alertpm10=5;}


            return new Neuronales([
    
                'neu_fc_creacion' =>$date,
                'neu_id_modelo' =>$id_modelo,
                'neu_datoso2' =>$row['so2'],
                'neu_rangeso2' =>$rangeso2,
                'neu_datopm10' =>$row['pm10'],
                'neu_rangepm10' =>$rangepm10,
                'neu_alertso2' =>$alertso2,
                'neu_alertpm10' =>$alertpm10,
                'neu_estacion'=> $estacion,
                'neu_estado' =>1
    
    
                //
            ]);
        }
    }

}

 
