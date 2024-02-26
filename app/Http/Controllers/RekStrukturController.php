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
        return view('rekening_belanja_struktur.v_addRekStruktur');
    }
    // simpan data
    public function createrekening(Request $request)
    {
        $validateData = $request->validate([
            'kd_rekening' => 'string|required',
            'nm_rekening' => 'string|required'
        ]);

        $rekening = RekeningStruktur::create($validateData);
        
        if ($rekening) {
            return redirect()->route('rekstruktur.v_rekstruktur')->with('success', 'Berhasil menambahkan data!');
        } else {
            return redirect()->route('rekstruktur.v_rekstruktur')->with('failed', 'Gagal menambahkan data!');
        }
    }

    // edit
    public function edit(RekeningStruktur $rekening)
    {
        return view('rekening_belanja_struktur.v_editRekStruktur', compact('rekening'));
    }

    public function update(Request $request, RekeningStruktur $rekening)
    {
        $validateData = $request->validate([
            'kd_rekening' => 'string|required',
            'nm_rekening' => 'string|required'
        ]);

        $rekening->update($validateData);
        if($rekening){
            return to_route('rekstruktur.v_rekstruktur')->with('success', 'Berhasil mengubah data!');
        } else {
            return to_route('rekstruktur.v_rekstruktur')->with('failed', 'Gagal mengubah data!');
        }
    }

    public function destroy(RekeningStruktur $rekening)
    {
        $rekening->delete();
        if($rekening){
            return to_route('rekstruktur.v_rekstruktur')->with('success', 'Berhasil menghapus data!');
        } else {
            return to_route('rekstruktur.v_rekstruktur')->with('failed', 'Gagal menghapus data!');
        }
    }

}