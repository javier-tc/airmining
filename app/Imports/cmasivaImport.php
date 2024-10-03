<?php

namespace App\Imports;

use App\Models\cmasiva;
use App\Models\Estadisticos;
use App\Models\Neuronales;
use App\Models\Numericos;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithConditionalSheets;
use \PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;


class cmasivaImport implements ToModel,WithHeadingRow
{
    private $ide = null;
    private $cont=1;


    public function  __construct($tipo,$modelo,$receptor,$estacion,$cont)
    {
        $this->tipo= $tipo;
        $this->modelo=$modelo;
        $this->receptor=$receptor;
        $this->estacion=$estacion;
        $this->cont=$cont;

    }


    public function model(array $row){


    
    $tipo=      $this->tipo;
    $modelo=    $this->modelo;
    $receptor=  $this->receptor;
    $estacion = $this->estacion;
    $cont=$this->cont;

  
    /*
    Tipo 1 Monitoreo 2 Pronostico
    modelo 1 neurononal 2 estadistico 3numerico
    receptor    1 chagres
    estacion 1,2,3,4,5
    */
    $id_modelo=strtotime("now"); //tiempo unix unico para todos los registros.
    
    if($tipo==2){
        
        switch ($modelo) {
            //NEURONAL
            case 1:
                if ($row['fecha_creacion_modelo'] != '' && $row['so2'] != '') {      

                    $date = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['fecha_creacion_modelo'])->format('Y-m-d H:i:s');
                    $rangeso2="entre 0,00 - 100,00";
                    $rangepm10="entre 0,00 - 100,00";
                    if($row['so2']<100) $range="entre 0,00 - 100,00";
                    else if ($row['so2']>=100 and $row['so2']<=200) $rangeso2="entre 100,00 - 200,00";
                    else if ($row['so2']>200 and $row['so2']<=300) $rangeso2="entre 200,00 - 300,00";
                    else if ($row['so2']>300 and $row['so2']<=400) $rangeso2="entre 300,00 - 400,00";
                    else if ($row['so2']>400) $rangeso2="más de 400,00";
    
                    return new Neuronales([
            
                        'neu_fc_creacion' =>$date,
                        'neu_id_modelo' =>$id_modelo,
                        'neu_datoso2' =>$row['so2'],
                        'neu_rangeso2' =>$rangeso2,
                        'neu_estacion'=> $estacion,
                        'neu_estado' =>1
            
            
                        //
                    ]);
                    $cont++;
                }

                break;
            case 2:

                if ($row['fecha_creacion_modelo'] != '' && $row['so2'] != '') {      

                    $date = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['fecha_creacion_modelo'])->format('Y-m-d H:i:s');
                    $rangeso2="entre 0,00 - 100,00";
                    $rangepm10="entre 0,00 - 100,00";
                    if($row['so2']<100) $range="entre 0,00 - 100,00";
                    else if ($row['so2']>=100 and $row['so2']<=200) $rangeso2="entre 100,00 - 200,00";
                    else if ($row['so2']>200 and $row['so2']<=300) $rangeso2="entre 200,00 - 300,00";
                    else if ($row['so2']>300 and $row['so2']<=400) $rangeso2="entre 300,00 - 400,00";
                    else if ($row['so2']>400) $rangeso2="más de 400,00";
    
                    return new Estadisticos([
            
                        'esta_fc_creacion' =>$date,
                        'esta_id_modelo' =>$id_modelo,
                        'esta_datoso2' =>$row['so2'],
                        'esta_rangeso2' =>$rangeso2,
                        'esta_estacion'=> $estacion,
                        'esta_estado' =>1
            
            
                        //
                    ]);
                }


                
                break;
            case 3:

                if ($row['fecha_creacion_modelo'] != '' && $row['so2'] != '') {      

                    $date = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['fecha_creacion_modelo'])->format('Y-m-d H:i:s');
                    $rangeso2="entre 0,00 - 100,00";
                    $rangepm10="entre 0,00 - 100,00";
                    if($row['so2']<100) $range="entre 0,00 - 100,00";
                    else if ($row['so2']>=100 and $row['so2']<=200) $rangeso2="entre 100,00 - 200,00";
                    else if ($row['so2']>200 and $row['so2']<=300) $rangeso2="entre 200,00 - 300,00";
                    else if ($row['so2']>300 and $row['so2']<=400) $rangeso2="entre 300,00 - 400,00";
                    else if ($row['so2']>400) $rangeso2="más de 400,00";
    
                    return new Numericos([
            
                        'num_fc_creacion' =>$date,
                        'num_id_modelo' =>$id_modelo,
                        'num_datoso2' =>$row['so2'],
                        'num_rangeso2' =>$rangeso2,
                        'num_datosmpm10'=>10,
                        'num_rangepm10' =>$rangepm10,
                        'num_estacion'=> $estacion,
                        'num_estado' =>1
            
            
                        //
                    ]);
                }




                
                break;
        }

    }

    
}
   
}
