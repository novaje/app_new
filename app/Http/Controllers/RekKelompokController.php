<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekKelompokController extends Controller
{
    public function rekKelompok()
    {
        return view('rekening_kelompok.v_rekeningKelompok');
    }
}
