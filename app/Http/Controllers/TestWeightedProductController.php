<?php

namespace App\Http\Controllers;

use App\Alternatif2;
use Illuminate\Http\Request;
use function foo\func;

class TestWeightedProductController extends Controller
{
    public function index()
    {
        return view('test-spk');
    }

    public function store(Request $request)
    {
//        dd($request->all());
        // jumlah angka dibelakang koma
        $digit_decimal = 18;

        // ambil semua alternatif dalam database
        $datasets = Alternatif2::all();

        // ambil semua inputan yang dikirim oleh pengguna
        $inputs = (array)[];
        foreach ($request->all() as $key => $item) {
            if ($key != '_token') {
                $inputs[$key] = (int)$item;
            }
        }

        // ambil semua inputan yang dikirim pengguna tapi tidak mengirim key
        $data = (array)[];
        foreach ($request->all() as $key => $item) {
            if ($key != '_token') {
                $data[] = (int)$item;
            }
        }

        // hasil inputan yang sudah dihitung berdasarkan inputan lain
        $weight = (array)[];

        foreach ($data as $key => $item) {
            if ($key == 0) {
                // set kriteria harga menjadi minus
                $weight[] = (float)-number_format($item / (array_sum($data)), $digit_decimal);
            } else {
                $weight[] = (float)number_format($item / (array_sum($data)), $digit_decimal);
            }
        }

        // mengeset alternatif menjadi data yang diinginkan
        $alternatives = (array)[];
        foreach ($datasets as $key => $item) {
            $alternatives[$item['alternatif']] = [$item['harga'], $item['kapasitas_mesin'], $item['berat'], $item['kapasitas_tengki'], $item['kapasitas_bagasi']];
        }

        //
        $func = function ($a, $w) {
            return pow($a, $w);
        };

        //
        $vector_s = (array)[];
        foreach ($alternatives as $key => $item) {
            $vector_s[$key] = (float)number_format(array_product(array_map($func, $item, $weight)), $digit_decimal);
        }

        $vector_v = (array)[];
        foreach ($vector_s as $key => $item) {
            $vector_v[$key] = (float)number_format($item / (array_sum($vector_s)), $digit_decimal);
        }

        arsort($vector_v);
        $recomended = array_slice($vector_v, 0, 10);

        dd($inputs, $data,$alternatives, $weight, $vector_s, $vector_v, $recomended);
//        dd(sort($vector_v));

//        dd($weight, array_sum($vector_v), $vector_s, $vector_v, $alternatives);
    }
}
