<?php

namespace App\Imports;

use App\Imports\Sheets\NumericosFirstImport;
use App\Imports\Sheets\NumericosSecondImport;
use App\Imports\Sheets\NumericosThirdImport;
use App\Imports\Sheets\NumericosFourthImport;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class Numericos2hImport implements WithMultipleSheets
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
            0 => new NumericosThirdImport($nro_modelo,$id_modelo,$id_receptor),
            1 => new NumericosFourthImport($nro_modelo,$id_modelo,$id_receptor)
        ];
    }
}
