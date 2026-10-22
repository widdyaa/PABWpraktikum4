<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class LaporanController extends Controller
{
    // Menampilkan form
    public function form()
    {
        return view('form');
    }

    // Menyimpan data ke database
    public function store(Request $request)
    {
        $laporan = Laporan::create([
            'nama_pelapor' => $request->nama_pelapor,
            'lokasi' => $request->lokasi,
            'tinggi_genangan' => $request->tinggi_genangan,
            'tanggal_kejadian' => $request->tanggal_kejadian,
        ]);

        return view('konfirmasi', compact('laporan'));
    }

    // Menampilkan semua laporan dari database
    public function daftar()
    {
        $laporan = Laporan::all();

        return view('laporan', compact('laporan'));
    }
}