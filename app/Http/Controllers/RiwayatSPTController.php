<?php

namespace App\Http\Controllers;

use App\Models\SuratTugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RiwayatSPTController extends Controller
{
    public function index()
    {
        // if (Auth::check()) {
        $suratTugas = SuratTugas::all();
        return view('riwayat-spt', compact('suratTugas'));
        //     } else {
        //         return view('login');
        //     }
    }
}
