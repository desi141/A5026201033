@extends('layout.bahagia')

@section('side-navbar')
<ul class="nav nav-pills nav-stacked">
    <li><a href="/pegawai" > Pegawai </a></li>
    <li><a href="/absen" > Absen </a></li>
    <li class="active"><a href="/masker"> Masker </a></li>
</ul>
@endsection
@section('title', 'Edit Data Masker')
@section('judulbagian', 'Edit Data Masker')
@section('konten')
	@foreach($masker as $m)
	<form action="/masker/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $m->kodemasker }}"> <br/>
        <div class="form-group row">
            <label class="col-sm-2" for="merkmasker">Merk Masker </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" required="required" name="merkmasker" value="{{ $m->merkmasker }}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2" for="stockmasker"> Stock Masker </label>
            <div class="col-sm-10">
                <input type="text"  class="form-control" required="required" name="stockmasker" value="{{ $m->stockmasker }}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2" for="tersedia"> Tersedia </label>
            <div class="col-sm-10">
                <input type="radio" id="Ya" name="tersedia" value="Y" @if ($m->tersedia === "Y" ) checked="checked" @endif>
                <label for="Ya">Ya</label><br>
                <input type="radio" id="Tidak" name="tersedia" value="T" @if ($m->tersedia === "T" ) checked="checked" @endif>
                <label for="Tidak">Tidak</label><br>
            </div>
        </div>

		<div class="d-flex text-center">
            <button type="submit" class="btn btn-success"> Simpan Data </button>
            <a href="/masker" class="btn btn-info"> Kembali </a>
        </div>
	</form>
	@endforeach

@endsection
