@extends('layout.bahagia')

@section('side-navbar')
<ul class="nav nav-pills nav-stacked">
    <li><a href="/pegawai" > Pegawai </a></li>
    <li><a href="/absen" > Absen </a></li>
    <li class="active"><a href="/masker"> Masker </a></li>
</ul>
@endsection
@section('title', 'Detail Data Masker')
@section('judulbagian', 'Detail Data Masker')
@section('konten')
	@foreach($masker as $m)
        <div class="form-group row">
            <label class="col-sm-2" for="merkmasker">Merk Masker: </label>
            <div class="col-sm-10">
                <label class="col-sm-4">{{ $m->merkmasker }} </label>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2" for="stockmasker"> Stock Masker: </label>
            <div class="col-sm-10">
                <label class="col-sm-4">{{ $m->stockmasker }} </label>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2" for="tersedia"> Tersedia: </label>
            <div class="col-sm-10">
                <label class="col-sm-4">{{ $m->tersedia }} </label>
            </div>
        </div>

		<div class="d-flex text-center">
            <a href="/masker" class="btn btn-info"> Kembali </a>
        </div>
	</form>
	@endforeach

@endsection
