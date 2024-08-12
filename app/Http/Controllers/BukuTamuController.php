<?php

namespace App\Http\Controllers;

use App\Models\BukuTamu;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class BukuTamuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $bukuTamus = BukuTamu::all();
        // return response()->json($bukuTamus);

        return view('bukutamu');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_tamu' => 'required|string|max:255',
            'asal_instansi' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:50',
            'no_hp' => 'required|string|max:15',
            'tgl_pengunjung' => 'required|date',
            'keperluan' => 'required|string',
        ]);

        dd($request->all());

        try {
            $bukuTamu = BukuTamu::create([
                'nama_tamu' => $request->nama_tamu,
                'asal_instansi' => $request->asal_instansi,
                'jenis_kelamin' => $request->jenis_kelamin,
                'no_hp' => $request->no_hp,
                'tgl_pengunjung' => $request->tgl_pengunjung,
                'keperluan' => $request->keperluan,
            ]);

            return response()->json($bukuTamu, 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error saving data: ' . $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $bukuTamu = BukuTamu::find($id);

        if (is_null($bukuTamu)) {
            return response()->json(['message' => 'Buku Tamu not found'], 404);
        }

        return response()->json($bukuTamu);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_tamu' => 'string|max:255',
            'asal_instansi' => 'string|max:255',
            'jenis_kelamin' => 'string|max:50',
            'no_hp' => 'string|max:15',
            'tgl_pengunjung' => 'date',
            'keperluan' => 'string',
        ]);

        $bukuTamu = BukuTamu::find($id);

        if (is_null($bukuTamu)) {
            return response()->json(['message' => 'Buku Tamu not found'], 404);
        }

        $bukuTamu->update([
            'nama_tamu' => $request->nama_tamu,
            'asal_instansi' => $request->asal_instansi,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_hp' => $request->no_hp,
            'tgl_pengunjung' => $request->tgl_pengunjung,
            'keperluan' => $request->keperluan,
        ]);

        return response()->json($bukuTamu);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $bukuTamu = BukuTamu::find($id);

        if (is_null($bukuTamu)) {
            return response()->json(['message' => 'Buku Tamu not found'], 404);
        }

        $bukuTamu->delete();
        return response()->json(['message' => 'Buku Tamu deleted successfully']);
    }
}
