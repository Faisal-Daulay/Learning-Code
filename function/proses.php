<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$konek = mysql_connect($host,$user,$pass);
	mysql_select_db('pkl_data');

	$nama = $_REQUEST['nama'];
	$alamat = $_REQUEST['alamat'];
	$hobi = $_REQUEST['hobi'];
	$jk = $_REQUEST['jk'];

	if ($nama !=="") {
		$multi = mysql_query(" INSERT INTO siswa (nama,alamat,hobi,jk)
		VALUES('$nama','$alamat','$hobi','$jk') ");
		echo "Berhasil";
	} else {
		echo "Gagal";
	}
?>
