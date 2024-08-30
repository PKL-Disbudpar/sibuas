<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\BukuTamu;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function store(Request $request, Pengguna $user)
    {
        try {
            $userLoginInfo = $request->only('username', 'password');

            $user = Pengguna::where('username', $userLoginInfo['username'])->first();
            if (!$user) {
                throw new \Exception("Invalid user");
            }

            if (!Hash::check($userLoginInfo['password'], $user->password)) {
                throw new \Exception("Invalid Password");
            }

            $data = $user->username;

            // $bukuTamus = BukuTamu::all();

            if ($user->id_role === 2) {
                // Jika pengguna adalah admin, kembalikan view admin
                return view('Super-Admin.admin-dashboard');
            } elseif ($user->id_role === 3) {
                // Jika pengguna adalah resepsionis, kembalikan view resepsionis
                return view('Resepsionis.resepsionis-dashboard');
            } elseif ($user->id_role === 4) {
                return view('Bidang.bidang-dashboard');
            } elseif ($data) {
                return redirect('/form-spt')->with(compact('data'));
            } else {
                // Jika role tidak sesuai, redirect atau tampilkan pesan error
                return redirect('/')->withErrors('Anda tidak memiliki akses ke halaman ini.');
            }
        } catch (Exception $error) {
            return response()->json([
                'error' => $error->getMessage()
            ], 401);
        }
    }
}
