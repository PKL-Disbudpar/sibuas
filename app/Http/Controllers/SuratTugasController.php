<?php

namespace App\Http\Controllers;

use App\Models\SuratTugas;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\MasterPegawai;
use Illuminate\Console\View\Components\Alert;

class SuratTugasController extends Controller
{
    public function index()
    {
        $data = MasterPegawai::all();

        return view('form-spt', compact('data'));
    }

    public function store(Request $request, SuratTugas $surattugas)
    {
        $request->validate([
            'tujuan_spt' => 'required|string',
            'tgl_spt' => 'required|date',
            'nama_spt' => 'required|string|max:255',
            'ttd' => 'required|string',
        ]);



        try {
            DB::beginTransaction();
            $surattugas->nip_pegawai = 21081010244;
            $surattugas->id_bidang = 1;
            $surattugas->id_user = 2;
            $surattugas->tujuan_spt = $request->tujuan_spt;
            $surattugas->tgl_spt = $request->tgl_spt;
            $surattugas->nama_spt = $request->nama_spt;
            $surattugas->ttd = $request->ttd;
            $surattugas->save();
            DB::commit();

            if ($surattugas->save()) {
                echo ("Data berhasil dimasukkan");
            } else {
                echo ("gagal");
            }
        } catch (Exception $e) {
            DB::rollBack();
            echo "Tidak masuk database";
        }
    }
}
