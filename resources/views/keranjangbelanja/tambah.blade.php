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
@section('judulbagian', 'Beli Belanja')
@section('konten')
	<form action="/keranjangbelanja/store" method="post">
		{{ csrf_field() }}
            <div class="form-group row">
                <label for="KodeBarang" class="form-label">Kode Barang :</label>
                <div class="col-sm-10">
                    <input type="number" id="KodeBarang" name="KodeBarang" placeholder="Masukkan Kode Barang" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="Jumlah" class="form-label">Jumlah :</label>
                <div class="col-sm-10">
                    <input type="number" id="Jumlah" name="Jumlah" class="form-control" placeholder="Masukkan Jumlah" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="Harga" class="form-label">Harga :</label>
                <div class="col-sm-10">
                    <input type="number" id="Harga" name="Harga" class="form-control" placeholder="Masukkan Harga" required>
            </div>
                </div>
            </div>

            <div class="d-flex text-center">
                     <button type="submit" class="btn btn-success"> Beli </button>
                     <a href="/keranjangbelanja" class="btn btn-info"> Kembali </a>
            </div>
	</form>
@endsection
