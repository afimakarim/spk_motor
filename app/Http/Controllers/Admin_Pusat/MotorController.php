<?php

namespace App\Http\Controllers\Admin_Pusat;

use App\Jenis;
use App\Motor;
use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MotorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }
    public function dataMotor()
    {
        $motors = Motor::where('merek_id', auth()->user()->merek_id)->get();
        $jenis = Jenis::all();
        return view('adminPusat.dataMotor', compact(['motors', 'jenis']));
    }

    public function store(Request $request)
    {
        $motor = new Motor();
        $motor->gambar = $request->file('gambar')->store('motor');
        $motor->jenis_id = $request->jenis_motor;
        $motor->tipe_motor = $request->tipe_motor;
        $motor->harga_motor = $request->harga_motor;
        $motor->warna = $request->warna;
        $motor->ban_depan = $request->ban_depan;
        $motor->ban_belakang = $request->ban_belakang;
        $motor->jenis_ban = $request->jenis_ban;
        $motor->kapasitas_mesin = $request->kapasitas_mesin;
        $motor->kapasitas_tengki = $request->kapasitas_tengki;
        $motor->kapasitas_bagasi = $request->kapasitas_bagasi;
        $motor->berat = $request->berat;
        $motor->tenaga_maksimal = $request->tenaga_maksimal;
        $motor->jenis_transmisi = $request->jenis_transmisi;
        $motor->merek_id = auth()->user()->merek_id;
        $motor->save();

        return redirect()->route('pusat.motor')->withInfo('Motor Ditambahkan');
    }

    public function editDataMotor(Motor $motor)
    {
        $jenis = Jenis::all();
        return view('adminPusat.editDataMotor', compact('motor', 'jenis'));
    }
    public function updateDataMotor(Request $request, Motor $motor)
    {
        if ($request['gambar']) {
            Storage::delete($motor['gambar']);
            $motor->gambar = $request->file('gambar')->store('motor');
        }
        $motor->jenis_id = $request->jenis_motor;
        $motor->tipe_motor = $request->tipe_motor;
        $motor->harga_motor = $request->harga_motor;
        $motor->warna = $request->warna;
        $motor->ban_depan = $request->ban_depan;
        $motor->ban_belakang = $request->ban_belakang;
        $motor->jenis_ban = $request->jenis_ban;
        $motor->kapasitas_mesin = $request->kapasitas_mesin;
        $motor->kapasitas_tengki = $request->kapasitas_tengki;
        $motor->kapasitas_bagasi = $request->kapasitas_bagasi;
        $motor->berat = $request->berat;
        $motor->tenaga_maksimal = $request->tenaga_maksimal;
        $motor->jenis_transmisi = $request->jenis_transmisi;
        $motor->merek_id = auth()->user()->merek_id;
        $motor->update();
        return redirect()->route('pusat.motor')->withInfo('Motor berhasil dirubah');
    }
    public function destroy(Motor $motor)
    {
        $motor->delete();
        return redirect()->route('pusat.motor')->withDanger('Motor berhasil dihapus');
    }
}
