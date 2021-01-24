<?php
	include_once 'koneksi.php';
	$del = $_REQUEST['del'];
	$hapus = mysqli_query($db,"DELETE FROM user WHERE id_user ='$del' ");
	if ($hapus == true) {
		echo "Berhasli di hapus &nbsp;&nbsp;&nbsp";
		echo "
			[  <a href='index.php'>Lihat Table User</a>  ]
		";
	}
	else {
		echo "Gagal di hapus &nbsp;&nbsp;&nbsp";
		echo "
			[  <a href='index.php'>Lihat Table User</a>  ]
		";
	}
?>