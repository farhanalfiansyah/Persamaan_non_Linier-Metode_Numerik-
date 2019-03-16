<?php
	function fx($x){
		$f = exp(-$x)-$x;
		return $f;
	}
	function gx($x){
		$gx = exp(-$x);
		return $gx;
	}
	$x0 = $_GET['x0'];
	$error = $_GET['error'];
	$iterasi = $_GET['iterasi'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hasil</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap-4/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		</br>
		<center><h3><b>HASIL METODE ITERASI SEDERHANA</b></h3></center>
		<center><h6>F(X) = e<sup>-x</sup>-X</h6></center>
		<table class="table table-striped">
	<thead>
	<tbody>
			<tr>
				<th scope="col"><center>ITERASI</center></th>
				<th scope="col"><center>X0</center></th>
				<th scope="col"><center>X</center></th>
				<th scope="col"><center>F(X)</center></th>
			</tr>
		<?php
			$i=1;
			do{
			$gx = gx($x0);
			$fx = fx($x0);
		?>
			<tr>
				<td><center><?echo "$i";?></center></td>
				<td><center><?echo "$x0";?></center></td>
				<td><center><?echo "$gx";?></center></td>
				<td><center><?echo "$fx"?></center></td>
			</tr>
		<?php
			$x0 = $gx;
			$i++;
			}
			while($i<=$iterasi && abs($fx)>=$error);
			$akar = $gx;
		?>
	</thead>
	</tbody>
	</table>
	<div class="alert alert-primary" role="alert">
  		<?php echo "Akar terletak di x = $akar"; ?>
  	</div>
	<a href="index.php"><button type="submit" class="btn btn-primary">Kembali</button></a>
	</div>
</body>
</html>