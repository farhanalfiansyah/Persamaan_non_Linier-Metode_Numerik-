<!DOCTYPE html>
<html>
<head>
	<title>METODE NEWTON REPHSON</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap-4/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-4 offset-4">
		</br>
	<!-- Judul -->
		<center><h3><b>METODE NEWTON REPHSON</b></h3></center>
		<center><h6>F(X) = x * e<sup>-x</sup> + cos(2*x)</h6></center>
	<!-- Form Input -->
		<form method="GET" action="input.php">
			<div class="form-group">
	<!-- Input Tebakan Awal -->
				Tebakan Awal: <input class="form-control" type="text" name="x0">
	<!-- Input Toleransi Error -->
				Toleransi Error: <input class="form-control" type="text" name="error">
	<!-- Input Iterasi Maksimum -->
				Iterasi Maksimum: <input class="form-control" type="text" name="iterasi">
			</div>
	<!-- Tombol untuk melihat hasil dari perhitungan -->
			<div class="form-group">
				<button type="submit" class="btn btn-success">Hasil</button>
			</div>
		</form>
		<a href="../index.php">
		<button type="submit" class="btn btn-primary">Kembali ke Menu</button></a>
		</div>
	</div>
</div>
	</br>
<center><h6>&copy Mochammad Farhan Alfiansyah | 2018</h6></center>
</body>
</html>