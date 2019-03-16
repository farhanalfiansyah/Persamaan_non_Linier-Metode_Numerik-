<?php
	// Rumus Fungsi F(X)
	function fx($x){
		$f = $x * exp(-$x) + cos(2*$x);
		return $f;
	}
	// Rumus fungsi F'(X)
	function ft($x){
		$fturunan = (1-$x)*exp(-$x)-(2 * sin (2*$x));
		return $fturunan;
	}
	// Mengambil data dari yang diinputkan 
	$x0 = $_GET['x0'];
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
		<center><h3><b>HASIL NEWTON REPHSON</b></h3></center>
		<center><h6>F(X) = x * e<sup>-x</sup> + cos(2*x)</h6></center>
	<table class="table table-striped">
		<thead>
			<tbody>
			<tr>
			<!-- Judul Tabel -->
				<th scope="col"><center>ITERASI</center></th>
				<th scope="col"><center>X</center></th>
				<th scope="col"><center>X1</center></th>
				<th scope="col"><center>F(X)</center></th>
				<th scope="col"><center>F'(X)</center></th>
			</tr>
		<?php
			// Nilai x0 yang didapat dari input diassign ke $x
			$x = $x0;
			// Memanggil fungsi perhitungan f(x) kemudian diassign ke $y1
			$y1 = fx($x);
			// Memanggil fungsi perhitungan f'(x) kemudian diassign ke $y2
			$y2 = ft($x);
			$i=1;
			// Looping untuk menampilkan tabel hasil dari perhitungan
			do {
				// perhitungan x yang baru
				$x2 = $x - ($y1/$y2);	
		?>
			<tr>
				<td><center><?echo "$i";?></center></td>
				<td><center><?echo "$x";?></center></td>
				<td><center><?echo "$x2"?></center></td>
				<td><center><?echo "$y1"?></center></td>
				<td><center><?echo "$y2"?></center></td>
			</tr>
		<?php		
		// Memanggil fungsi perhitungan f(x) kemudian diassign ke $y1
			$y1 = fx($x2);
		// Memanggil fungsi perhitungan f'(x) kemudian diassign ke $y2
			$y2 = ft($x2);
		// Nilai x yang baru diassign ke $x
			$x = $x2;
			$i++;
			} 
		// Seleksi kondisi looping akan berhenti jika bernilai false
			while (abs($y1)>=$error && $i<=$iterasi);
		?>
	</thead>
	</tbody>
	</table>
	<!-- Menampilkan Hasil akar -->
	<p><b><?php echo "Akar terletak di x = $x"; ?></b></p>
	<a href="index.php">
	<!-- Tombol untuk kembali ke form input apabila ingin menghitung lagi -->
	<button type="submit" class="btn btn-primary">Kembali</button></a>
	</div>
</body>
</html>