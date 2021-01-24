<!DOCTYPE html>
<html>
	<head>
		<title>MYSQLI</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<h2 id="judul">Tampil Data Dengan MYSQLI</h2>
		<a href="tambah.php" id="tambah">Tambah Data</a>
		<table class="table">
			<thead>
				<tr>
					<td>Username</td>
					<td>Password</td>
					<td>Status</td>
					<td colspan="2">Action</td>
				</tr>
			</thead>
			<?php
				include_once 'koneksi.php';
				
				$mysqli = mysqli_query($db,"SELECT * FROM user");

				while ($show = mysqli_fetch_array($mysqli)) {
					$pass1 = md5($show['password']);
					echo "
						<tr class='tr'>
							<td>$show[username]</td>
							<td>$pass1</td>
							<td>$show[status]</td>
							<td><a href='delete.php?del=$show[id_user]'>Delete</a></td>
							<td><a href='edit.php?edit=$show[id_user]'>Edit</a></td>
						</tr>
					";
				}
			?>
		</table>
	</body>
</html>
