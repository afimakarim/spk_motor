<?php

namespace App\Http\Controllers\Super_Admin;

use App\Nilai;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NilaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function nilai()
    {
        $nilais = Nilai::all();
        return view('superAdmin.nilai', compact('nilais'));
    }
    public  function store(Request $request)
    {
        $nilai = new Nilai();
        $nilai->nama_nilai = $request->nama_nilai;
        $nilai->nilai = $request->nilai;
        $nilai->save();

        return redirect()->route('admin.nilai')->withInfo('Merek Ditambahkan');
    }
    public  function editNilai(Nilai $nilai)
    {
        return view('superAdmin.editNilai' , compact('nilai'));
    }
    public function updateNilai(Request $request, Nilai $nilai)
    {
        $nilai->nama_nilai = $request->nama_nilai;
        $nilai->nilai = $request->nilai;
        $nilai->update();

        return redirect()->route('admin.nilai')->withInfo('Merek berhasil dirubah');
    }
    public function destroy(Nilai $nilai)
    {
        $nilai->delete();
        return redirect()->route('admin.nilai')->withDanger('Merek berhasil dihapus');
    }
}
