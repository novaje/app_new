<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\level;


class levelController extends Controller
{
    // tampilkan data level
    public function level()
    {
        $level = Level::all();
        $data = [
            "title" => "Data User",
            "dataLevel" => $level
        ];
        return view('user.v_level_user', $data);
    }

    // tambahkan data level
    public function create()
    {
        return view('user.v_create_level');
    }

    public function createlevel(Request $request)
    {
        $validateData = $request->validate([
            'level' => 'string|required'
        ]);

        $level = Level::create($validateData);

        if ($level) {
            return to_route('user.v_level_user')->with('success', 'Berhasil Menambah Level');
        } else {
            return to_route('user.v_level_user')->with('failed', 'Gagal Tambah Level');
        }
    }

    // edit level
    public function edit(Level $level)
    {
        // $levels = Level::all();
        return view('user.v_editlev', compact('level'));
    }


    public function update(Request $request, Level $level)
    {
        $validateData = $request->validate([
            'level' => 'string|required'
        ]);

        $level->update($validateData);

        if ($level) {
            return to_route('user.v_level_user')->with('success', 'Berhasil Edit Level');
        } else {
            return to_route('user.v_level_user')->with('failed', 'Gagal Edit Level');
        }
    }

    // delete
    public function destroy(Level $level)
    {
        // return $level;
        $level->delete();
        if ($level) {
            return to_route('user.v_level_user')->with('success', 'Berhasil Menghapus Level');
        } else {
            return to_route('user.v_level_user')->with('failed', 'Gagal Hapus Level');
        }
    }
}