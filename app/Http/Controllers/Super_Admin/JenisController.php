<?php

namespace App\Http\Controllers\Super_Admin;

use App\Jenis;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JenisController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function jenis()
    {
        $jenis = Jenis::all();
        return view('superAdmin.jenisMotor', compact('jenis'));
    }
    public function store(Request $request)
    {
        $jenis = new Jenis();
        $jenis->name = $request->name;
        $jenis->save();

        return redirect()->route('admin.jenis')->withInfo('Merek Ditambahkan');
    }
    public function editJenis(Jenis $jenis)
    {
        return view('superAdmin.editJenisMotor', compact('jenis'));
    }
    public function updateJenis(Request $request, Jenis $jenis)
    {
        $jenis->name = $request->name;
        $jenis->update();

        return redirect()->route('admin.jenis')->withInfo('Merek berhasil dirubah');
    }
    public function destroy(Jenis $jenis)
    {
        $jenis->delete();
        return redirect()->route('admin.jenis')->withDanger('Merek berhasil dihapus');
    }
}
