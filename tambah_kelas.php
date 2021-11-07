<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/boostrap@5.0.1/dist/css/boostrap.min.css" rel="stylesheet"integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOO17+AMvyTG2x" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<h3>Tambah Data Jurusan</h3>
	<forma action="proses_tambah_jurusan.php" metode= "post">
		Nama Jurusan:
		<input type="text" name="nama_jurusan" value="" class="form-control">
		Angkatan :
		<input type="text" name="angkatan" value="" class="form-control"><br>
		<input type="submit" name="simpan" value="simpan" class="btn btn-primary">
	</form>

	<script src="https://cdn.jsdelivr.net/npm/boostrap@5.0.1/dist/js/boostrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>