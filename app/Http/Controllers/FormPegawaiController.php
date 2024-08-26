<?php

namespace App\Http\Controllers;

use App\Models\MasterPegawai;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Console\Input\Input;

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
            $pegawai->id_bidang = 2;
            $pegawai->save();
            DB::commit();

            return redirect('/admin-masterPegawai')->with('success', 'Data pegawai berhasil ditambahkan');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect('/admin-masterPegawai')->with('error', 'Terjadi kesalahan saat menambahkan data pegawai.');
        }
    }

    public function edit($nip)
    {
        $pegawai = MasterPegawai::where('nip_pegawai','=',$nip)->first();
        return view('Forms.form-masterPegawai', compact('pegawai'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string',
            'jabatan' => 'required|string',
            'golongan' => 'required|string',
        ]);

       try {
        MasterPegawai::findOrFail($id)->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'golongan' => $request->golongan,
        ]);
            

           return redirect('/admin-masterPegawai')->with('success', 'Data pegawai berhasil diperbarui');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Kesalahan saat memperbarui data pegawai: ', ['error' => $e->getMessage()]);

            return redirect('/admin-masterPegawai')->with('error', 'Terjadi kesalahan saat memperbarui data pegawai.');
        }
    }

    // public function show($nip)
    // {
    //     $pegawai = MasterPegawai::where('nip_pegawai', $nip)->firstOrFail();
    //     return view('Forms.form-masterPegawai', compact('pegawai'));
    // }

    public function destroy($nip)
    {
        $master_pegawais = MasterPegawai::where('nip_pegawai','=',$nip);

        if ($master_pegawais) {
            $master_pegawais->delete();
            return redirect()->back()->with('success', 'Data berhasil dihapus');
        } else {
            return redirect()->back()->withErrors(['Data tidak ditemukan']);
        }   
    }
}
