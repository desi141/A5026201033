@extends('layout.bahagia')

   @section('title', 'Mengedit Data Absensi')
   @section('judulhalaman', 'Edit Absensi Pegawai')

   @section('konten')

	<h3>Edit Absen</h3>

	<a href="/absen" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	@foreach($absen as $a)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $a->ID }}"> <br/>
		ID <input type="number" required="required" name="ID" value="{{ $a->ID }}"> <br/>
		IDPegawai <input type="number" required="required" name="IDPegawai" value="{{ $a->IDPegawai }}"> <br/>
		Tanggal <input type="datetime" required="required" name="Tanggal" value="{{ $a->Tanggal }}"> <br/>
		Status <textarea required="required" name="Status">{{ $a->Status }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
