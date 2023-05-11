<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tampilan Output</title>
</head>
<body>
	<h1>Data Registrasi</h1>
	<?php 
		$Nama = $_POST['nama'];
		$Alamat = $_POST['alamat'];
		$TempatLahir = $_POST['tmptlahir'];
		$TanggalLahir = $_POST['tgllahir'];
		$JenisKelamin = $_POST['jk'];
		$Pendidikan = $_POST['pend'];?>
	<table border="1" cellpadding="4">
		<tr>
			<td>Nama  </td><td><?php echo "$Nama"; ?></td>
		</tr>
		<tr>
			<td>Alamat  </td><td><?php echo "$Alamat"; ?></td>
		</tr>
		<tr>
			<td>Tempat Lahir </td><td> <?php echo "$TempatLahir"; ?></td>
		</tr>
		<tr>
			<td>Tanggal Lahir </td><td> <?php echo "$TanggalLahir"; ?></td>
		</tr>
		<tr>
			<td>Jenis Kelamin </td><td> <?php echo "$JenisKelamin"; ?></td>
		</tr>
		<tr>
			<td>Pendidikan </td><td> <?php echo "$Pendidikan"; ?></td>
		</tr>
	</table>
	<a href="tugas 003.php"></a>

</body>
</html>