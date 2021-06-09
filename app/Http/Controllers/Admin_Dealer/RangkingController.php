<?php

namespace App\Http\Controllers\Admin_Dealer;

use App\Alternatif;
use App\Kriteria;
use App\Motor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RangkingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:dealer');
    }
    public function rangking()
    {
        $kriterias = Kriteria::all();
        $alternatifs = Alternatif::where('dealer_id', auth()->user()->id)->get();
        $motors = Motor::all();
        return view('adminDealer.rangking', compact(['motors', 'kriterias', 'alternatifs']));
    }
    public  function store(Request $request)
    {
        foreach ($request->tipe_motor as $tipe) {
            $alternatif = new Alternatif();
            $alternatif->motor_id = $tipe;
            $alternatif->nilai = $request->nilai;
            $alternatif->kriteria_id = $request->kriteria_id;
            $alternatif->dealer_id = auth()->user()->id;
            $alternatif->save();
        }
        return redirect()->route('dealer.rangking')->withInfo('Merek Ditambahkan');
    }
    public  function editRangking(Alternatif $alternatif)
    {
        $motors = Motor::all();
        $kriterias = Kriteria::all();
        return view('adminDealer.editRangking', compact('motors', 'kriterias', 'alternatif'));
    }
    public function updateRangking(Request $request, Alternatif $alternatif)
    {
        $alternatif->motor_id = $request->tipe_motor;
        $alternatif->nilai = $request->nilai;
        $alternatif->kriteria_id = $request->kriteria;
        $alternatif->save();
    }
    public function destroy(Alternatif $alternatif)
    {
        $alternatif->delete();
        return redirect()->route('dealer.rangking')->withDanger('Merek berhasil dihapus');
    }
}
