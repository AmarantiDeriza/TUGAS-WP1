<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Operator Logika</title>
	<link rel="stylesheet" href="http://elearning.bsi.ac.id/assets/css/bootstrap.min.css">
</head>
<body>
	<h1> logika AND</h1>
	<table class="table table -hover">
		<thead>
			<tr>
				<th>a</th>
				<th>b</th>
				<th>c</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>TRUE</td>
				<td>TRUE</td>
				<td><?= TRUE && TRUE ?></td>
			</tr>	
			<tr>
				<td>TRUE</td>
				<td>FALSE</td>
				<td><?= TRUE && FALSE ?></td>
			</tr>	
			<tr>
				<td>FALSE</td>
				<td>TRUE</td>
				<td><?= FALSE && TRUE ?></td>
			</tr>	
			<tr>
				<td>FALSE</td>
				<td>FALSE</td>
				<td><?= FALSE && FALSE ?></td>
			</tr>	
		</tbody>
		<tfoot>
			<tr>
				<th>a</th>
				<th>b</th>
				<th>c</th>
			</tr>
		</foot>


	</table>
	<h1> logika OR</h1>
	<table class="table table -hover">
		<thead>
			<tr>
				<th>a</th>
				<th>b</th>
				<th>c</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>TRUE</td>
				<td>TRUE</td>
				<td><?= TRUE || TRUE ?></td>
			</tr>	
			<tr>
				<td>TRUE</td>
				<td>FALSE</td>
				<td><?= TRUE || FALSE ?></td>
			</tr>	
			<tr>
				<td>FALSE</td>
				<td>TRUE</td>
				<td><?= FALSE || TRUE ?></td>
			</tr>	
			<tr>
				<td>FALSE</td>
				<td>FALSE</td>
				<td><?= FALSE || FALSE ?></td>
			</tr>	
		</tbody>
		<tfoot>
			<tr>
				<th>a</th>
				<th>b</th>
				<th>c</th>
			</tr>
		</foot>


	</table>
	<h1> logika XOR</h1>
	<table class="table table -hover">
		<thead>
			<tr>
				<th>a</th>
				<th>b</th>
				<th>c</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>TRUE</td>
				<td>TRUE</td>
				<td><?= TRUE xor TRUE ?></td>
			</tr>	
			<tr>
				<td>TRUE</td>
				<td>FALSE</td>
				<td><?= TRUE xor FALSE ?></td>
			</tr>	
			<tr>
				<td>FALSE</td>
				<td>TRUE</td>
				<td><?= FALSE xor TRUE ?></td>
			</tr>	
			<tr>
				<td>FALSE</td>
				<td>FALSE</td>
				<td><?= FALSE xor FALSE ?></td>
			</tr>	
		</tbody>
		<tfoot>
			<tr>
				<th>a</th>
				<th>b</th>
				<th>c</th>
			</tr>
		</foot>


	</table>
</body>
</html>