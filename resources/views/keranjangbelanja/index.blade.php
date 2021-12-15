@extends('layout.bahagia')

@section('side-navbar')
<ul class="nav nav-pills nav-stacked">
    <li><a href="/pegawai" > Pegawai </a></li>
    <li> <a href="/absen"> Absen </a> </li>
    <li> <a href="/masker"> Masker </a> </li>
    <li class="active"><a href="/keranjangbelanja"> EAS </a></li>
</ul>
@endsection
@section('title', 'Keranjang Belanja')
@section('judulbagian', 'Data Keranjang Belanja')
@section('konten')
	<table class="table">
        <thead class="thead">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga per Item</th>
            <th>Total</th>
            <th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $k)
		<tr>
			<td>{{ $k->ID }}</td>
			<td>{{ $k->KodeBarang }}</td>
			<td>{{ $k->Jumlah }}</td>
			<td>{{ number_format($k->Harga, 0, ',', '.') }}</td>
            <td>{{ number_format($k->Jumlah * $k->Harga, 0, ',', '.') }}</td>
			<td>
                <a href="/keranjangbelanja/edit" class="label label-info">Edit</a>
                |
				<a href="/keranjangbelanja/remove/{{ $k->ID }}" class="label label-danger"> Hapus </a>
			</td>
		</tr>
		@endforeach
        </thead>
	</table>
    {{ $keranjangbelanja->links() }}
    <div class="d-flex text-center">
        <a href="/keranjangbelanja/tambah" class="btn btn-primary"> Beli </a>
    </div>

@endsection
