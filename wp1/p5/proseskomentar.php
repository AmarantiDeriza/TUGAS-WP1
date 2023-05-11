<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DATA KOMENTAR</title>
</head>
<body>
	
</body>
</html>
<?php
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$komentar = $_POST['komentar'];

	echo "Nama Anda = $nama<br> Email Anda = $email <br> Komentar Anda = $komentar <br>";
?>

<a href="latihansoal.php" title="INPUT DATA LAGI">
INPUT DATA LAGI</a>