<?php

namespace App\Http\Controllers;

use App\Models\RekeningKelompok;
use Illuminate\Http\Request;

class RekKelompokController extends Controller
{
    public function datarekening()
    {
        $rekening = RekeningKelompok::all();
        $data = [
            "tittle" => "Rekening Kelompok",
            "dataKelompok" => $rekening
        ];
        return view('rekening_kelompok.v_rekKelompok', $data);
    }

    // tambah
    public function addRekening()
    {
        return view('rekening_kelompok.v_addRekKelompok');
    }
    public function createrekening(Request $request)
    {
        $validateData = $request->validate([
            'kd_rekening_1' => 'string|required',
            'kd_rekening_2' => 'string|required',
            'nm_rekening' => 'string|required'
        ]);

        $rekening = RekeningKelompok::addRekening($validateData);
        if ($rekening) {
            return redirect()->route('rekkelompok.datarekening')->with('success', 'Berhasil menambahkan data!');
        } else {
            return redirect()->route('rekkelompok.datarekening')->with('failed', 'Gagal menambahkan data!');
        }
    }

    // edit
    public function edit(RekeningKelompok $rekening)
    {
        return view('rekening_kelompok.v_editRekKelompok', compact('rekening'));
    }

    public function update(Request $request, RekeningKelompok $rekening)
    {
        $validateData = $request->validate([
            'kd_rekening_1' => 'string|required',
            'kd_rekening_2' => 'string|required',
            'nm_rekening' => 'string|required'
        ]);

        $rekening->update($validateData);
        if ($rekening) {
            return redirect()->route('rekkelompok.datarekening')->with('success', 'Berhasil menambahkan data!');
        } else {
            return redirect()->route('rekkelompok.datarekening')->with('failed', 'Gagal menambahkan data!');
        }
    }

    // del
    public function destroy(RekeningKelompok $rekening)
    {
    $rekening->delete();
        if ($rekening) {
            return redirect()->route('rekkelompok.datarekening')->with('success', 'Berhasil menambahkan data!');
        } else {
            return redirect()->route('rekkelompok.datarekening')->with('failed', 'Gagal menambahkan data!');
        }
    }
}