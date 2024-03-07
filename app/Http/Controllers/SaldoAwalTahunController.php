<?php

namespace App\Http\Controllers;

use App\Models\SaldoAwalTahun;
use App\Models\unit_puskesmas;
use Illuminate\Http\Request;

class SaldoAwalTahunController extends Controller
{
    public function saldoAwal()
    {
        $saldo_awal = SaldoAwalTahun::all();
        $data_saldo = [
            "title" => "Saldo Awal Tahun",
            "dataSaldo" => $saldo_awal
        ];

        return view('saldo_awal_tahun.v_saldoAwalTahun', $data_saldo);
    }

    public function viewSaldo()
    {
        return view('saldo_awal_tahun.v_addSaldoAwal');
    }

    public function addSaldo(Request $request)
    {
        $validateData = $request->validate([
            'tahun_anggaran' => 'string|required',
            'saldo_bank' => 'string|required',
            'saldo_tunai' => 'string|required'
        ]);

        $saldo_awal = SaldoAwalTahun::create($validateData);
        if ($saldo_awal) {
            return redirect()->route('saldoawal.saldoTahunan')->with('success', 'Berhasil menambahkan data!');
        } else {
            return redirect()->route('saldoawal.saldoTahunan')->with('failed', 'Gagal menambahkan data!');
        }
    }
}