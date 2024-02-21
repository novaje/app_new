<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class anggaranController extends Controller
{
    public function anggaran()
    {
        return view('anggaran.v_anggaran');
    }
}
