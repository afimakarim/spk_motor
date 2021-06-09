<?php

namespace App\Http\Controllers\Super_Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BobotController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function bobot()
    {
        return view('superAdmin.bobot');
    }
    public  function store()
    {

    }
    public  function editBobot()
    {
        return view('superAdmin.editBobot');
    }
    public function updateBobot()
    {

    }
    public function destroy()
    {

    }
}
