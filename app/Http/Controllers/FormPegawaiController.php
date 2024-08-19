<?php

namespace App\Http\Controllers;

use App\Models\MasterPegawai;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormPegawaiController extends Controller
{
    // menampilkan semua data
    public function index()
    {
        $master_pegawais = MasterPegawai::all();
        return view('Super-Admin.admin-masterPegawai', compact('master_pegawais'));
    }

    public function create()
    {
        return view('Forms.form-masterPegawai');
    }

    // menyimpan data
    public function store(Request $request, MasterPegawai $pegawai)
    {
        $request->validate([
            'nip_pegawai' => 'required|string',
            'nama' => 'required|string',
            'jabatan' => 'required|string',
            'golongan' => 'required|string',
        ]);

        try {
            DB::beginTransaction();
            $pegawai->nip_pegawai = $request->nip_pegawai;
            $pegawai->nama = $request->nama;
            $pegawai->jabatan = $request->jabatan;
            $pegawai->golongan = $request->golongan;
            $pegawai->save();
            DB::commit();

            if ($pegawai->save()) {
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
