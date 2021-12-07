<?php

namespace App\Exports;

use App\Models\Surat;


use App\Models\SuratModel;
use Maatwebsite\Excel\Concerns\FromCollection;

class SuratExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return SuratModel::all();
    }
}
