
		$(document).ready(function () {
			$("#nama").on('keyup',function(){
				var nama = $("#nama").val();
				//console.log(nama);
				$.ajax({
					type : "post",
					data : "nama="+nama,
					dataType : "html",
					url  : "include/produk/tampilData.php",
					success : function(data) {
						$("#tampilNama").html(data);
					} 
				});
			});
		});