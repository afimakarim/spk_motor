<?php

namespace App\Http\Controllers\Admin_Dealer;

use App\Dealer;
use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:dealer');
    }

    public function profileDealer()
    {
        $dealer = Dealer::where('user_id', auth()->user()->id)->first();
        return view('adminDealer.profileDealer', compact( 'dealer'));
    }
    public function editProfileDealer(Dealer $dealer)
    {
        return view('adminDealer.editProfileDealer', compact('dealer'));
    }
    public function updateProfileDealer(Request $request)
    {
        if(strlen($request->telephone)>13){
            return redirect()->route('dealer.profile')->withDanger('Nomor Telephone Tidak Lebih Lebih dari 13 !');
        }
        if(strlen($request->name)<=3){
            return redirect()->route('dealer.profile')->withDanger('Username Harus Lebih dari 3 !');
        }
        if(strlen($request->alamat)<=10){
            return redirect()->route('dealer.profile')->withDanger('Alamat Harus Lebih dari 10 Karakter !');
        }
        if(strlen($request->ket_dealer)<=10){
            return redirect()->route('dealer.profile')->withDanger('Keterangan Harus Lebih dari 10 Karakter !');
        }

        $dealer = Dealer::where('id', auth()->user()->id)->first();
        if ($request->gambar) {
            Storage::delete($dealer->gambar);
            $dealer->gambar = $request->file('gambar')->store('dealer');
        }
        $dealer->name = $request->name;
        $dealer->email = $request->email;
        if (!empty($request['password'])) {
            $dealer->password = bcrypt($request->password);
        }
        $dealer->telephone = $request->telephone;
        $dealer->jam_buka = $request->jam_buka;
        $dealer->alamat = $request->alamat;
        $dealer->ket_dealer = $request->ket_dealer;
//        dd($dealer);
        $dealer->update();

        return redirect()->route('dealer.profile')->withInfo('Merek berhasil dirubah');
    }
}
