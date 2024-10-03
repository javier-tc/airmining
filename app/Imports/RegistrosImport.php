<?php

namespace App\Imports;

use App\Models\Registros;
use App\Imports\Sheets\FirstNeuronalesImport;
use App\Imports\Sheets\SecondNeuronalesImport;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class RegistrosImport implements WithMultipleSheets 
{
    public function  __construct($nro_modelo,$id_modelo,$id_receptor)
    {
        $this->nro_modelo=$nro_modelo;
        $this->id_modelo=$id_modelo;
        $this->id_receptor=$id_receptor;


    }

    public function sheets(): array
    {
        $nro_modelo=  $this->nro_modelo;
        $id_modelo=  $this->id_modelo;
        $id_receptor=  $this->id_receptor;

        return [
            0 => new FirstNeuronalesImport($nro_modelo,$id_modelo,$id_receptor),
            1 => new SecondNeuronalesImport($nro_modelo,$id_modelo,$id_receptor),
        ];
    }
}
