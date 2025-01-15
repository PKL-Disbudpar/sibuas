<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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

            $request->session()->put('username', 'tika');

            if ($user->id_role === 1) {
                if (Auth::attempt($userLoginInfo)) {
                    // $user = Auth::user(); // Ambil data pengguna
                    // Session::put('user', $user); // Simpan data di sesi
                    return redirect('/form-spt')->with(compact('data'));
                }
            } elseif ($user->id_role === 2) {
                return view('Super-Admin.admin-dashboard');
            } elseif ($user->id_role === 3) {
                return view('Bidang.bidang-dashboard');
            } elseif ($user->id_role === 4) {
                return view('Resepsionis.resepsionis-dashboard');
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

    public function destroy(Request $request)
    {
        $request->session()->forget('username');

        return redirect('/');
    }
}
