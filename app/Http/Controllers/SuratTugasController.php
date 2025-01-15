<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Bidang;
use App\Models\Pengguna;
use App\Models\SuratTugas;
use Illuminate\Http\Request;
use App\Models\MasterPegawai;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SuratTugasController extends Controller
{
    public function index()
    {
        // Ambil data pegawai beserta bidang terkait, urut berdasarkan nama
        $data = MasterPegawai::with('Bidang')->orderBy('nama', 'ASC')->get();
        return view('form-spt', compact('data'));
    }

    public function create()
    {
        // Ambil data pegawai beserta bidang terkait, urut berdasarkan nama
        $data = MasterPegawai::with('Bidang')->orderBy('nama', 'ASC')->get();
        $bidangs = Bidang::all();
        $penggunas = Pengguna::all();

        // Kirim semua data yang dibutuhkan ke view
        return view('form-spt', compact('data', 'bidangs', 'penggunas'));
    }

    public function store(Request $request, SuratTugas $suratTugas)
    {
        try {
            foreach ($request->nip_pegawai as $index => $nip) {
                $suratTugas->nip_pegawai = MasterPegawai::findOrFail($request->nip_pegawai[$index])->nip_pegawai;
                $suratTugas->id_user = 1;
                $suratTugas->id_bidang = MasterPegawai::findOrFail($request->nip_pegawai[$index])->id_bidang;
                $suratTugas->tujuan_spt = $request->tujuan_spt;
                $suratTugas->tgl_spt = $request->tgl_spt;
                $suratTugas->nama_spt = MasterPegawai::findOrFail($request->nip_pegawai[$index])->nama;
                $suratTugas->ttd = $request->ttd;
                $suratTugas->save();

                return back()->with('success', 'Data Surat Tugas berhasil disimpan.');
            }
        } catch (Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat menyimpan data --> ' . $e->getMessage());
        }

        // $request->validate([
        //     'nip_pegawai' => 'required|string|max:20',
        //     'id_user' => 'required|integer|exists:penggunas,id',
        //     'id_bidang' => 'required|integer|exists:bidangs,id',
        //     'tujuan_spt' => 'required|string|max:255',
        //     'tgl_spt' => 'required|date',
        //     'nama_spt' => 'required|string|max:255',
        //     'ttd' => 'required|string|max:255',
        // ]);

        // try {
        //     DB::beginTransaction();
        //     $suratTugas->nip_pegawai = $request->nip_pegawai;
        //     $suratTugas->id_user = $request->id_user;
        //     $suratTugas->id_bidang = $request->id_bidang;
        //     $suratTugas->tujuan_spt = $request->tujuan_spt;
        //     $suratTugas->tgl_spt = $request->tgl_spt;
        //     $suratTugas->nama_spt = $request->nama_spt;
        //     $suratTugas->ttd = $request->ttd;
        //     $suratTugas->save();
        //     DB::commit();

        //     dd($suratTugas);

        // return redirect()->route('suratTugas.index')->with('success', 'Data Surat Tugas berhasil disimpan.');
        //     return redirect()->back()->with('success', 'Data Surat Tugas berhasil disimpan.');
        // } catch (Exception $e) {
        //     DB::rollBack();
        //     return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan saat menyimpan data: ' . $e->getMessage()]);
        // }
    }

    // public function formSPT()
    // {
    //     // Ambil username dari session
    //     $user = Session::get('username');

    //     // Kirimkan data username ke view
    //     return view('form-spt', compact('user'));
    // }
}
