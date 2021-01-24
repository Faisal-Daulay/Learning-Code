<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<!-- Dan seterusnya -->

Total : <input type="text" name="Atotal" id="Atotal"/><br/><br/>

<!-- Dan seterusnya -->
bayar: <input type="text" name="Btotal" id="Btotal"/><br/><br/>

kembalian: <input type="text" name="selisih" id="selisih"/><br/><br/><br/>

<script type="text/javascript" src="jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$("#Atotal").click(function(){
			var Atotal =("#Btotal").val();
		});
	});
</script>

<!--<input type="text" id="isi">
<button id="ambil">ambil data</button>
<div id="hasil"></div>

 $(document).ready(function() {
    $("#ambil").click(function(event){
    	var isi=$("#isi").val();
    	$("#hasil").load('sumber.php', {"nama":isi} );
    });
 });
</script>-->

</body>
</html>