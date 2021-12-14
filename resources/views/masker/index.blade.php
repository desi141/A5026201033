@extends('layout.bahagia')

@section('side-navbar')
<ul class="nav nav-pills nav-stacked">
    <li><a href="/pegawai" > Pegawai </a></li>
    <li><a href="/absen" > Absen </a></li>
    <li class="active"><a href="/masker"> Masker </a></li>
</ul>
@endsection
@section('title', 'Data Masker')
@section('judulbagian', 'Data Masker')
@section('konten')
<div class="d-flex text-left">
    <b> Cari data masker berdasarkan merk masker: </b>
    <form action="/masker/cari" method="GET">
            <input type="text" name="cari" value="{{ old('cari') }}">
            <input class="btn btn-primary" type="submit" value="Cari">
        </form><br>

     </div>
	<table class="table">
        <thead class="thead">
		<tr>
			<th>Merk Masker</th>
			<th>Stock Masker</th>
			<th>Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($masker as $m)
		<tr>
			<td>{{ $m->merkmasker }}</td>
			<td>{{ $m->stockmasker }}</td>
			<td>{{ $m->tersedia }}</td>
            <td>
                <a href="/masker/view/{{ $m->kodemasker }}" class="label label-warning">View Detail</a>
				|
				<a href="/masker/edit/{{ $m->kodemasker}}" class="label label-info">Edit</a>
				|
				<a href="/masker/hapus/{{ $m->kodemasker }}" class="label label-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
        </thead>
	</table>
    {{ $masker->links() }}
    <div class="d-flex text-center">
        <a href="/masker/tambah" class="btn btn-primary"> + Tambah Data </a>
    </div>

@endsection
