<?php

namespace App\Imports;

use App\Imports\Sheets\RegistrosFirstImport;
use App\Imports\Sheets\RegistrosSecondImport;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class Registros2hImport implements WithMultipleSheets
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
            0 => new RegistrosFirstImport($nro_modelo,$id_modelo,$id_receptor),
            1 => new RegistrosSecondImport($nro_modelo,$id_modelo,$id_receptor),
        ];
    }
}
