<?php
	include '../koneksi.php';

	$result["pesan"] = "";
	$nama = $_REQUEST['nama'];
	$descrip = $_REQUEST['descrip'];
	$harga = $_REQUEST['harga'];

	$produk = $konek -> query("INSERT INTO produk(nama,descrip,harga) VALUES('$nama','$descrip','$harga') ");

	if ($produk!="") {
		$result["pesan"] = "Insert Success";
	} else {
		$result["pesan"] = "Insert Failed";
	}

	echo json_encode($result);
?>