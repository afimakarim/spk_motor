<?php

use Illuminate\Database\Seeder;

class Alternatif2TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Alternatif2::create([
            'alternatif' => "A1",
            'harga' => "3",
            'teknologi_motor' => "5",
            'kapasitas_mesin' => "2",
            'desain_motor' => "4"
        ]);
        \App\Alternatif2::create([
            'alternatif' => "A2",
            'harga' => "5",
            'teknologi_motor' => "4",
            'kapasitas_mesin' => "4",
            'desain_motor' => "3"
        ]);
        \App\Alternatif2::create([
            'alternatif' => "A3",
            'harga' => "3",
            'teknologi_motor' => "3",
            'kapasitas_mesin' => "2",
            'desain_motor' => "4"
        ]);
        \App\Alternatif2::create([
            'alternatif' => "A4",
            'harga' => "3",
            'teknologi_motor' => "5",
            'kapasitas_mesin' => "2",
            'desain_motor' => "2"
        ]);
        \App\Alternatif2::create([
            'alternatif' => "A5",
            'harga' => "2",
            'teknologi_motor' => "3",
            'kapasitas_mesin' => "2",
            'desain_motor' => "2"
        ]);
        \App\Alternatif2::create([
            'alternatif' => "A6",
            'harga' => "1",
            'teknologi_motor' => "3",
            'kapasitas_mesin' => "2",
            'desain_motor' => "1"
        ]);
        \App\Alternatif2::create([
            'alternatif' => "A7",
            'harga' => "3",
            'teknologi_motor' => "3",
            'kapasitas_mesin' => "2",
            'desain_motor' => "1"
        ]);
        \App\Alternatif2::create([
            'alternatif' => "A8",
            'harga' => "5",
            'teknologi_motor' => "1",
            'kapasitas_mesin' => "4",
            'desain_motor' => "2"
        ]);
    }
}
