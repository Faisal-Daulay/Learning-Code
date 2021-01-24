<!DOCTYPE>
<html>
<head>
	<title>Edit</title>
</head>
<body>
	<?php
		$tangakap=$_REQUEST['id'];
		$con = mysqli_connect("localhost","root","","lat_oop");
		$sql = "SELECT * FROM crud_oop WHERE id_crud='$tangakap' ";
		$run = $con->query($sql);
		if ($run->num_rows>0) {
			while ($cek=$run->fetch_assoc()) {
				$id=$cek['id_crud'];
				$nama = $cek['nama'];
				$kelas = $cek['kelas'];
				$alamat = $cek['alamat'];
	?>
	<form action="edit_pro.php" method="post">
		<table>
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<tr>
				<td>Ganti Nama</td>
				<td>
					<input type="text" name="nama" value="<?php echo $nama; ?>">
				</td>
			</tr>
			<tr>
				<td>Ganti Kelas</td>
				<td>
					<input type="text" name="kelas" value="<?php echo $kelas; ?>">
				</td>
			</tr>
			<tr>
				<td>Ganti Alamat</td>
				<td>
					<input type="text" name="alamat" value="<?php echo $alamat; ?>">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" value="Simpan Perubahan">
				</td>
			</tr>
		</table>
	</form>
	<?php

			}
		}
	?>
</body>
</html>