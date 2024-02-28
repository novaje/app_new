<?php

namespace App\Http\Controllers;

use App\Models\RekeningObject;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RekObjectController extends Controller
{
    public function rekeningObject()
    {
        $rekening = rekeningObject::all();
        $data = [
            "tittle" => "Rekening Struktur",
            "dataRekening" => $rekening
        ];  
        return view('rekening_object.v_rekObject', $data);
    }

    // tambah
    public function create()
    {
        return view('rekening_object.v_addRekObject');   
    }

    public function saveRekening(Request $request)
    {
        $messages = [
            'kd_rekening.unique' => 'Kode rekening sudah digunakan.',
            'nm_rekening.unique' => 'Nama rekening sudah digunakan.',
        ];

        $validateData = $request->validate([
        'kd_rekening' => [
            'string',
            'required',
            Rule::unique('rekening_objects', 'kd_rekening')->ignore($request->id),
        ],
        'nm_rekening' => 'string|required|unique:rekening_objects',
    ], $messages);

        $rekening = RekeningObject::create($validateData);
        if ($rekening) {
            return redirect()->route('rekobject.rekeningObject')->with('success', 'Berhasil menambahkan data!');
        } else {
            return redirect()->route('rekobject.rekeningObject')->with('failed', 'Gagal menambahkan data!');
        }
    }
}
