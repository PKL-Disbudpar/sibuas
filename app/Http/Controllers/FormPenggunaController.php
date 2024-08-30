<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\alert;

class FormPenggunaController extends Controller
{
    // menampilkan semua data
    public function index()
    {
        $penggunas = Pengguna::all();
        return view('Super-Admin.admin-pengguna', compact('penggunas'));
    }

    public function create()
    {
        return view('Forms.form-pengguna');
    }

    // menyimpan data
    public function store(Request $request, Pengguna $pengguna)
    {
        $request->validate([
            'username' => 'required|string|max:30',
            'password' => 'required|string|max:8',
        ]);

        try {
            DB::beginTransaction();
            $pengguna->username = $request->username;
            $pengguna->password = Hash::make($request->password);
            $pengguna->id_role = 9999;
            $pengguna->id_bidang = 3;
            $pengguna->save();
            DB::commit();


            return redirect('/admin-pengguna')->with('success', 'Data pengguna berhasil dimasukkan');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect('/admin-pengguna')->withErrors(['msg' => 'Gagal memasukkan data']);
        }
    }
    public function edit($id)
    {
        $pengguna = Pengguna::find($id);
        return view('Forms.form-pengguna', compact('pengguna'));
    }

    public function update(Request $request, $id)
    {
        $pengguna = Pengguna::find($id);
        $pengguna->username = $request->username;
        $pengguna->password = $request->password;
        $pengguna->save();

        return redirect('/admin-pengguna')->with('success', 'Data pengguna berhasil diperbarui!');
    }

    // hapus data dari id
    public function destroy($id)
    {
        $penggunas = Pengguna::find($id);

        if ($penggunas) {
            $penggunas->delete();
            return redirect()->back()->with('success', 'Data berhasil dihapus');
        } else {
            return redirect()->back()->withErrors(['Data tidak ditemukan']);
        }
    }
}
//             $pengguna->password = Hash::make($request->password);
//             $pengguna->id_role = 1;
//             $pengguna->id_bidang = 2;
//             $pengguna->save();
//             DB::commit();

//             if ($pengguna->save()) {
//                 echo ("Data berhasil dimasukkan");
//             } else {
//                 echo "Gagal";
//             }
//         } catch (Exception $e) {
//             DB::rollBack();
//             echo "Gagal nih";
//         }
//     }
// }
