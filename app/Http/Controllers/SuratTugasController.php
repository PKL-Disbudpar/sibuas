<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\SuratTugas;
use Illuminate\Http\Request;
use App\Models\MasterPegawai;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\Auth;

class SuratTugasController extends Controller
{
    public function index()
    {
        // return view('Super-Admin.admin-suratTugas', compact('data'));
        $data = MasterPegawai::with('Bidang')->orderBy('nama', 'ASC')->get();
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
            $surattugas->nip_pegawai = 89123;
            $surattugas->id_bidang = 2;
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
