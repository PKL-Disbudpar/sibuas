<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\MasterPegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Console\View\Components\Alert;

use function Laravel\Prompts\alert;

class FormPegawaiController extends Controller
{
    // menampilkan semua data
    public function index()
    {
        $pegawais = MasterPegawai::all();

        return view('form-spt');
    }

    public function create()
    {
        return view('Forms.form-masterPegawai');
    }

    // menyimpan data
    public function store(Request $request, MasterPegawai $pegawai)
    {
        $request->validate([
            'nip_pegawai' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'golongan' => 'required|string|max:255',
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

    // menampilkan data dari id
    public function show($id)
    {
        $pegawai = MasterPegawai::find($id);

        if (is_null($pegawai)) {
            return response()->json([
                'message' => 'Pegawai Not Found'
            ], 404);
        }

        return response()->json([
            'message' => 'Success Get Data Pegawai by ID',
            'data' => $pegawai
        ], 200);
    }

    // hapus data dari id
    public function destroy($id)
    {
        $pegawai = MasterPegawai::find($id);

        if (is_null($pegawai)) {
            return response()->json([
                'message' => 'Pegawai Not Found'
            ], 404);
        }

        $pegawai->delete();

        return response()->json([
            'message' => 'Pegawai Deleted Successfully'
        ], 200);
    }
}
