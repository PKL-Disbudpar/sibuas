<?php

namespace App\Http\Controllers;

use Exception;
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

            return redirect('/form-spt');
        } catch (Exception $error) {
            return response()->json([
                'error' => $error->getMessage()
            ], 401);
        }
    }
}
