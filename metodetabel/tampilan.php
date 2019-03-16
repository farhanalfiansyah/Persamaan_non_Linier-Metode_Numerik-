<?php
	function ftabel($xtabel){
		$f = $xtabel * exp(-$xtabel) + cos(2*$xtabel);
		return $f;
	}
	$atas = $_GET['atas'];
	$bawah = $_GET['bawah'];
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
		<center><h3><b>HASIL METODE TABEL</b></h3></center>
		<center><h6>F(X) = x * e<sup>-x</sup> + cos(2*x)</h6></center>
		<table class="table table-striped">
	<thead>
	<tbody>
			<tr>
				<th scope="col"><center>ITERASI</center></th>
				<th scope="col"><center>X</center></th>
				<th scope="col"><center>F(X)</center></th>
			</tr>
		<?php
			$h = ($atas - $bawah)/$iterasi;
			for ($i=0; $i < $iterasi+1; $i++) { 

				$x[$i] = $bawah + $i*$h;
				$p = $x[$i];
				$y[$i] = ftabel($p);
				$fx = $y[$i];
		?>
			<tr>
				<td><center><?echo "$i";?></center></td>
				<td><center><?echo "$p";?></center></td>
				<td><center><?echo "$fx"?></center></td>
			</tr>
		<?php
			}$kondisi=0;
			for ($j=0; $j < $iterasi-1; $j++) { 
				if($y[$j]*$y[$j+1]<0){
					$kondisi = 1;
					$akar = $x[$j+1];
					if(abs($y[$j])<abs($y[$j+1])){
						$akar = $x[$j];
						echo "Akar dekat dengan $akar";
					}
					else{
						$akar = $x[$j+1];
						echo "Akar lebih dekat dengan $akar";
					}
				}
			}
			if($kondisi != 1){
			?>
					<div class="alert alert-danger" role="alert">
  						<center><b>TIDAK ADA AKAR</b></center>
  					</div>
					<a href="index.php"><button type="submit" class="btn btn-primary">Kembali</button></a>
					<?php
					die();
			}
			else
		?>
	</thead>
	</tbody>
	</table>
	<div class="alert alert-primary" role="alert"><center><b>
		<?php echo "Akar terletak di x = $akar"; ?></b></center>
	</div>
	<a href="index.php"><button type="submit" class="btn btn-primary">Kembali</button></a>
	</div>
</body>
</html>