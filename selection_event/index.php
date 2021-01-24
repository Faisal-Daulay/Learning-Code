<!DOCTYPE html>
<html>	
	<head>
		<title>Selection Event</title>
		<script src="jquery.js"></script>
	</head>
	<body>
		A:<input type="text" id="a"><br/><br/>
		B:<input type="text" id="b"><br/><br/>

		X:<input type="text" id="x"><br/><br/>
		Y:<input type="text" id="y"><br/><br/>
		<input type="submit" value="Proses" id="proses">
	</body>
	<script>
		$('#proses').click(function() {
			var isiA = $('#a').val();
			var isiB = $('#b').val();
			$('#x').val(isiA);
			$('#y').val(isiB);

			//alert("Isi A = "+isiA+",Isi B = "+isiB);
		});
	</script>
</html>