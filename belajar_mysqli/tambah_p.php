<?php
	include_once 'koneksi.php';

	$user = $_REQUEST['user'];
	$pass = $_REQUEST['pass'];

	if ($user && $pass) {
		$sql = mysqli_query($db,"INSERT INTO user (username,password,status)
							VALUES ('$user','$pass','admin') ");
		echo "Berhasil &nbsp;&nbsp;&nbsp;";
		echo "
			[  <a href='index.php'>Lihat Table User</a>  ]
		";
	}
	else {
		echo "Gagal &nbsp;&nbsp;&nbsp;";
		echo "
			[  <a href='tambah.php'>Kembail Ke Form</a>  ]
		";		
	}
?>