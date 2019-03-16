<!DOCTYPE html>
<html>
<head>
	<title>METODE SECANT</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap-4/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container" style="">
	</br>
	<!-- Judul -->
	<center><h3><b>METODE SECANT</b></h3></center>
	<center><h6>F(X) = x * e<sup>-x</sup> + cos(2*x)</h6></center>
	<!-- Form Input -->
	<form method="GET" action="input.php" style="margin-left: 20%;">
	<div class="form-group">
	<!-- Input X0 -->
		X0: <input class="form-control" type="text" name="x0" style="width: 75%;">
	<!-- Input X1 -->
		X1: <input class="form-control" type="text" name="x1" style="width: 75%;">
	<!-- Input Toleransi Error -->
		Toleransi Error: <input class="form-control" type="text" name="error" style="width: 75%;">
	<!-- Input Iterasi Maksimum -->
		Iterasi Maksimum: <input class="form-control" type="text" name="iterasi" style="width: 75%;">
	</div>
	<!-- Tombol untuk melihat hasil dari perhitungan -->
	<div class="form-group">
		<button type="submit" class="btn btn-success">Hasil</button>
	</div>
	</form>
</div>
<a href="../index.php">
	<!-- Tombol untuk kembali ke menu awal -->
		<button type="submit" class="btn btn-primary" style="margin-left: 25%;">Kembali ke Menu</button></a>
		</br></br>
<center><h6>&copy Mochammad Farhan Alfiansyah | 2018</h6></center>
</body>
</html>