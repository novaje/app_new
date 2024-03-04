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
}