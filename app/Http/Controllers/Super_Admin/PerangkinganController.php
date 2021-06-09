<?php

namespace App\Http\Controllers\Super_Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PerangkinganController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function perangkingan()
    {
        return view('superAdmin.perangkingan');
    }
    public  function store()
    {

    }
}
