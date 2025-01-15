<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormBidangController extends Controller
{
    public function index()
    {
        $bidangs = Bidang::all();

        return view('Super-Admin.admin-bidang', compact('bidangs'));
    }

    public function create()
    {
        return view('Forms.form-bidang');
    }

    public function store(Request $request, Bidang $bidang)
    {
        $request->validate([
            'nama_bidang' => 'required|string|unique:bidangs,nama_bidang',
            'kode_bidang' => ['required', 'regex:/^[0-9.]+$/', 'unique:bidangs,kode_bidang'],
        ]);
        try {
            DB::beginTransaction();
            $bidang->nama_bidang = $request->nama_bidang;
            $bidang->kode_bidang = $request->kode_bidang;
            $bidang->save();
            DB::commit();

            return redirect('/admin-bidang')->with('success', 'Data bidang berhasil dimasukkan');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect('/admin-bidang')->withErrors(['msg' => 'Gagal memasukkan data']);
        }
    }
    public function edit($id)
    {
        $bidang = Bidang::find($id);
        return view('Forms.form-bidang', compact('bidang'));
    }

    public function update(Request $request, $id)
    {
        $bidang = Bidang::find($id);

        $request->validate([
            'nama_bidang' => 'required|string|unique:bidangs,nama_bidang,' . $bidang->id,
            'kode_bidang' => ['required', 'regex:/^[0-9.]+$/', 'unique:bidangs,kode_bidang'],
        ]);

        $bidang = Bidang::find($id);
        $bidang->nama_bidang = $request->nama_bidang;
        $bidang->kode_bidang = $request->kode_bidang;
        $bidang->save();

        return redirect('/admin-bidang')->with('success', 'Data bidang berhasil diperbarui!');
    }

    // hapus data dari id
    public function destroy($id)
    {
        $bidangs = Bidang::find($id);

        if ($bidangs) {
            $bidangs->delete();
            return redirect()->back()->with('success', 'Data berhasil dihapus');
        } else {
            return redirect()->back()->withErrors(['Data tidak ditemukan']);
        }
    }
}
