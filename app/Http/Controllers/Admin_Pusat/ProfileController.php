<?php

namespace App\Http\Controllers\Admin_Pusat;

use App\User;
use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }
    public function profilePusat()
    {
        $user = User::where('merek_id', auth()->user()->id)->first();
        return view('adminPusat.profilePusat', compact( 'user'));
    }
    public function editProfilePusat(User $user)
    {
        return view('adminPusat.editProfilePusat', compact('user'));
    }
    public function updateProfilePusat(Request $request)
    {
        if(strlen($request->name)<=3){
            return redirect()->route('pusat.profile')->withDanger('Username Harus Lebih dari 3 !');
        }
            $user = User::where('id', auth()->user()->id)->first();
        if ($request->gambar) {
            Storage::delete($user->gambar);
            $user->gambar = $request->file('gambar')->store('pusat');
        }
        $user->name = $request->name;
        $user->email = $request->email;
        if (!empty($request['password'])) {
            $user->password = bcrypt($request->password);
        }
//        dd($dealer);
        $user->update();

        return redirect()->route('pusat.profile')->withInfo('Merek berhasil dirubah');
    }
}
