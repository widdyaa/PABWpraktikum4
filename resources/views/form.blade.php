@extends('layouts.app')

@section('content')

<h2>Form Pelaporan</h2>

<form action="{{ route('lapor.store') }}" method="POST">

@csrf

<label>Nama Pelapor</label><br>

<input type="text" name="nama_pelapor" required>

<br><br>

<label>Lokasi</label><br>

<input type="text" name="lokasi" required>

<br><br>

<label>Tinggi Genangan (cm)</label><br>

<input type="number" name="tinggi_genangan" required>

<br><br>

<label>Tanggal Kejadian</label><br>

<input type="date" name="tanggal_kejadian" required>

<br><br>

<button type="submit" class="btn btn-success">
    Kirim Laporan
</button>

</form>

@endsection