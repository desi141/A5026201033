<!DOCTYPE html>
<html>
<head>
	<title>Tugas CRUD - 5026201033</title>
</head>
<body>

	<h3>Data Absen</h3>

	<a href="/absen"> Kembali</a>

	<br/>
	<br/>

	<form action="/absen/store" method="post">
		{{ csrf_field() }}
        ID <input type="number" name="id" required="required"> <br/>
		IDPegawai <input type="number" name="IDPegawai" required="required"> <br/>
		Tanggal <input type="datetime" name="Tanggal" required="required"> <br/>
		Status <textarea name="Status" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
