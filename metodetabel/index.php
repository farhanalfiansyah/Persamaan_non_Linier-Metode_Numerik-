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
				<center><h3><b>METODE TABEL</b></h3></center>
				<center><h6>F(X) = x * e<sup>-x</sup> + cos(2*x)</h6></center>
				<form method="GET" action="tampilan.php">
					<div class="form-group">
						Batas Atas: <input class="form-control" type="text" name="atas">
						Batas Bawah: <input class="form-control" type="text" name="bawah">
						Iterasi Maksimum: <input class="form-control" type="text" name="iterasi">
					</div>
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