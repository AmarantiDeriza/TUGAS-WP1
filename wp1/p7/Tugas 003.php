<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tugas 003</title>
</head>
<body>
	<h1>Form Registrasi</h1>
	<tbody>Isi Data di Bawah Ini :</tbody>
	<table>
	<form method="POST" action="proses tugas 003.php">
		<tr>
			<td>
				Nama : 
			</td>
			<td>
				<input type="text" name="nama" required>
			</td>
		</tr>
		<tr>
			<td>
				Alamat :
			</td>
			<td>
				<textarea name="alamat" required></textarea>
			</td>
		</tr>
		<tr>
			<td>
				Tempat Lahir :
			</td>
			<td>
				<input type="text" name="tmptlahir" required>
			</td>
		</tr>
		<tr>
			<td>
				Tanggal Lahir :
			</td>
			<td>
				<input type="text" name="tgllahir" required>
			</td>
		</tr>
		<tr>
			<td>
				Jenis Kelamin :
			</td>
			<td>
				<input type="radio" name="jk" value="LakiLaki">Laki - Laki<input type="radio" name="jk" value="Perempuan">Perempuan
			</td>
		</tr>
		<tr>
			<td>
				Pendidikan :
			</td>
				<td><select name=pend required>
				<option value="sma">SMA</option>
				<option value="d3">D3</option>
				<option value="s1">S1</option>
				<option value="s2">S2</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="submit" value="Submit">
				<input type="submit" name="batal" value="Cancel">
			</td>
		</tr>
	</form>
	</table>
</body>
</html>