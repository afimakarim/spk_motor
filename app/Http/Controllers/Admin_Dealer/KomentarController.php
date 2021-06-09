<?php

namespace App\Http\Controllers\Admin_Dealer;

use App\Komentar;
use App\Promo;
use Carbon\Carbon;
use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KomentarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:dealer');
    }

    public function komentar()
    {
        $promos = Promo::where('dealer_id', auth()->user()->id)->whereHas('komentar', function ($query) {
            $query->orderBy('created_at', 'DESC');
        })->get();
        return view('adminDealer.komentar', compact(['promos']));
    }

    public function store()
    {

    }

    public function editKomentar(Promo $promo)
    {
        $komentars = Komentar::where('id_promo', $promo->id)
            ->orderBy('created_at', 'DESC')
            ->get()
            ->groupBy(function ($query) {
                return Carbon::parse($query->created_at)->format('d-m-Y');
            });
//        dd($komentars);
        return view('adminDealer.balasKomentar', compact(['promo', 'komentars']));
    }

    public function updateKomentar(Request $request, Promo $promo)
    {
//        dd($request->all());
        $komentar = new Komentar();
        $komentar->id_promo = $promo->id;
        $komentar->email = auth()->user()->email;
        $komentar->nama = auth()->user()->name;
        $komentar->komentar = $request->message;
        $komentar->is_admin = true;
        $komentar->save();

        return redirect()->back();
    }

    public function destroy(Komentar $komentar)
    {
        $komentar->delete();
        return redirect()->back()->withDanger('Komentar berhasil dihapus');
    }
}
