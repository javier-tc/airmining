<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use App\Imports\Sheets\RegistrosFirstImport;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class CodelcoImport implements WithMultipleSheets
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
            0 => new RegistrosFirstImport($nro_modelo,$id_modelo,15),
            1 => new RegistrosFirstImport($nro_modelo,$id_modelo,16),
            2 => new RegistrosFirstImport($nro_modelo,$id_modelo,17),
            3 => new RegistrosFirstImport($nro_modelo,$id_modelo,18),
            4 => new RegistrosFirstImport($nro_modelo,$id_modelo,19),
        ];
    }
}
