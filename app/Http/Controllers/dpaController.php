<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\dpa;
use App\Models\dt_dpa;

class dpaController extends Controller
{
    public function dpa()
    {
        $dp = dt_dpa::all();
        $data = [
            "tittle" => "Data DPA",
            "dataDpa" => $dp
        ];
        return view('data_dpa.v_data_dpa', $data);
    }

    public function create()
    {
        return view('data_dpa.v_createdpa');
    }

    public function createdpa(Request $request)
    {
        $validateData = $request->validate([
            'program' => 'string|required',
            'kegiatan' => 'string|required',
            'no_dppa' => 'string|required',
            'no_dpa' => 'string|required',
            'tgl_dppa' => 'date|required',
            'tgl_dpa' => 'date|required',
            'tahun' => 'digits:4|required'
        ]);

        $dpa = dt_dpa::create($validateData);
        
        if($dpa){
            return to_route('dpa.v_data_dpa')->with('success', 'Berhasil Menambah Data Program');
        } else {
            return to_route('dpa.v_data_dpa')->with('failed', 'Gagal Menambah Data Program');
        }
    }

    public function edit(dt_dpa $dpa)
    {
        return view('data_dpa.v_data_dpa', compact('dpa'));
    }
    public function update(Request $request, dt_dpa $dpa)
    {
        $validateData = $request->validate([
            'program' => 'string|required',
            'kegiatan' => 'string|required',
            'no_dppa' => 'string|required',
            'no_dpa' => 'string|required',
            'tgl_dppa' => 'date|required',
            'tgl_dpa' => 'date|required',
            'tahun' => 'digits:4|required'
        ]);
        $dpa->update($validateData);

        if($dpa){
            return to_route('dpa.v_data_dpa')->with('success', 'Berhasil Edit Data Program');
        } else {
            return to_route('dpa.v_data_dpa')->with('failed', 'Gagal Hapus Data Program');
        }
    }

}
