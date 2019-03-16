<?php
	function fx($x){
		$f = $x * exp(-$x) + cos(2*$x);
		return $f;
	}
	$atas = $_GET['atas'];
	$bawah = $_GET['bawah'];
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
		<center><h3>HASIL METODE BISEKSI</h3></center>
		<center><h6>F(X) = x * e<sup>-x</sup> + cos(2*x)</h6></center>
		<?php
			$a = $atas;
			$b = $bawah;
			$fa = fx($a);
			$fb = fx($b);
			if($fa*$fb>0)
			{
				?>
				<div class="alert alert-danger" role="alert">
  					TIDAK ADA AKAR!!!
				</div>
				<a href="index.php"><button type="submit" class="btn btn-primary">Kembali</button></a>
				<?php
				die();
			}
			else{
				$i = 1;
				$kondisi = 1;
			}
			?>
	<table class="table table-striped">
		<thead>
			<tbody>
				<tr>
					<th scope="col"><center>ITERASI</center></th>
					<th scope="col"><center>a</center></th>
					<th scope="col"><center>b</center></th>
					<th scope="col"><center>xr</center></th>
					<th scope="col"><center>F(a)</center></th>
					<th scope="col"><center>F(b)</center></th>
					<th scope="col"><center>F(xr)</center></th>
					<th scope="col"><center>ERROR</center></th>
				</tr>
			<?php
			while($kondisi == 1){
				$xr = ($a+$b)/2;
				$fx = fx($xr);
			?>
	
				<tr>
					<td><center><?echo "$i";?></center></td>
					<td><center><?echo "$a";?></center></td>
					<td><center><?echo "$b";?></center></td>
					<td><center><?echo "$xr";?></center></td>
					<td><center><?echo "$fa";?></center></td>
					<td><center><?echo "$fb";?></center></td>
					<td><center><?echo "$fx";?></center></td>
					<td><center><?echo "$error";?></center></td>
				</tr>
		<?php
				if($fx*$fa<0){
					$b = $xr;
					$fb = $fx;
				}
				else{
					$a = $xr;
					$fa = $fx;
				}
				if(abs($b-$a)<$error || $i>=$iterasi){
					$kondisi=0;
				}
				$i++;
		}
			$akar = $xr;
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