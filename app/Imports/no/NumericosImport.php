<?php

namespace App\Imports;

use App\Models\Numericos;
use App\Imports\Sheets\FirstNumericosImport;
use App\Imports\Sheets\SecondNumericosImport;
use App\Imports\Sheets\ThirdNumericosImport;
use App\Imports\Sheets\FourthNumericosImport;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class NumericosImport implements WithMultipleSheets 
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
            0 => new FirstNumericosImport($nro_modelo,$id_modelo,$id_receptor),
            1 => new SecondNumericosImport($nro_modelo,$id_modelo,$id_receptor),
            2 => new ThirdNumericosImport($nro_modelo,$id_modelo,$id_receptor),
            3 => new FourthNumericosImport($nro_modelo,$id_modelo,$id_receptor),
        ];
    }
}
