<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\BukuTamu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class BukuTamuController extends Controller
{
    // menampilkan semua data
    public function index()
    {
        $bukuTamus = BukuTamu::all();

        $user = Session::get('data'); // Mendapatkan pengguna yang sedang login

        if ($user->id_role === 2) {
            // Jika pengguna adalah admin, kembalikan view admin
            return view('Super-Admin.admin-bukuTamu', compact('bukuTamus'));
        } elseif ($user->id_role === 3) {
            // Jika pengguna adalah resepsionis, kembalikan view resepsionis
            return view('Resepsionis.resepsionis-bukuTamu', compact('bukuTamus'));
        } else {
            // Jika role tidak sesuai, redirect atau tampilkan pesan error
            return redirect('/')->withErrors('Anda tidak memiliki akses ke halaman ini.');
        }

        // return view('Resepsionis.resepsionis-bukuTamu', compact('bukuTamus'));
        // return view('Super-Admin.admin-bukuTamu', compact('bukuTamus'));
    }

    public function create()
    {
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

            //     if ($bukutamu->save()) {
            //         echo ("Data berhasil dimasukkan");
            //     } else {
            //         echo "gagal";
            //     }
            // } catch (Exception $e) {
            //     DB::rollBack();
            //     echo "Gagal nih";
            // }
            return redirect()->back()->with('success', 'Data berhasil dimasukkan');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(['msg' => 'Gagal memasukkan data']);
        }
    }

    // hapus data dari id
    public function destroy($id)
    {
        $bukuTamus = BukuTamu::find($id);

        if ($bukuTamus) {
            $bukuTamus->delete();
            return redirect()->back()->with('success', 'Data berhasil dihapus');
        } else {
            return redirect()->back()->withErrors(['Data tidak ditemukan']);
        }
    }
}
