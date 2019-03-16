<!DOCTYPE html>
<html>
<head>
	<title>METODE REGULA FALSI</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap-4/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	</br>
	<center><h3><b>METODE REGULA FALSI</b></h3></center>
		<div class="row">
			<div class="col-md-4 offset-4">
				<center><h6>F(X) = x * e<sup>-x</sup> + cos(2*x)</h6></center>
				<form method="GET" action="tampilan.php">
					<div class="form-group">
						Batas Bawah: <input class="form-control" type="text" name="bawah">
						Batas Atas: <input class="form-control" type="text" name="atas">
						Toleransi Error: <input class="form-control" type="text" name="error">
						Iterasi Maksimum: <input class="form-control" type="text" name="iterasi">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Hasil</button>
					</div>
				</form>
				<a href="../index.php">
				<button type="submit" class="btn btn-primary">Kembali ke Menu</button></a>
				</br></br>
				<center><h6>&copy Mochammad Farhan Alfiansyah | 2018</h6></center>
			</div>
		</div>
	</div>
</body>
</html>