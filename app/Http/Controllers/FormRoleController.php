<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormRoleController extends Controller
{
    public function index()
    {
        return view('Forms.form-role');
    }

    public function store(Request $request, Role $role)
    {
        $request->validate([
            'nama_role' => 'required|string',
        ]);

        try {
            DB::beginTransaction();
            $role->nama_role = $request->nama_role;
            $role->save();
            DB::commit();

            if ($role->save()) {
                echo ("Data berhasil dimasukkan");
            } else {
                echo ("Gagal");
            }
        } catch (Exception $e) {
            DB::rollBack();
            echo ("Gagal nihh");
        }
    }
}
