<!DOCTYPE >
<html>
	<head>
		<title></title>
	</head>
	<body>
		<select id="pilih">
			<option>PILIH DATA</option>
			<option value="Indonesia">Indonesia</option>
			<option value="Singapore">Singapore</option>
			<option value="Malaysia">Malaysia</option>
			<option value="Bangkok">Bangkok</option>
		</select>

		<input type="text" name="nama" id="nama">

		

		<script scr="Jquery.js" type="text/javascript"></script>
		<script src="jQuery1.js" type="text/javascript"></script>

		<script type="text/javascript">
			$(document).ready(function () {
				$("#pilih").change(function(){
					var pilih = $("#pilih").val();

					//$("#nama").val(pilih);

					$.ajax({
						method : "post",
						url : "terimaData.php",
						data : {pilih:pilih},
						success: function(isi){
							//alert(isi);
							$("#nama").val(isi);
						},
						error: function(){
							alert("failure");
						}
					});
				});
			});
		</script>
	</body>
</html>