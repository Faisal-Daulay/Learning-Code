<!DOCTYPE>
<html>
<head>
	<title>Belajar Function</title>
</head>
<body>
	<?php
		include 'function_1.php';
	?>
	<form action="proses.php" method="GET">
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<?php echo form('text','nama',''); ?>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>
					<?php echo form('text','alamat',''); ?>
				</td>
			</tr>
				<td>Hobi</td>
				<td>:</td>
				<td>
					<?php echo form('checkbox','hobi','bola kaki'); ?>Sepak Bola
					<?php echo form('checkbox','hobi','memasak'); ?>Memasak
					<?php echo form('checkbox','hobi','main Boneka'); ?>Main Boneka
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<?php echo form('radio','jk','Laki-Laki'); ?>Pria
					<?php echo form('radio','jk','Wanita'); ?>Wanita
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					<?php echo form('submit','','Simpan'); ?>
					<?php echo form('reset','','Hapus'); ?>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>