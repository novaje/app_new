<?php

namespace App\Http\Controllers;
use App\Models\RekeningJenis;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RekJenisController extends Controller
{
    public function rekening()
    {
        $rekening = RekeningJenis::all();
        $data = [
            "tittle" => "Rekening Jenis",
            "dataRekening" => $rekening
        ];
        return view('rekening_jenis.v_rekJenis', $data);
    }

    public function addRekeningJenis()
    {
        return view('rekening_jenis.v_addRekJenis');
    }

    public function saveRekening(Request $request)
    {
        $messages = [
            'kd_rekening_1.unique' => 'Kode rekening 1 sudah digunakan.',
            'kd_rekening_2.unique' => 'Kode rekening 2 sudah digunakan.',
            'kd_rekening_3.unique' => 'Kode rekening 3 sudah digunakan.',
            'nm_rekening.unique' => 'Nama rekening sudah digunakan.',
        ];
        
        $validateData = $request->validate([
            'kd_rekening_1' => 'string|required|unique:rekening_jenis',
            'kd_rekening_2' => 'string|required|unique:rekening_jenis',
            'kd_rekening_3' => [
                'string',
                'required',
                Rule::unique('rekening_jenis')->where(function ($query) use ($request) {
                    return $query->where('kd_rekening_1', $request->kd_rekening_1)
                        ->where('kd_rekening_2', $request->kd_rekening_2);
                }),
            ],
            'nm_rekening' => 'string|required|unique:rekening_jenis',
        ], $messages);          

        $rekening = RekeningJenis::create($validateData);
        if ($rekening) {
            return redirect()->route('rekjenis.rekening')->with('success', 'Berhasil menambahkan data!');
        } else {
            return redirect()->route('rekjenis.rekening')->with('failed', 'Gagal menambahkan data!');
        }
    }

    public function edit(RekeningJenis $rekening)
    {
        return view('rekening_jenis.v_editRekJenis', compact('rekening'));
    }

    public function update(Request $request, RekeningJenis $rekening)
    {
        $validateData = $request->validate([
            'kd_rekening_1' => 'string|required',
            'kd_rekening_2' => 'string|required',
            'kd_rekening_3' => 'string|required',
            'nm_rekening' => 'string|required'
        ]);

        $rekening->update($validateData);
        if($rekening){
            return to_route('rekjenis.rekening')->with('success', 'Berhasil mengubah data!');
        } else {
            return to_route('rekjenis.rekening')->with('failed', 'Gagal mengubah data!');
        }
    }

    public function destroy(RekeningJenis $rekening)
    {
        $rekening->delete();
        if($rekening){
            return to_route('rekjenis.rekening')->with('success', 'Berhasil menghapus data!');
        } else {
            return to_route('rekjenis.rekening')->with('failed', 'Gagal menghapus data!');
        }
    }
}
