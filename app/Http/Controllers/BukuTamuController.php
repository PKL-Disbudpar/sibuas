<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\BukuTamu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Console\View\Components\Alert;

use function Laravel\Prompts\alert;

class BukuTamuController extends Controller
{
    // menampilkan semua data
    public function index()
    {
        // $bukuTamus = BukuTamu::all();
        // return response()->json([
        //     'message' => "Success Get All Data Buku Tamu",
        //     'data' => $bukuTamus
        // ]);

        return view('bukutamu');
    }

    // menyimpan data
    public function store(Request $request, BukuTamu $bukutamu)
    {
        $request->validate([
            'nama_tamu' => 'required|string|max:255',
            'asal_instansi' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:50',
            'no_hp' => 'required|string|max:15',
            'tgl_pengunjung' => 'required|date',
            'keperluan' => 'required|string',
        ]);

        try {
            DB::beginTransaction();
            $bukutamu->nama_tamu = $request->nama_tamu;
            $bukutamu->asal_instansi = $request->asal_instansi;
            $bukutamu->jenis_kelamin = $request->jenis_kelamin;
            $bukutamu->no_hp = $request->no_hp;
            $bukutamu->tgl_pengunjung = $request->tgl_pengunjung;
            $bukutamu->keperluan = $request->keperluan;
            $bukutamu->save();
            DB::commit();

            if ($bukutamu->save()) {
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
        $bukuTamu = BukuTamu::find($id);

        if (is_null($bukuTamu)) {
            return response()->json([
                'message' => 'Buku Tamu Not Found'
            ], 404);
        }

        return response()->json([
            'message' => 'Success Get Data Buku Tamu by ID',
            'data' => $bukuTamu
        ], 200);
    }

    // hapus data dari id
    public function destroy($id)
    {
        $bukuTamu = BukuTamu::find($id);

        if (is_null($bukuTamu)) {
            return response()->json([
                'message' => 'Buku Tamu Not Found'
            ], 404);
        }

        $bukuTamu->delete();

        return response()->json([
            'message' => 'Buku Tamu Deleted Successfully'
        ], 200);
    }
}
