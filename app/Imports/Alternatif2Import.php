<?php

namespace App\Imports;

use App\Alternatif2;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Alternatif2Import implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return Model|Model[]|null
     */
    public function model(array $row)
    {
//        dd($row['nama']);
        return new Alternatif2([
            'alternatif' => $row['nama'],
            'harga' => $row['n_harga'],
            'kapasitas_mesin' => $row['n_kapasitas_mesin'],
            'berat' => $row['n_berat'],
            'kapasitas_tengki' => $row['n_kapasitas_tengki'],
            'kapasitas_bagasi' => $row['n_kapasitas_bagasi'],
        ]);
    }

    public function headingRow(): int
    {
        return 1;
    }
}
