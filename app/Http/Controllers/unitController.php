<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;

use App\Models\unit_puskesmas;

class unitController extends Controller
{
    // tampilkan unit
    public function unit()
    {
        $unit = unit_puskesmas::all();
        $data = [
            "tittle" => "Data Unit Puskesmas",
            "dataUnit" => $unit
        ];
        return view('unit_puskesmas.v_unit', $data);
    }

    // tambh unit
    public function create()
    {
        return view('unit_puskesmas.v_createunit');
    }

    public function createunit(Request $request)
    {
        $validateData = $request->validate([
            'nama_puskesmas' => 'string|required',
            'status' => 'string|required',
            'alamat' => 'string|required',
            'pimpinan' => 'string|required'
        ]);

        $unit = unit_puskesmas::create($validateData);

        if($unit){
            return to_route('unit_puskesmas.v_unit')->with('success', 'Berhasil Menambah Unit');
        } else {
            return to_route('unit_puskesmas.v_unit')->with('failed', 'Gagal Menambah Unit');
        }
    }

    // edit unit
    public function edit(unit_puskesmas $unit)
    {
        // dd($unit);
        return view('unit_puskesmas.v_editunit', compact('unit'));
    }

    public function update(Request $request, unit_puskesmas $unit)
    {
        $validateData = $request->validate([
            'nama_puskesmas' => 'string|required',
            'status' => 'string|required',
            'alamat' => 'string|required',
            'pimpinan' => 'string|required'
        ]);

        $unit->update($validateData);

        if($unit){
            return to_route('unit_puskesmas.v_unit')->with('success', 'Berhasil Update Unit');
        } else {
            return to_route('unit_puskesmas.v_unit')->with('failed', 'Gagal Update Unit');
        }
    }

    // delete
    public function destroy(unit_puskesmas $unit)
    {
        $unit->delete();
        if($unit){
            return to_route('unit_puskesmas.v_unit')->with('success', 'Berhasil Delete Unit');
        } else {
            return to_route('unit_puskesmas.v_unit')->with('failed', 'Gagal Delete Unit');
        }
    }
}
