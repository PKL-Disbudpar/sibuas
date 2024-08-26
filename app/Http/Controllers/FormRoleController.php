<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FormRoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('Super-Admin.admin-role', compact('roles'));
    }

    public function create()
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

    // hapus data dari id
    public function destroy($id)
    {
        $roles = Role::find($id);

        if ($roles) {
            $roles->delete();
            return redirect()->back()->withErrors(['Data tidak ditemukan']);
        } else {
            return redirect()->back()->with('success', 'Data berhasil dihapus');
        }
    }
}
