<!DOCTYPE html>
<html>
<head>
	<title>Belajar JQuery Dasar</title>
	</head>

	<body>
		<button id="click">Tombol</button>
		<input type="text" name="nama" id="nama">
		<input type="text" name="isi" id="isi">

		<select id="pilih">
			<option value="Indonesia">Indonesia</option>
			<option value="Singapore">Singapore</option>
			<option value="Malaysia">Malaysia</option>
			<option value="Bangkok">Bangkok</option>
		</select>

		<table id="buku">
			<tr>
				<td>isi</td>
				<td>
					<input type="text" name="isi" id="isi">
				</td>
			</tr>
			<tr>
				<td>isi</td>
				<td>
					<input type="text" name="isi" id="isi">
				</td>
			</tr>
			<tr>
				<td>isi</td>
				<td>
					<input type="text" name="isi" id="isi">
				</td>
			</tr>
		</table>

		<script scr="Jquery.js" type="text/javascript"></script>
		<script src="jQuery1.js" type="text/javascript"></script>
		<script>
			$(document).ready(function() {
				/*$("#click").click(function(){
					var nama = $("#pilih").val();
					//alert(nama);
					$("#isi").val(nama);
				});*/

				$("#pilih").change(function(){
					var pilih =$("#pilih").val();
					$("#nama").show();
					$("#nama").val(pilih);
					$("#isi").focus();
				});
			});
		</script>
	</body>
</html>