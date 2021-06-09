<?php

namespace App\Http\Controllers\Super_Admin;

use App\Kriteria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KriteriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function kriteria()
    {
        $kriterias = Kriteria::all();
        return view('superAdmin.kriteria', compact('kriterias'));
    }
    public  function store(Request $request)
    {
        $kriteria = new Kriteria();
        $kriteria->nama_kriteria = $request->nama_kriteria;
        $kriteria->tipe_kriteria = $request->tipe_kriteria;
        $kriteria->save();

        return redirect()->route('admin.kriteria')->withInfo('Kriteria Ditambahkan');
    }
    public  function editKriteria(Kriteria $kriteria)
    {
        return view('superAdmin.editKriteria' , compact('kriteria'));
    }
    public function updateKriteria(Request $request, Kriteria $kriteria)
    {
        $kriteria->nama_kriteria = $request->nama_kriteria;
        $kriteria->tipe_kriteria = $request->tipe_kriteria;
        $kriteria->update();

        return redirect()->route('admin.kriteria')->withInfo('Kriteria berhasil dirubah');
    }
    public function destroy(Kriteria $kriteria)
    {
        $kriteria->delete();
        return redirect()->route('admin.kriteria')->withDanger('Kriteria berhasil dihapus');
    }
}
