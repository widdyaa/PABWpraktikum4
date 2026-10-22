@extends('layouts.app')

@section('content')

<x-alert>
    Laporan berhasil dikirim.
</x-alert>

<h2>Data Laporan</h2>

<p><b>Nama Pelapor :</b> {{ $laporan->nama_pelapor }}</p>

<p><b>Lokasi :</b> {{ $laporan->lokasi }}</p>

<p><b>Tinggi Genangan :</b> {{ $laporan->tinggi_genangan }} cm</p>

<p><b>Tanggal Kejadian :</b> {{ $laporan->tanggal_kejadian }}</p>

@endsection