<!DOCTYPE html>
<html>
	<head>
		<title>Membuat Laporan DOMPDF</title>
		<style type="text/css">
			label{
				display:inline-block;
				width:100px;
			}
			
			#topdf{
				margin:0 0 0 100px;
			}
			
		</style>
	</head>
	<body>
		<p>Form Laporan Barang</p>
		<form method="post" action="pdf.php">
			<table>
				<tr>
					<td>Nama Barang</td>
					<td>:</td>
					<td>
						<input type="text" name="nabar">
					</td>
				</tr>
				<tr>
					<td>Jenis Barang</td>
					<td>:</td>
					<td>
						<input type="text" name="jebar">
					</td>
				</tr>
				<tr>
					<td>Jumlah Barang</td>
					<td>:</td>
					<td>
						<input type="text" name="jubar">
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>
						<input type="submit" name="kirim" value="Ambil Laporan Dalam Bentuk PDF">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>