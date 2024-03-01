<?php

namespace App\Http\Controllers;

use App\Models\RekObjectTambah;
use Illuminate\Http\Request;

class RekTambahController extends Controller
{
    public function index()
    {
        $dt_Rekening = RekObjectTambah::paginate(2, ['*'], 'rekening_objects');
        return view('rekening_object.v_rekening_form', compact('dt_Rekening'));
    }

    public function create()
    {
        $dt_Rekening = RekObjectTambah::with('RekObject');
        return view('rekening_object.v_rekening_form');
    }

}
