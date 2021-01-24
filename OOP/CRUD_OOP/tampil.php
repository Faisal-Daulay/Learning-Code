<!DOCTYPE>
<html>
<head>
	<title>Tampil Data</title>
</head>
<body>
	<table border="1" width="300" align="center">
		<tr>
			<th>Nama</th>
			<th>Kelas</th>
			<th>Alamat</th>
			<th>Action</th>
		</tr>
		<?php
			$con = mysqli_connect("localhost","root","","lat_oop");
			if (!$con) {
				echo "Koneksi Error";
			}
			$query = "SELECT * FROM crud_oop";
			$run = $con -> query($query);
			if ($run->num_rows>0) {
				while ($row=$run->fetch_assoc()) {
					$id=$row['id_crud'];
					$nama = $row['nama'];
					$kelas = $row['kelas'];
					$alamat = $row['alamat'];
		?>
		<tr align="center">
			<td><?php echo $nama; ?></td>
			<td><?php echo $kelas; ?></td>
			<td><?php echo $alamat; ?></td>
			<td>
				<a href="edit.php?id=<?php echo $id; ?>">Edit</a>
			</td>
		</tr>
		<?php 
			}
			} else {
				echo "Data Kosong";
			}
		 ?>
	</table>
</body>
</html>