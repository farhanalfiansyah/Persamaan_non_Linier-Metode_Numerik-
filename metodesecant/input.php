<?php
	// Rumus Fungsi F(X)
	function fx($x){
		$f = $x * exp(-$x) + cos(2*$x);
		return $f;
	}
	// Mengambil data dari yang diinputkan 
	$x0 = $_GET['x0'];
	$x1 = $_GET['x1'];
	$iterasi = $_GET['iterasi'];
	$error = $_GET['error'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hasil</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap-4/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<!-- Judul -->
		</br>
		<center><h3><b>HASIL METODE SECANT</b></h3></center>
		<center><h6>F(X) = x * e<sup>-x</sup> + cos(2*x)</h6></center>
	<table class="table table-striped">
		<thead>
			<tbody>
			<tr>
			<!-- Judul Tabel -->
				<th scope="col"><center>ITERASI</center></th>
				<th scope="col"><center>X0</center></th>
				<th scope="col"><center>X1</center></th>
				<th scope="col"><center>X2</center></th>
				<th scope="col"><center>F(X0)</center></th>
				<th scope="col"><center>F(X1)</center></th>
			</tr>
		<?php
			
			// Memanggil fungsi perhitungan f(x) kemudian diassign ke $y0
			$y0 = fx($x0);
			// Memanggil fungsi perhitungan f(x) kemudian diassign ke $y1
			$y1 = fx($x1);
			$i=1;
			// Looping untuk menampilkan tabel hasil dari perhitungan
			do {
				//Untuk memperkecil penulisan rumus mencari x2 dengan membuat variabel xr yang isinya hasil x1-x0
				$xr = $x1 - $x0;
				// perhitungan x2 yang baru
				$x2 = $x1 - ($y1*$xr/($y1-$y0));	
		?>
		<!-- Menampilkan hasil perhitungan -->
			<tr>
				<td><center><?echo "$i";?></center></td>
				<td><center><?echo "$x0";?></center></td>
				<td><center><?echo "$x1";?></center></td>
				<td><center><?echo "$x2"?></center></td>
				<td><center><?echo "$y0"?></center></td>
				<td><center><?echo "$y1"?></center></td>
			</tr>
		<?php		
		// Nilai x1 diassign ke x0
			$x0 = $x1;
		// Nilai x2 diassign ke x1
			$x1 = $x2;
		// Menghitung nilai f(x0) yang baru diassign ke y0
			$y0 = fx($x0);
		// Menghitung nilai f(x1) yang baru diassign ke y1
			$y1 = fx($x1);
		// Menghitung nilai f(x1) yang baru diassign ke y2 sebagai parameter toleransi error
			$y2 = fx($x2);
			$i++;
			} 
		// Seleksi kondisi looping akan berhenti jika bernilai false
			while (abs($y2)>=$error && $i<=$iterasi);
		?>
		</thead>
	</tbody>
	</table>
	<!-- Menampilkan Hasil akar -->
	<div class="alert alert-primary" role="alert">
		<?php echo "Akar terletak di x = $x2"; ?>
	</div>
	<a href="index.php">
	<!-- Tombol untuk kembali ke form input apabila ingin menghitung lagi -->
	<button type="submit" class="btn btn-primary">Kembali</button></a>
	</div>
</body>
</html>