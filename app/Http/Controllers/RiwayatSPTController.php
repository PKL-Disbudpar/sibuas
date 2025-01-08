<?php

namespace App\Http\Controllers;

use App\Models\SuratTugas;

class RiwayatSPTController extends Controller
{
    public function index()
    {
        $suratTugas = SuratTugas::all();
        return view('riwayat-spt', compact('suratTugas'));
    }

    public function adminSuratTugas()
    {
        $suratTugas = SuratTugas::all();
        return view('Super-Admin.admin-suratTugas', compact('suratTugas'));
    }
}
