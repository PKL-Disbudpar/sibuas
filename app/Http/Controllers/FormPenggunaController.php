<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Console\View\Components\Alert;

use function Laravel\Prompts\alert;

class FormPenggunaController extends Controller
{
    // menampilkan semua data
    public function index()
    {
        // $bukuTamus = BukuTamu::all();
        // return response()->json([
        //     'message' => "Success Get All Data Buku Tamu",
        //     'data' => $bukuTamus
        // ]);

        return view('Forms.form-pengguna');
    }

    // menyimpan data
    public function store(Request $request, Pengguna $pengguna)
    {
        // Log::info('Memulai proses penyimpanan data pengguna.');

        $request->validate([
            'username' => 'required|string|max:30',
            'password' => 'required|string|max:6',
        ]);

        try {
            DB::beginTransaction();
            $pengguna->username = $request->username;
            $pengguna->password = $request->password;
            $pengguna->id_role = 2;
            $pengguna->id_bidang = 2;
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

    // menampilkan data dari id
    public function show($id)
    {
        $pengguna = Pengguna::find($id);

        if (is_null($pengguna)) {
            return response()->json([
                'message' => 'Pengguna Not Found'
            ], 404);
        }

        return response()->json([
            'message' => 'Success Get Data Pengguna by ID',
            'data' => $pengguna
        ], 200);
    }

    // hapus data dari id
    public function destroy($id)
    {
        $pengguna = Pengguna::find($id);

        if (is_null($pengguna)) {
            return response()->json([
                'message' => 'Pengguna Not Found'
            ], 404);
        }

        $pengguna->delete();

        return response()->json([
            'message' => 'Pengguna Deleted Successfully'
        ], 200);
    }
}
