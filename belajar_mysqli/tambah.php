<!DOCTYPE html>
<html>
	<head>
		<title>Tambah Data</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<h3>Form Tambah</h3>
		<form method="post" action="tambah_p.php">
			<table>
				<tr>
					<td>
						<input type="text" name="user" placeholder="Username">
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="pass" placeholder="Password">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" value="Simpan">
					</td>
				</tr>
			</table>
		</form>
		<a href="index.php" class="back">Kembali ke table user</a>
	</body>
</html>