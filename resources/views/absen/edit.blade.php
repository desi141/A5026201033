<!DOCTYPE html>
<html>
<head>
	<title>Tugas CRUD - 5026201033</title>
</head>
<body>

	<h3>Edit Absen</h3>

	<a href="/absen"> Kembali</a>

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
