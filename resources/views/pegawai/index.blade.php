@extends('layout.bahagia')

@section('side-navbar')
<ul class="nav nav-pills nav-stacked">
    <li class="active"><a href="/pegawai" > Pegawai </a></li>
    <li><a href="/absen"> Absen </a></li>
    <li> <a href="/masker"> Masker </a> </li>
</ul>
@endsection
@section('title', 'Data Pegawai')
@section('judulbagian', 'Data Pegawai')
@section('konten')
<div class="d-flex text-left">
    <b> Cari data pegawai berdasarkan nama atau alamat: </b>
    <form action="/pegawai/cari" method="GET">
            <input type="text" name="cari" value="{{ old('cari') }}">
            <input class="btn btn-primary" type="submit" value="Cari">
        </form><br>

     </div>
	<table class="table">
    <thead class="thead">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>

				<a href="/pegawai/view/{{ $p->pegawai_id }}" class="label label-warning">View Detail</a>
				|
                <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="label label-info">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="label label-danger">Hapus</a>

            </td>
		</tr>

		@endforeach
     <thead>
	</table>
    {{ $pegawai->links() }}
    <div class="d-flex text-center">
        <a href="/pegawai/tambah" class="btn btn-primary"> + Tambah Data</a>
    </div>
@endsection
