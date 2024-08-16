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
        return view('Forms.form-bidang');
    }

    public function store(Request $request, Bidang $bidang)
    {
        $request->validate([
            'nama_bidang' => 'required|string',
            'kode_bidang' => 'required|string',
        ]);

        try {
            DB::beginTransaction();
            $bidang->nama_bidang = $request->nama_bidang;
            $bidang->kode_bidang = $request->kode_bidang;
            $bidang->save();
            DB::commit();

            if ($bidang->save()) {
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
