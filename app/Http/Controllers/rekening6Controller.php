<?php

namespace App\Http\Controllers;

use App\Models\rekening_6;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class rekening6Controller extends Controller
{
    public function rekening6()
    {
        $rekening = rekening_6::all();
        $data = [
            "tittle" => "Rekening 6",
            "dataRekening" => $rekening
        ];
        return view('rekening_6.v_rekening_6', $data);
    }

    public function addRekening()
    {
        return view('rekening_6.v_addRekening_6');
    }

        public function create(Request $request)
        {
        $messages = [
            'kd_rek_6.unique' => 'Kode Rekening Ini Sudah Digunakan!!',
            'nm_rek_6.unique' => 'Nama Rekening Ini Sudah Digunakan!!',
        ];
        $validateData = $request->validate([
            'kd_rek_6' => [
                'string',
                'required',
                Rule::unique('rekening_6', 'kd_rek_6')->ignore($request->id, 'id'),
            ],
            'nm_rek_6' => 'string|required|unique:rekening_6,nm_rek_6',
        ], $messages);

        $rekening = Rekening_6::create($validateData);

        if ($rekening) {
            return redirect()->route('rek6.rekening6')->with('success', 'Berhasil menambahkan data!');
        } else {
            return redirect()->route('rek6.rekening6')->with('failed', 'Gagal menambahkan data!');
        }
    }
}