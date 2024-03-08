<?php

namespace App\Http\Controllers;

use App\Models\rincianRekObject;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class rincianRekObjectController extends Controller
{
    public function dataRincian()
    {
        $rekening = rincianRekObject::all();
        $data = [
            "tittle" => "Rincian Rekening",
            "dataRincian" => $rekening
        ];
        return view('rekening_rincian_object.v_rincianRek', $data);
    }

    public function addRincian()
    {
        return view('rekening_rincian_object.v_addRincianRek');
    }

    public function create(Request $request)
    {
        $messages = [
            'kd_rincianRekening.unique' => 'Kode rekening Sudah Digunakan!!',
            'nm_rincianRekening.unique' => 'Nama rekening sudah Digunakan!!',
        ];
    
        $validateData = $request->validate([
            'kd_rincianRekening' => [
                'string',
                'required',
                Rule::unique('rincian_rek_object', 'kd_rincianRekening')->ignore($request->id),
            ],
            'nm_rincianRekening' => 'string|required|unique:rincian_rek_object',
        ], $messages);
    
        $rekening = RincianRekObject::create($validateData);
        if ($rekening) {
            return redirect()->route('rincianRekening.dataRincian')->with('success', 'Berhasil menambahkan data!');
        } else {
            return redirect()->route('rincianRekening.dataRincian')->with('failed', 'Gagal menambahkan data!');
        }    
    }

    // Rule::unique('rincian_rek_object', 'kd_rincianRekening')->ignore($request->id), rincian_rek_object di bagian ini itu nama table di database nya
}