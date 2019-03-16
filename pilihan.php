<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4/dist/css/bootstrap.min.css">
</head>
<body>
<?php 
	$pilihan = $_GET['pilihan'];
	switch ($pilihan) {
		case 1:
			header("Location: metodetabel/index.php");die();
			break;
		case 2:
			header("Location: biseksi/index.php");die();
			break;
		case 3:
			header("Location: regulafalsi/index.php");die();
			break;
		case 4:
			header("Location: iterasisederhana/index.php");die();
			break;
		case 5:
			header("Location: newtonrepson/index.php");die();
			break;
		case 6:
			header("Location: metodesecant/index.php");die();
			break;
		default:?>
			<div class="alert alert-danger" role="alert">
			<center>	
		<b><?php echo "TIDAK ADA PILIHAN"; ?>
		</b></center>
		</div>
		<center>
		<a href="index.php">
		<button type="submit" class="btn btn-primary">Kembali</button></a>
		</center>
		<?php
			break;
	}
 ?>
</body>
</html>
