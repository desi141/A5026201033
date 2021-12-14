@extends('layout.bahagia')

@section('side-navbar')
<ul class="nav nav-pills nav-stacked">
    <li><a href="/pegawai" > Pegawai </a></li>
    <li><a href="/absen" > Absen </a></li>
    <li class="active"><a href="/masker"> Masker </a></li>
</ul>
@endsection
@section('title', 'Tambah Data Masker')
@section('judulbagian', 'Tambah Data Masker')
@section('konten')
	<form action="/masker/store" method="post">
		{{ csrf_field() }}
            <div class="form-group row">
                <label class="col-sm-2" for="merkmasker">Merk Masker </label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" name="merkmasker" required="required">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2" for="stockmasker"> Stock Masker </label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" name="stockmasker" required="required">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2" for="tersedia "> Tersedia </label>
                <div class="col-sm-10">
                    <input type="radio" id="Ya" name="tersedia" value="Y">
                    <label for="Ya">Ya</label><br>
                    <input type="radio" id="Tidak" name="tersedia" value="T">
                    <label for="Tidak">Tidak</label><br>
                </div>
            </div>

            <div class="d-flex text-center">
                     <button type="submit" class="btn btn-success"> Simpan Data </button>
                     <a href="/masker" class="btn btn-info"> Kembali </a>
            </div>
	</form>
@endsection
