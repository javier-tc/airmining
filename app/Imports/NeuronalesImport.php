<?php

namespace App\Imports;

use App\Models\Neuronales;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

use App\Imports\Sheets\FirstNeuronalesImport;
use App\Imports\Sheets\SecondNeuronalesImport;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class NeuronalesImport implements WithMultipleSheets 
{

    public function  __construct($id_modelo,$id_receptor,$id_estacion)
    {
        
        $this->id_modelo=$id_modelo;
        $this->id_receptor=$id_receptor;
        $this->id_estacion=$id_estacion;

    }


    public function sheets(): array
    {
        $id_modelo=  $this->id_modelo;
        $id_receptor=  $this->id_receptor;
        $id_estacion = $this->id_estacion;

        return [
            0 => new FirstNeuronalesImport($id_modelo,$id_receptor,$id_estacion),
            1 => new SecondNeuronalesImport($id_modelo,$id_receptor,$id_estacion),
        ];
    }
}

 
