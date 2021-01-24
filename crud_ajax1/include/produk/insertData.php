<?php
	include '../koneksi.php';

	$result["pesan"] = "";
	$nama = $_REQUEST['nama'];
	$descrip = $_REQUEST['descrip'];
	$harga = $_REQUEST['harga'];

	if ($nama=="") {
		$result['pesan'] = "Isi Nama Produk";
	} elseif ($descrip=="") {
		$result['pesan'] = "Isi Description Produk";
	} elseif ($harga=="") {
		$result['pesan'] = "Isi Harga Produk";	
	} else {
		$produk = $konek -> query("INSERT INTO produk(nama,descrip,harga) VALUES('$nama','$descrip','$harga') ");
		if ($produk) {
			$result["pesan"] = "Insert Berhasil !";
		} else {
			$result["pesan"] = "Insert Gagal !";	
		}
	}

	echo json_encode($result);
?>