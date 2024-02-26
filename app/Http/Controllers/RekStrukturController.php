<?php

namespace App\Http\Controllers;

use App\Models\RekeningStruktur;
use Illuminate\Http\Request;

class RekStrukturController extends Controller
{
    public function rekeningStruktur()
    {
        $rekening = RekeningStruktur::all();
        $data = [
            "tittle" => "Rekening Struktur",
            "dataRekening" => $rekening
        ];  
        return view('rekening_belanja_struktur.v_rek_struktur', $data);
    }

    // tambah rekening
    public function create()
    {
        return view();
    }
}