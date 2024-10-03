<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use App\Imports\Sheets\NumericosFirstImport;
use App\Imports\Sheets\NumericosSecondImport;
use App\Imports\Sheets\NumericosThirdImport;
use App\Imports\Sheets\NumericosFourthImport;
use App\Imports\Sheets\NumericosFifthImport;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;


class Numericos5hImport implements WithMultipleSheets
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
            0 => new NumericosFirstImport($nro_modelo,$id_modelo,$id_receptor),
            1 => new NumericosSecondImport($nro_modelo,$id_modelo,$id_receptor),
            2 => new NumericosFifthImport($nro_modelo,$id_modelo,$id_receptor),
            3 => new NumericosThirdImport($nro_modelo,$id_modelo,$id_receptor),
            4 => new NumericosFourthImport($nro_modelo,$id_modelo,$id_receptor),
        ];
    }
}
