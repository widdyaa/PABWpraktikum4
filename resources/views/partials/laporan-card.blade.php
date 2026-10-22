<div style="border:1px solid #ccc;padding:15px;margin-bottom:15px;border-radius:8px;">

<h3>{{ $item->nama_pelapor }}</h3>

<p>Lokasi : {{ $item->lokasi }}</p>

<p>Tinggi Genangan : {{ $item->tinggi_genangan }} cm</p>

<p>Tanggal : {{ $item->tanggal_kejadian }}</p>

@if($item->tinggi_genangan < 30)

<p>Status : <b>Waspada</b></p>

@elseif($item->tinggi_genangan <= 70)

<p>Status : <b>Siaga</b></p>

@else

<p>Status : <b>Awas</b></p>

@endif

</div>