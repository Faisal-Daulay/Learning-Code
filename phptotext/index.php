<!DOCTYPE html>
<html>
	<head>
		<title>Php To Text</title>
	</head>
	<body>
		<h2>Php To Text</h2>
		<table width="500" border="1">
			<tr>
				<td>Nama Bonus</td>
				<td>Harga Bonus</td>
			</tr>
			<?php
			include "konek.php";
			$tampil = mysql_query("SELECT * FROM bonus");
			$fh = fopen('data.txt', 'w');
			while ($row = mysql_fetch_array($tampil)) {
			    $last = end($row);
			    foreach ($row as $item) {
			        fwrite($fh, $item);
			        if ($item != $last)
			            fwrite($fh, "\t");
			    }
			    fwrite($fh, "\n");
			}
			fclose($fh);
				/*while ($ambil = mysql_fetch_array($tampil)) {
					$id = $ambil['id_bonus'];
					$nama_bonus = $ambil['nama_bonus'];
					$harga_bonus = $ambil['harga_bonus'];

					$open = fopen("contoh.txt", "w+");
					if ($open) {
						$content = "$nama_bonus";
						if (fwrite($open, $content)) {
							echo "Hallo";
						}
						else {
							echo "Cant write";
						}
					}
				}*/
			?>
		</table>
	</body>
</html>