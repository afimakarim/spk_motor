<?php

namespace App\Http\Controllers\Super_Admin;

use App\Merek;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;

class MerekController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function merek()
    {
        $mereks = Merek::all();
        return view('superAdmin.merek', compact('mereks'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $merek = new Merek();
        $merek->gambar = $request->file('gambar')->store('merk');
        $merek->name = $request->name;
        $merek->save();
//        merek::create([
//            'name' => $request['name'],
//            'gambar' => $request['gambar']
//        ]);
        return redirect()->route('admin.merek')->withInfo('Merek Ditambahkan');
    }

    public function editMerek(Merek $merek)
    {
        return view('superAdmin.editMerek', compact('merek'));
    }

    public function updateMerek(Request $request, Merek $merek)
    {
        if ($request['gambar']) {
            Storage::delete($merek['gambar']);
            $merek->gambar = $request->file('gambar')->store('merk');
        }
//        dd($request);
        $merek->name = $request->name;
        $merek->update();
//        $merek->update([
//            'name' => request('name'),
//            'gambar' => request('gambar')
//        ]);

        return redirect()->route('admin.merek')->withInfo('Merek berhasil dirubah');
    }

    public function destroy(Merek $merek)
    {
        $merek->delete();
        return redirect()->route('admin.merek')->withDanger('Merek berhasil dihapus');
    }
}
