<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class LaporanController extends Controller
{
    // Menampilkan form pelaporan
    public function form()
    {
        return view('form');
    }

    // Alias kalau route masih pakai create()
    public function create()
    {
        return $this->form();
    }

    // Menyimpan data ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama_pelapor' => ['required', 'string', 'max:255'],
            'lokasi' => ['required', 'string', 'max:255'],
            'tinggi_genangan' => ['required'],
            'tanggal_kejadian' => ['required'],
        ]);

        $laporan = Laporan::create([
            'nama_pelapor' => $request->nama_pelapor,
            'lokasi' => $request->lokasi,
            'tinggi_genangan' => $request->tinggi_genangan,
            'tanggal_kejadian' => $request->tanggal_kejadian,
        ]);

        return view('konfirmasi', compact('laporan'));
    }

    // Menampilkan semua laporan
    public function daftar()
    {
        $laporan = Laporan::all();

        return view('laporan', compact('laporan'));
    }

    // Alias kalau route masih pakai index()
    public function index()
    {
        return $this->daftar();
    }
}