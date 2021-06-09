<?php

namespace App\Http\Controllers;

use App\Komentar;
use App\Promo;
use App\User;
use Illuminate\Http\Request;
use Session;
use App\Dealer;
use App\Merek;
use App\Motor;

class UserController extends Controller
{
    public function index()
    {
        $mereks = Merek::all();
        return view('welcome', compact('mereks'));
    }
    public function cariMotor()
    {
        $dealers = Dealer::all();
        $mereks = Merek::orderBy('name', 'ASC')->get();
        return view('user.cariMotor', compact('mereks', 'dealers'));
    }

    public function merekMotor($id){
        $motors = Motor::where('merek_id', $id)->get(['id','tipe_motor']);
        return $motors;
    }





    //////
    public function detailMotor(Request $request)
    {
        $motor = Motor::where('id', $request->motor)->first();
        $promos = Promo::where('motor_id', $motor->id)->get();
        return view('user.detailMotor', compact('motor','promos'));
    }
    public function detailMotor2(Motor $motor)
    {
//        $motor = Motor::where('id', $request->motor)->first();
        $promos = Promo::where('motor_id', $motor->id)->get();
        return view('user.detailMotor2', compact('motor','promos'));
    }

    public function anggaranMotor(Request $request)
    {
        $harga = $request->anggaran;
        if ($request->anggaran == 1) {
            $motors = Motor::where('harga_motor', '<=', 20000000)->get();
        } elseif ($request->anggaran == 2) {
            $motors = Motor::where('harga_motor', '>', 20000000)->where('harga_motor', '<=', 25000000)->get();
        } elseif ($request->anggaran == 3) {
            $motors = Motor::where('harga_motor', '>', 25000000)->where('harga_motor', '<=', 30000000)->get();
        } elseif ($request->anggaran == 4) {
            $motors = Motor::where('harga_motor', '>', 30000000)->get();
        }
//        dd($motors);
        return view('user.anggaranMotor', compact('motors', 'harga'));
    }




    public function dealerMotor(Request $request)
    {
//        $user = User::where('id', $request->user)->first();
//        $dealers = Dealer::where('user_id', $user->id)->get();
//        $dealers = Dealer::with(['user' => function($query) {
//            $query->groupBy('id');
//        }])->get();
        $mereks = Merek::all();
        $dealers = Dealer::all()->groupBy('user.merek.id');

        $data = (array)[];

        foreach ($dealers as $key => $dealer) {
            $merek = Merek::where('id', $key)->first();
            $data[$merek->name] = $dealer;
        }
//
//        return response()->json($data);
        return view('user.dealerMotor', compact(['data','mereks']));
    }
    public function detailDealer(Dealer $dealer)
    {
        $promos = Promo::where('dealer_id', $dealer->id)->get();
        return view('User.detailDealer', compact(['dealer', 'promos']));
    }

    public function detailPromo(Promo $promo, Dealer $dealer)
    {
        $promos = Promo::where('dealer_id', $dealer->id)->get();
        $komentars = Komentar::where('id_promo', $promo->id)->orderBy('created_at', 'DESC')->get();
        return view('user.detailPromo', compact(['promo', 'promos', 'komentars']));
    }


    public function infoSPK()
    {
        return view('user.infoSPK');
    }
    public function spk()
    {
        return view('user.spk');
    }
    public function spk2()
    {
        return view('user.spk2');
    }

    public function hasilSPK()
    {
        return view('user.hasilSPK');
    }

    public function komentar(Request $request, Promo $promo)
    {
//        dd($request->all(), $promo);
        $komentar = new Komentar();
        $komentar->id_promo = $promo->id;
        $komentar->email = $request->email;
        $komentar->nama = $request->name;
        $komentar->komentar = $request->comment;
//        dd($komentar);
        $komentar->save();
        return redirect()->back();
    }
}
