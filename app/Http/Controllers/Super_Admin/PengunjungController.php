<?php

namespace App\Http\Controllers\Super_Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PengunjungController extends Controller
{

    public function pengunjung()
    {
        return view('superAdmin.pengunjung');
    }
    public  function store()
    {

    }
}
