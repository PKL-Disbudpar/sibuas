<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FormPenggunaController extends Controller
{
    // menampilkan semua data
    public function index()
    {
        $penggunas = Pengguna::all();
        return view('Super-Admin.admin-pengguna', compact('penggunas'));
    }

    public function create()
    {
        return view('Forms.form-pengguna');
    }

    // menyimpan data
    public function store(Request $request, Pengguna $pengguna)
    {
        $request->validate([
            'username' => 'required|string|max:30',
            'password' => 'required|string|max:6',
        ]);

        try {
            DB::beginTransaction();
            $pengguna->username = $request->username;
            $pengguna->password = $request->password;
            $pengguna->id_role = 1;
            $pengguna->id_bidang = 1;
            $pengguna->save();
            DB::commit();

            if ($pengguna->save()) {
                echo ("Data berhasil dimasukkan");
            } else {
                echo "gagal";
            }
        } catch (Exception $e) {
            DB::rollBack();
            echo "Gagal nih";
        }
    }
}
