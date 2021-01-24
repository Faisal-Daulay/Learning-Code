<!DOCTYPE>
<html>
<head lang="en">
	<meta charset="utf-8">
	<title>CRUD AJAX 2</title>
</head>
<body>
	<h2>Belajar CRUD Dengan AJAX 2</h2>
	<form id="formData" method="post">
		<table>
	  <thead>
	    <!--<tr>
	      <td>Id Produk</td>
	      <td>
	        <input type="text" name="id">
	      </td>
	    </tr>-->
	    <tr>
	      <td>Nama Produk</td>
	      <td>
	        <input autocomplete="off" type="text" name="nama">
	      </td>
	    </tr>
	    <tr>
	      <td>Description Produk</td>
	      <td>
	        <input autocomplete="off" type="text" name="descrip">
	      </td>
	    </tr>
	    <tr>
	      <td>Harga Produk</td>
	      <td>
	        <input autocomplete="off" type="text" name="harga">
	      </td>
	    </tr>
	    <tr>
	      <td></td>
	      <td>
	        <button id="save">Save</button>
	      </td>
	    </tr>
	    <tr>
	      <td></td>
	      <td>
	      	<p id="pesan"></p>
	      </td>
	    </tr>
	  </thead>
		</table>
	</form>

	<script type="text/javascript" src="js/jquery.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function () {
			$("#save").click(function(){
				var data = $("#formData").serialize();
				//console.log(data+" "+data+" "+data);
				$.ajax({
					type : 'post',
    				data : data,
    				dataType : "html",
					url  : "include/produk/insertData.php",
					success: function(result) {
						$("#pesan").html(result);
					}
				});
			});
		});	
	</script>
</body>
</html>