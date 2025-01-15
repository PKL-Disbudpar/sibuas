<?php

namespace App\Http\Controllers;

use App\Models\BukuTamu;
use App\Models\SuratTugas;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahBukuTamu = BukuTamu::count();
        $jumlahSPT = SuratTugas::count();

        return view('Super-Admin.admin-dashboard', compact('jumlahBukuTamu', 'jumlahSPT'));
    }
}
