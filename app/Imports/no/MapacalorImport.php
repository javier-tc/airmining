<?php

namespace App\Imports;

use App\Models\Mapacalor;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class MapacalorImport implements WithMultipleSheets 
{
    public function  __construct($id_modelo,$receptor)
    {
        $this->id_modelo=$id_modelo;
        $this->receptor=$receptor;

    }

    public function sheets(): array
    {
        return [
            0 => new FirstSheetImport(),
            1 => new SecondSheetImport(),
        ];
    }




    public function model(array $row)
    {
        return new Mapacalor([
            //
        ]);
    }
}
