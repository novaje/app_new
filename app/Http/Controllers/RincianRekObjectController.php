<?php

namespace App\Http\Controllers;

use App\Models\RincianRekObject;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RincianRekObjectController extends Controller
{
    public function rincianRekening()
    {
        $rekening = RincianRekObject::all();
        $data = [
            "tittle" => "Rincian Rekening Object",
            "dataRincianObject" => $rekening
        ];
        return view('rekening_rincian_object.v_rincianRek', $data);
    }

    public function addRincianRekening()
    {
        return view('rekening_rincian_object.v_addRincianRek');
    }

    public function saveRincian(Request $request)
    {
        $messages = [
            'kd_rek_object.unique' => 'Kode rekening sudah digunakan.',
            'nm_rekning.unique' => 'Nama rekening sudah digunakan.',
        ];

        $validateData = $request->validate([
        'kd_rek_object' => [
            'string',
            'required',
            Rule::unique('RincianRekObject', 'kd_rek_object')->ignore($request->id),
        ],
        'nm_rekning' => [
            'string',
            'required',
            Rule::unique('RincianRekObject', 'nm_rekning')->ignore($request->id),
        ],
    ], $messages);

        $rekening = RincianRekObject::create($validateData);
        if ($rekening) {
            return redirect()->route('RincianRekening.rincianRekening')->with('success', 'Berhasil menambahkan data!');
        } else {
            return redirect()->route('RincianRekening.rincianRekening')->with('failed', 'Gagal menambahkan data!');
        }
    }
}
