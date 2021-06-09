<?php

namespace App\Http\Controllers\Super_Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlternatifController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function alternatif()
    {
        return view('superAdmin.alternatif');
    }
    public  function store()
    {

    }
}
