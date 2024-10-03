<?php

namespace App\Imports;

use App\Models\Mapacalor;
use App\Imports\Sheets\MapsFirstImport;
use App\Imports\Sheets\MapsSecondImport;
use App\Imports\Sheets\MapsThirdImport;
use App\Imports\Sheets\MapsFourthImport;
use App\Imports\Sheets\MapsFifthImport;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class MapacalorImport implements WithMultipleSheets 
{
    public function  __construct($nro_modelo,$id_modelo,$id_sector)
    {
        $this->nro_modelo=$nro_modelo;
        $this->id_modelo=$id_modelo;
        $this->id_sector=$id_sector;
    }

    public function sheets(): array
    {
        $nro_modelo=  $this->nro_modelo;
        $id_modelo=  $this->id_modelo;
        $id_sector=  $this->id_sector;

        return [
            0 => new MapsFirstImport($nro_modelo,$id_modelo,$id_sector),
            1 => new MapsSecondImport($nro_modelo,$id_modelo,$id_sector),
            2 => new MapsThirdImport($nro_modelo,$id_modelo,$id_sector),
            3 => new MapsFourthImport($nro_modelo,$id_modelo,$id_sector),
            4 => new MapsFifthImport($nro_modelo,$id_modelo,$id_sector),
        ];       
    }
}
